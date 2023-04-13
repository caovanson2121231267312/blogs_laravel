<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Code;
use App\Models\Tag;
use App\Http\Requests\Admin\ProductRequest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use App\Enums\TypeCode;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:user-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:user-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.product.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $codes = Code::all();
        $types = TypeCode::getInstances();
        // dd($types);
        return view("admin.product.add", compact('codes', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        try {
            DB::beginTransaction();

            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/assets/images/products/';
            $fileName = Str::slug(pathinfo($fileName, PATHINFO_FILENAME)) . '-' . Carbon::now()->timestamp;
            $fileExt = $file->getClientOriginalExtension();
            $file->move($destinationPath, $fileName . "." . $fileExt);

            $product = Product::create([
                'title' => $request->title,
                'description' => $request->description,
                'keywords' => $request->keywords,
                'video' => $request->video,
                'type' => $request->type,
                'image' => $fileName . "." . $fileExt,
                'link' => $request->link,
                'price' => $request->price,
                'hot' => $request->hot ? 1 : 0,
                'commit' => $request->commit,
                'detail' => $request->detail,
                'tutorial' => $request->tutorial,
                'code_id' => $request->code_id,
                'user_id' => Auth()->user()->id,
            ]);

            // $Product->tags()->attach($request->tag);

            DB::commit();

            session()->flash('message', 'Đã tạo thành công ' . $product->name);
            return redirect()->route("products.index");
        } catch (Exception $e) {
            DB::rollBack();
            
            session()->flash('error', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $data = Product::findOrFail($id)->load(["user", "code"]);

            return view("admin.product.show", ["data" => $data]);
        } catch (ModelNotFoundException $e) {

            session()->flash('error', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $code = Code::all();
            $data = Product::findOrFail($id)->load("tags");

            return view("admin.product.edit", [
                "data" => $data,
                "code" => $code,
            ]);
        } catch (ModelNotFoundException $e) {

            session()->flash('error', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        try {
            DB::beginTransaction();

            $data = array_merge(
                $request->only([
                    'name',
                    'description',
                    'content',
                    'category_id',
                ]),
                [
                    'user_id' => Auth()->user()->id,
                ]
            );
            if ($request->has("image")) {
                $file = $request->file('image');
                $fileName = $file->getClientOriginalName();
                $destinationPath = public_path() . '/assets/images/Products/';
                $fileName = Str::slug(pathinfo($fileName, PATHINFO_FILENAME)) . '-' . Carbon::now()->timestamp;
                $fileExt = $file->getClientOriginalExtension();
                $file->move($destinationPath, $fileName . "." . $fileExt);
                $data['image'] = $fileName . "." . $fileExt;
            }

            $Product = Product::findOrFail($id);
            $Product->update($data);

            $Product->tags()->sync($request->tag);

            DB::commit();

            session()->flash("message", "Đã sửa thành công");
            return redirect()->route("Products.index");
        } catch (ModelNotFoundException $e) {

            DB::rollBack();

            session()->flash('error', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $data = Product::findOrFail($id);
            $data->delete();

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();

            return response()->json([
                'message' => __('have error :' . $th->getMessage()),
            ], 500);
        }

        session()->flash("delete-success", "Đã xóa " . $data->name . " thành công");

        return redirect()->route('Products.index');
    }
}