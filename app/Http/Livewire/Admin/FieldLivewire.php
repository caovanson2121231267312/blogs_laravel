<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Field;
use App\Traits\LivewireAble;

class FieldLivewire extends Component
{
    use LivewireAble;

    public function __construct()
    {
        $this->model = new Field;
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
            ->withCount("jobs")
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate(10);

        $this->loading = false;
        return view('livewire.admin.field-livewire', ['data' => $this->data]);
    }
}
