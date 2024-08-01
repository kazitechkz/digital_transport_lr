<?php

namespace App\Livewire\SideStoneStamp;

use App\Http\Requests\SideStoneStamp\SideStoneStampUpdateRequest;
use App\Models\SideStoneStamp;
use Livewire\Component;

class Edit extends Component
{
    public SideStoneStamp $sideStoneStamp;
    #[Validate]
    public $title_ru;
    #[Validate]
    public $title_kk;
    public $title_en;

    public function mount($sideStoneStamp)
    {
        $this->sideStoneStamp = $sideStoneStamp;
        $this->title_ru = $this->sideStoneStamp->title_ru;
        $this->title_kk = $this->sideStoneStamp->title_kk;
        $this->title_en = $this->sideStoneStamp->title_en;
    }

    protected function rules()
    {
        return (new SideStoneStampUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.side-stone-stamp.edit');
    }
}
