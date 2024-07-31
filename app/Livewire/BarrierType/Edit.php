<?php

namespace App\Livewire\BarrierType;

use App\Http\Requests\WellsType\WellsTypeUpdateRequest;
use App\Models\BarrierType;
use App\Models\WellsType;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public BarrierType $barrierType;
    #[Validate]
    public $title_ru;
    #[Validate]
    public $title_kk;
    public $title_en;

    public function mount($barrierType)
    {
        $this->barrierType = $barrierType;
        $this->title_ru = $this->barrierType->title_ru;
        $this->title_kk = $this->barrierType->title_kk;
        $this->title_en = $this->barrierType->title_en;
    }

    protected function rules()
    {
        return (new WellsTypeUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.barrier-type.edit');
    }
}
