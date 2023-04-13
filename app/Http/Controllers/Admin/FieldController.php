<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use App\Models\Field;
use App\Http\Requests\Admin\FieldRequest;

class FieldController extends Controller
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
        return view("admin.fields.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $htmlSlelect = '';
    private $data;
    protected function menu($parent_id, $id = 0, $gt = '')
    {
        foreach ($this->data as $value) {
            if ($value['parent_id'] == $id) {
                if (!empty($parent_id) && $parent_id == $value['id']) {
                    $this->htmlSlelect .= "<option selected value='" . $value['id'] . "'>" . $gt . $value['name'] . "</option>";
                } else {
                    $this->htmlSlelect .= "<option value='" . $value['id'] . "'>" . $gt . $value['name'] . "</option>";
                }
                $this->menu($parent_id, $value['id'], $gt . '=');
            }
        }
        return $this->htmlSlelect;
    }

    public function create()
    {
        $this->data = Field::all();
        $htmlSlelect = $this->menu('', 0, '');
        return view("admin.fields.add", ['html' => $htmlSlelect]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FieldRequest $request)
    {
        try {
            DB::beginTransaction();

            $tag = Field::create([
                "name" => $request->name,
                "parent_id" => $request->parent_id,
            ]);

            DB::commit();

            session()->flash('message', 'Đã tạo thành công ' . $tag->nam);
            return redirect()->route("fields.index");
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
            $data = Field::findOrFail($id)->loadCount("jobs");

            return view("admin.fields.show", ["data" => $data]);
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

            $data = Field::findOrFail($id);
            $this->data = Field::all();
            $htmlSlelect = $this->menu($data->parent_id, 0, '');

            return view("admin.fields.edit", ["data" => $data, 'html' => $htmlSlelect]);
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
    public function update(FieldRequest $request, $id)
    {
        try {
            DB::beginTransaction();

            $data = Field::findOrFail($id);
            $data->update([
                "name" => $request->name,
                "parent_id" => $request->parent_id,
            ]);

            DB::commit();

            session()->flash("message", "Đã sửa thành công");
            return redirect()->route("fields.index");
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

            $data = Field::findOrFail($id);
            $data->delete();

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();

            return response()->json([
                'message' => __('have error :' . $th->getMessage()),
            ], 500);
        }

        session()->flash("delete-success", "Đã xóa " . $data->name . " thành công");
        return redirect()->route('fields.index');
    }
}
