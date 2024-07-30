<?php

namespace App\Livewire\CoverageType;

use App\Http\Requests\CoverageType\CoverageTypeCreateRequest;
use App\Http\Requests\CoverageType\CoverageTypeUpdateRequest;
use App\Models\CoverageType;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public CoverageType $coverageType;
    #[Validate]
    public $title_ru;
    #[Validate]
    public $title_kk;
    public $title_en;

    public function mount($coverageType)
    {
        $this->coverageType = $coverageType;
        $this->title_ru = $this->coverageType->title_ru;
        $this->title_kk = $this->coverageType->title_kk;
        $this->title_en = $this->coverageType->title_en;
    }

    protected function rules()
    {
        return (new CoverageTypeUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function render()
    {
        return view('livewire.coverage-type.edit');
    }
}
