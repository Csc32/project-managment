<?php

namespace App\Livewire;

use App\Models\Pfgs;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;
use Illuminate\Database\Eloquent\Builder;

class PfgTable extends Component
{
    use WithPagination;
    public $btnTitle = "Agregar";
    public $searchValue = "";

    #[On('searching')]
    public function handleSearching($value)
    {
        $this->searchValue = $value;
    }

    public function edit($id)
    {
        return $this->dispatch("edit", $id);
    }
    public function render()
    {
        $pfgs = Pfgs::query()
            ->when($this->searchValue, function (Builder $query) {
                $query->where("name", "like", $this->searchValue . "%");
            })
            ->paginate(10);
        return view('livewire.pfg-table', ['pfgs' => $pfgs]);
    }
}
