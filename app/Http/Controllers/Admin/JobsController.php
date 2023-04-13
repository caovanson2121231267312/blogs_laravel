<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use App\Models\Freelancer as Jobs;
use App\Models\Field;
use App\Http\Requests\Admin\JobsRequest;
use App\Enums\PayType;
use App\Enums\WorkType;

class JobsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:user-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:user-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }

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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.jobs.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fields = Field::all();
        $pays = PayType::getInstances();
        $works = WorkType::getInstances();

        return view("admin.jobs.add", [
            'fields' => $fields,
            'pays' => $pays,
            'works' => $works,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobsRequest $request)
    {
        try {
            DB::beginTransaction();
            $data = [
                "title" => $request->title,
                "description" => $request->description,
                "check" => 1,
                "skill" => $request->skill,
                "time_limit" => $request->time_limit,
                "work_type" => $request->work_type,
                "pay_type" => $request->pay_type,
                "min_price" => $request->min_price,
                "max_price" => $request->max_price,
                "user_id" => auth()->user()->id,
                "field_id" => $request->field_id,
            ];

            $data = Jobs::create($data);

            DB::commit();

            session()->flash('message', 'Đã tạo thành công ' . $data->name);
            return redirect()->route("jobs.index");
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        try {
            $data = Jobs::findOrFail($id)->loadCount("products");

            return view("admin.jobs.show", ["data" => $data]);
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
            $data = Jobs::findOrFail($id)->load(['field', 'user']);
            $this->data = Field::all();
            $fields = $this->menu($data->field_id, 0, '');
            $pays = PayType::getInstances();
            $works = WorkType::getInstances();

            return view("admin.jobs.edit", [
                "data" => $data,
                "html" => $fields,
                "pays" => $pays,
                "works" => $works,
            ]);
        } catch (Exception $e) {

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
    public function update(JobsRequest $request, $id)
    {
        try {
            DB::beginTransaction();

            $data = Jobs::findOrFail($id);

            $d = [
                "title" => $request->title,
                "description" => $request->description,
                "skill" => $request->skill,
                "time_limit" => $request->time_limit,
                "work_type" => $request->work_type,
                "pay_type" => $request->pay_type,
                "min_price" => $request->min_price,
                "max_price" => $request->max_price,
                "user_id" => auth()->user()->id,
                "field_id" => $request->field_id,
            ];
            // dd($d);

            $data->update($d);

            DB::commit();

            session()->flash("message", "Đã sửa thành công");
            return redirect()->route("jobs.index");
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

            $data = Jobs::findOrFail($id);
            $data->delete();

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();

            return response()->json([
                'message' => __('have error :' . $th->getMessage()),
            ], 500);
        }

        session()->flash("delete-success", "Đã xóa " . $data->name . " thành công");
        return redirect()->route('jobs.index');
    }
}