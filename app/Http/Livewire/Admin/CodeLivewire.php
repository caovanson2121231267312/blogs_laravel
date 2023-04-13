<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Code;
use App\Traits\LivewireAble;

class CodeLivewire extends Component
{
    use LivewireAble;

    public function __construct()
    {
        $this->model = new Code;
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

        $this->data = $this->model->where('name', 'like', '%' . $this->name . '%')
            ->withCount("products")
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate(10);

        $this->loading = false;

        return view('livewire.admin.code-livewire', ["data" => $this->data]);
    }
}