<?php

namespace App\Livewire\RoadSign;

use App\Http\Requests\RoadSign\RoadSignCreateRequest;
use App\Http\Requests\RoadSign\RoadSignUpdateRequest;
use App\Models\RoadSign;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public RoadSign $roadSign;
    #[Validate]
    public $title_ru;
    #[Validate]
    public $title_kk;
    public $title_en;
    public $normative_act;
    public $sign_number;
    public $is_active;

    public function mount($roadSign){
        $this->roadSign = $roadSign;
        $this->title_ru = $this->roadSign->title_ru;
        $this->title_kk = $this->roadSign->title_kk;
        $this->title_en = $this->roadSign->title_en;
        $this->normative_act = $this->roadSign->normative_act;
        $this->sign_number = $this->roadSign->sign_number;
        $this->is_active = $this->roadSign->is_active;
    }

    protected function rules(){
        return (new RoadSignUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.road-sign.edit');
    }
}
