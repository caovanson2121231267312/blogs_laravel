<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use App\Traits\LivewireAble;
use App\Enums\TypeCode;

class ProductLivewire extends Component
{
    use LivewireAble;

    public $selectedCategory = '';
    public $selectedUser = '';
    public $selectedType = '';
    public $table = "products.";

    public function __construct()
    {
        $this->model = new Product;
        $this->sortBy = $this->table . $this->sortBy;
    }

    public function selectedUser($selectedUser)
    {
        $this->selectedUser = $selectedUser;
    }

    protected $listeners = ['postAdded' => 'selectedUser'];

    public function isChecked($id)
    {
        $data = Product::find($id);
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
        $data = Product::find($id);
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
        $types = TypeCode::getInstances();

        // $test = array_map(function ($item) {
        //     return $this->table . $item;
        // }, $this->model->getTableColumns());

        $this->data = $this->model->where($this->table . 'title', 'like', '%' . $this->name . '%')
            ->select(
                $this->table . "title",
                $this->table . "image",
                $this->table . "download",
                $this->table . "slug",
                $this->table . "type",
                $this->table . "link",
                $this->table . "id",
                $this->table . "view",
                $this->table . "code_id",
                $this->table . "user_id",
                $this->table . "checked",
                $this->table . "hot",
            )
            ->when($this->selectedCategory != '', function ($q) {
                return $q->where('code_id', '=', $this->selectedCategory);
            })
            ->when($this->selectedType != '', function ($q) {
                return $q->where('type', '=', $this->selectedType);
            })
            ->when($this->selectedUser != '', function ($q) {
                return $q->where('user_id', '=', $this->selectedUser);
            })
            ->join('users', $this->table . 'user_id', '=', 'users.id')
            ->join('codes', $this->table . 'code_id', '=', 'codes.id')
            ->with(["user", "code"])
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate(10);
        $this->loading = false;
        // dd($this->data);
        return view('livewire.admin.product-livewire', [
            "data" => $this->data, 
            "types" => $types
        ]);
    }
}