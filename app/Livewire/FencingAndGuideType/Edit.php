<?php

namespace App\Livewire\FencingAndGuideType;

use App\Http\Requests\FencingAndGuideType\FencingAndGuideTypeUpdateRequest;
use App\Http\Requests\Side\SideUpdateRequest;
use App\Models\FencingAndGuideType;
use App\Models\Side;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public FencingAndGuideType $fencingAndGuideType;
    #[Validate]
    public $title_ru;
    #[Validate]
    public $title_kk;
    public $title_en;

    public function mount($fencingAndGuideType)
    {
        $this->fencingAndGuideType = $fencingAndGuideType;
        $this->title_ru = $this->fencingAndGuideType->title_ru;
        $this->title_kk = $this->fencingAndGuideType->title_kk;
        $this->title_en = $this->fencingAndGuideType->title_en;
    }

    protected function rules()
    {
        return (new FencingAndGuideTypeUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.fencing-and-guide-type.edit');
    }
}
