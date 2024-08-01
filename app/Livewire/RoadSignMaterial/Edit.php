<?php

namespace App\Livewire\RoadSignMaterial;

use App\Http\Requests\RoadSignMaterial\RoadSignMaterialUpdateRequest;
use App\Models\RoadSignMaterial;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public RoadSignMaterial $roadSignMaterial;
    #[Validate]
    public $title_ru;
    #[Validate]
    public $title_kk;
    public $title_en;

    public function mount($roadSignMaterial)
    {
        $this->roadSignMaterial = $roadSignMaterial;
        $this->title_ru = $this->roadSignMaterial->title_ru;
        $this->title_kk = $this->roadSignMaterial->title_kk;
        $this->title_en = $this->roadSignMaterial->title_en;
    }

    protected function rules()
    {
        return (new RoadSignMaterialUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.road-sign-material.edit');
    }
}
