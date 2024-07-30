<?php

namespace App\Livewire\LandingType;

use App\Http\Requests\LandingType\LandingTypeCreateRequest;
use App\Http\Requests\WellsType\WellsTypeCreateRequest;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Validate]
    public $title_ru;
    #[Validate]
    public $title_kk;
    public $title_en;

    public function mount(){
        $this->title_ru = old("title_ru");
        $this->title_kk = old("title_kk");
        $this->title_en = old("title_en");
    }

    protected function rules(){
        return (new LandingTypeCreateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.landing-type.create');
    }
}
