<?php

namespace App\Livewire\TypeTrafficLight;

use App\Http\Requests\TypeTrafficLight\TypeTrafficLightUpdateRequest;
use App\Models\TypeTrafficLight;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public TypeTrafficLight $typeTrafficLight;
    #[Validate]
    public $title_ru;
    #[Validate]
    public $title_kk;
    public $title_en;

    public function mount($typeTrafficLight)
    {
        $this->typeTrafficLight = $typeTrafficLight;
        $this->title_ru = $this->typeTrafficLight->title_ru;
        $this->title_kk = $this->typeTrafficLight->title_kk;
        $this->title_en = $this->typeTrafficLight->title_en;
    }

    protected function rules()
    {
        return (new TypeTrafficLightUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.type-traffic-light.edit');
    }
}
