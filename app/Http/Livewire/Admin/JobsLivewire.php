<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Freelancer as Jobs;
use App\Traits\LivewireAble;
use App\Enums\WorkType;
use App\Enums\PayType;

class JobsLivewire extends Component
{
    use LivewireAble;

    public $selectedField = '';
    public $selectedUser = '';
    public $selectedWorkType = '';
    public $selectedPayType = '';
    public $table = "freelancers.";

    public function __construct()
    {
        $this->model = new Jobs;
        $this->sortBy = $this->table . $this->sortBy;
    }
    public function cancelFilter()
    {
        $this->selectedField = '';
        $this->selectedUser = '';
        $this->selectedWorkType = '';
        $this->selectedPayType = '';
    }

    public function selectedUser($selectedUser)
    {
        $this->selectedUser = $selectedUser;
    }

    protected $listeners = ['postAdded' => 'selectedUser'];

    public function isChecked($id)
    {
        $data = Jobs::find($id);
        if ($data->checked) {
            $bool = 0;
        } else {
            $bool = 1;
        }
        $data->update([
            "checked" => $bool,
        ]);

        session()->flash('alert_success', "Đã chuyển trạng thái của " . $data->title);
    }

    public function isHot($id)
    {
        $data = Jobs::find($id);
        if ($data->hot) {
            $bool = 0;
        } else {
            $bool = 1;
        }
        $data->update([
            "hot" => $bool,
        ]);

        session()->flash('alert_success', "Đã chuyển trạng thái của " . $data->title);
    }


    public function submitForm()
    {
        $this->validate([
            'name' => 'required',
        ]);
    }

    public function render()
    {
        $this->loading = true;
        $works = WorkType::getInstances();
        $pays = PayType::getInstances();

        // $test = array_map(function ($item) {
        //     return $this->table . $item;
        // }, $this->model->getTableColumns());

        $this->data = $this->model->where($this->table . 'title', 'like', '%' . $this->name . '%')
            ->select(
                $this->table . "title",
                $this->table . "work_type",
                // $this->table . "download",
                $this->table . "slug",
                $this->table . "time_limit",
                $this->table . "max_price",
                $this->table . "id",
                $this->table . "view",
                $this->table . "field_id",
                $this->table . "user_id",
                $this->table . "check",
                $this->table . "min_price",
                $this->table . "created_at",
            )
            ->when($this->selectedField != '', function ($q) {
                return $q->where('field_id', '=', $this->selectedField);
            })
            ->when($this->selectedWorkType != '', function ($q) {
                return $q->where('work_type', '=', $this->selectedWorkType);
            })
            ->when($this->selectedPayType != '', function ($q) {
                return $q->where('pay_type', '=', $this->selectedPayType);
            })
            ->when($this->selectedUser != '', function ($q) {
                return $q->where('user_id', '=', $this->selectedUser);
            })
            ->join('users', $this->table . 'user_id', '=', 'users.id')
            ->join('fields', $this->table . 'field_id', '=', 'fields.id')
            ->with(["user", "field"])
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate(10);
        $this->loading = false;

        return view('livewire.admin.jobs-livewire', [
            'data' => $this->data,
            'works' => $works,
            'pays' => $pays,
        ]);
    }
}
