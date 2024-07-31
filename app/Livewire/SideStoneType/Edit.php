<?php

namespace App\Livewire\SideStoneType;

use App\Http\Requests\Side\SideUpdateRequest;
use App\Http\Requests\SideStoneType\SideStoneTypeUpdateRequest;
use App\Models\Side;
use App\Models\SideStoneType;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public SideStoneType $sideStoneType;
    #[Validate]
    public $title_ru;
    #[Validate]
    public $title_kk;
    public $title_en;

    public function mount($sideStoneType)
    {
        $this->sideStoneType = $sideStoneType;
        $this->title_ru = $this->sideStoneType->title_ru;
        $this->title_kk = $this->sideStoneType->title_kk;
        $this->title_en = $this->sideStoneType->title_en;
    }

    protected function rules()
    {
        return (new SideStoneTypeUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.side-stone-type.edit');
    }
}
