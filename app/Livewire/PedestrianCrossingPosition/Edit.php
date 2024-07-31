<?php

namespace App\Livewire\PedestrianCrossingPosition;

use App\Http\Requests\PedestrianCrossingPosition\PedestrianCrossingPositionCreateRequest;
use App\Http\Requests\PedestrianCrossingPosition\PedestrianCrossingPositionUpdateRequest;
use App\Http\Requests\PedestrianCrossingType\PedestrianCrossingTypeUpdateRequest;
use App\Models\PedestrianCrossingPosition;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public PedestrianCrossingPosition $pedestrianCrossingPosition;
    #[Validate]
    public $title_ru;
    #[Validate]
    public $title_kk;
    public $title_en;

    public function mount($pedestrianCrossingPosition)
    {
        $this->pedestrianCrossingPosition = $pedestrianCrossingPosition;
        $this->title_ru = $this->pedestrianCrossingPosition->title_ru;
        $this->title_kk = $this->pedestrianCrossingPosition->title_kk;
        $this->title_en = $this->pedestrianCrossingPosition->title_en;
    }

    protected function rules()
    {
        return (new PedestrianCrossingPositionUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.pedestrian-crossing-position.edit');
    }
}
