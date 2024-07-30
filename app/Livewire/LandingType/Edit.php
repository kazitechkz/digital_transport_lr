<?php

namespace App\Livewire\LandingType;

use App\Http\Requests\LandingType\LandingTypeUpdateRequest;
use App\Http\Requests\WellsType\WellsTypeUpdateRequest;
use App\Models\LandingType;
use App\Models\WellsType;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public LandingType $landingType;
    #[Validate]
    public $title_ru;
    #[Validate]
    public $title_kk;
    public $title_en;

    public function mount($landingType)
    {
        $this->landingType = $landingType;
        $this->title_ru = $this->landingType->title_ru;
        $this->title_kk = $this->landingType->title_kk;
        $this->title_en = $this->landingType->title_en;
    }

    protected function rules()
    {
        return (new LandingTypeUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.landing-type.edit');
    }
}
