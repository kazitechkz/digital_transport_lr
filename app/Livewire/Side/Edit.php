<?php

namespace App\Livewire\Side;

use App\Http\Requests\CoverageType\CoverageTypeUpdateRequest;
use App\Http\Requests\Side\SideUpdateRequest;
use App\Models\CoverageType;
use App\Models\Side;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public Side $side;
    #[Validate]
    public $title_ru;
    #[Validate]
    public $title_kk;
    public $title_en;

    public function mount($side)
    {
        $this->side = $side;
        $this->title_ru = $this->side->title_ru;
        $this->title_kk = $this->side->title_kk;
        $this->title_en = $this->side->title_en;
    }

    protected function rules()
    {
        return (new SideUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.side.edit');
    }
}
