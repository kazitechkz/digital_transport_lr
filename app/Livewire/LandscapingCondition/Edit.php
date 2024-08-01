<?php

namespace App\Livewire\LandscapingCondition;

use App\Http\Requests\FlooringCondition\FlooringConditionUpdateRequest;
use App\Http\Requests\LandscapingCondition\LandscapingConditionUpdateRequest;
use App\Models\FlooringCondition;
use App\Models\LandscapingCondition;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public LandscapingCondition $landscapingCondition;
    #[Validate]
    public $title_ru;
    #[Validate]
    public $title_kk;
    public $title_en;

    public function mount($landscapingCondition)
    {
        $this->landscapingCondition = $landscapingCondition;
        $this->title_ru = $this->landscapingCondition->title_ru;
        $this->title_kk = $this->landscapingCondition->title_kk;
        $this->title_en = $this->landscapingCondition->title_en;
    }

    protected function rules()
    {
        return (new LandscapingConditionUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.landscaping-condition.edit');
    }
}
