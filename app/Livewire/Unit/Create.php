<?php

namespace App\Livewire\Unit;

use App\Http\Requests\Side\SideCreateRequest;
use App\Http\Requests\Unit\UnitCreateRequest;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Validate]
    public $name;
    #[Validate]
    public $symbol;

    public function mount(){
        $this->name = old("name");
        $this->symbol = old("symbol");
    }

    protected function rules(){
        return (new UnitCreateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.unit.create');
    }
}
