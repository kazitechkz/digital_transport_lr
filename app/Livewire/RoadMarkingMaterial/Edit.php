<?php

namespace App\Livewire\RoadMarkingMaterial;

use App\Http\Requests\RoadMarkingMaterial\RoadMarkingMaterialUpdateRequest;
use App\Models\RoadMarkingMaterial;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public RoadMarkingMaterial $roadMarkingMaterial;
    #[Validate]
    public $title_ru;
    #[Validate]
    public $title_kk;
    public $title_en;

    public function mount($roadMarkingMaterial)
    {
        $this->roadMarkingMaterial = $roadMarkingMaterial;
        $this->title_ru = $this->roadMarkingMaterial->title_ru;
        $this->title_kk = $this->roadMarkingMaterial->title_kk;
        $this->title_en = $this->roadMarkingMaterial->title_en;
    }

    protected function rules()
    {
        return (new RoadMarkingMaterialUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.road-marking-material.edit');
    }
}
