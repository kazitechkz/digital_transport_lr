<?php

namespace App\Livewire\CategoryOfHighway;

use App\Http\Requests\CategoryOfHighway\CategoryOfHighwayCreateRequest;
use App\Http\Requests\CoverageType\CoverageTypeCreateRequest;
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
        return (new CategoryOfHighwayCreateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.category-of-highway.create');
    }
}
