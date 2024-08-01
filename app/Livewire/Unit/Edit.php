<?php

namespace App\Livewire\Unit;

use App\Http\Requests\Unit\UnitCreateRequest;
use App\Http\Requests\Unit\UnitUpdateRequest;
use App\Models\Unit;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public Unit $unit;
    #[Validate]
    public $name;
    #[Validate]
    public $symbol;

    public function mount($unit){
        $this->unit = $unit;
        $this->name = $unit->name;
        $this->symbol = $unit->symbol;
    }

    protected function rules(){
        return (new UnitUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.unit.edit');
    }
}
