<?php

namespace App\Livewire\LightingSupportType;

use App\Http\Requests\LightingSupportType\LightingSupportTypeUpdateRequest;
use App\Http\Requests\WellsType\WellsTypeUpdateRequest;
use App\Models\LightingSupportType;
use App\Models\WellsType;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public LightingSupportType $lightingSupportType;
    #[Validate]
    public $title_ru;
    #[Validate]
    public $title_kk;
    public $title_en;

    public function mount($lightingSupportType)
    {
        $this->lightingSupportType = $lightingSupportType;
        $this->title_ru = $this->lightingSupportType->title_ru;
        $this->title_kk = $this->lightingSupportType->title_kk;
        $this->title_en = $this->lightingSupportType->title_en;
    }

    protected function rules()
    {
        return (new LightingSupportTypeUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.lighting-support-type.edit');
    }
}
