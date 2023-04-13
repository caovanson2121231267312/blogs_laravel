<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use App\Models\Code;
use App\Http\Requests\Admin\CodeRequest;

class CodeController extends Controller
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
        return view("admin.code.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.code.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CodeRequest $request)
    {
        try {
            DB::beginTransaction();

            $tag = Code::create([
                "name" => $request->name,
                "description" => $request->description,
                "keywords" => $request->keywords,
            ]);

            DB::commit();

            session()->flash('message', 'Đã tạo thành công ' . $tag->name);
            return redirect()->route("codes.index");
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
            $data = Code::findOrFail($id)->loadCount("products");

            return view("admin.code.show", ["data" => $data]);
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
            $data = Code::findOrFail($id);

            return view("admin.code.edit", ["data" => $data]);
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
    public function update(codeRequest $request, $id)
    {
        try {
            DB::beginTransaction();

            $data = Code::findOrFail($id);
            $data->update([
                "name" => $request->name,
                "description" => $request->description,
                "keywords" => $request->keywords,
            ]);

            DB::commit();

            session()->flash("message", "Đã sửa thành công");
            return redirect()->route("codes.index");
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

            $data = Code::findOrFail($id);
            $data->delete();

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();

            return response()->json([
                'message' => __('have error :' . $th->getMessage()),
            ], 500);
        }

        session()->flash("delete-success", "Đã xóa " . $data->name . " thành công");
        return redirect()->route('codes.index');
    }
}