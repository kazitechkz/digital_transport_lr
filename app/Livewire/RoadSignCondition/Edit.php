<?php

namespace App\Livewire\RoadSignCondition;

use App\Http\Requests\RoadSignCondition\RoadSignConditionUpdateRequest;
use App\Models\RoadSignCondition;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public RoadSignCondition $roadSignCondition;
    #[Validate]
    public $title_ru;
    #[Validate]
    public $title_kk;
    public $title_en;

    public function mount($roadSignCondition)
    {
        $this->roadSignCondition = $roadSignCondition;
        $this->title_ru = $this->roadSignCondition->title_ru;
        $this->title_kk = $this->roadSignCondition->title_kk;
        $this->title_en = $this->roadSignCondition->title_en;
    }

    protected function rules()
    {
        return (new RoadSignConditionUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.road-sign-condition.edit');
    }
}
