<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
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
        return view("admin.category.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.category.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        try {
            DB::beginTransaction();

            $tag = Category::create([
                "name" => $request->name,
                "description" => $request->description,
            ]);

            DB::commit();
            return redirect()->route("categories.index")
                ->with('message', 'Đã tạo thành công ' . $tag->name);
        } catch (Exception $e) {
            DB::rollBack();

            return redirect()->back()
                ->with(['error' => $e->getMessage()]);
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
            $data = Category::findOrFail($id)->loadCount("articles");

            return view("admin.category.show", ["data" => $data]);
        } catch (ModelNotFoundException $e) {

            return redirect()->back()->with(["error" => $e->getMessage()]);
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
            $data = Category::findOrFail($id);

            return view("admin.category.edit", ["data" => $data]);
        } catch (ModelNotFoundException $e) {

            return redirect()->back()->with(["error" => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        try {
            DB::beginTransaction();

            $data = Category::findOrFail($id);
            $data->update([
                "name" => $request->name,
                "description" => $request->description,
            ]);

            DB::commit();
            return redirect()->route("categories.index")->with(["message" => "Đã sửa thành công"]);
        } catch (ModelNotFoundException $e) {

            DB::rollBack();
            return redirect()->back()->with(["error" => $e->getMessage()]);
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

            $data = Category::findOrFail($id);
            $data->delete();

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();

            return response()->json([
                'message' => __('have error :' . $th->getMessage()),
            ], 500);
        }

        return redirect()->route('categories.index')->with("delete-success", "Đã xóa " . $data->name . " thành công");
    }
}