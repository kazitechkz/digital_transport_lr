<?php

namespace App\Livewire\PedestrianCrossingType;

use App\Http\Requests\PedestrianCrossingType\PedestrianCrossingTypeUpdateRequest;
use App\Http\Requests\SideStoneType\SideStoneTypeUpdateRequest;
use App\Models\PedestrianCrossingType;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public PedestrianCrossingType $pedestrianCrossingType;
    #[Validate]
    public $title_ru;
    #[Validate]
    public $title_kk;
    public $title_en;

    public function mount($pedestrianCrossingType)
    {
        $this->pedestrianCrossingType = $pedestrianCrossingType;
        $this->title_ru = $this->pedestrianCrossingType->title_ru;
        $this->title_kk = $this->pedestrianCrossingType->title_kk;
        $this->title_en = $this->pedestrianCrossingType->title_en;
    }

    protected function rules()
    {
        return (new PedestrianCrossingTypeUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.pedestrian-crossing-type.edit');
    }
}
