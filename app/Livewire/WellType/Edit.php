<?php

namespace App\Livewire\WellType;

use App\Http\Requests\Side\SideUpdateRequest;
use App\Http\Requests\WellsType\WellsTypeUpdateRequest;
use App\Models\Side;
use App\Models\WellsType;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public WellsType $wellType;
    #[Validate]
    public $title_ru;
    #[Validate]
    public $title_kk;
    public $title_en;

    public function mount($wellType)
    {
        $this->wellType = $wellType;
        $this->title_ru = $this->wellType->title_ru;
        $this->title_kk = $this->wellType->title_kk;
        $this->title_en = $this->wellType->title_en;
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
        return view('livewire.well-type.edit');
    }
}
