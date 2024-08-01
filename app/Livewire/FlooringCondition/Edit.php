<?php

namespace App\Livewire\FlooringCondition;

use App\Http\Requests\FlooringCondition\FlooringConditionUpdateRequest;
use App\Models\FlooringCondition;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public FlooringCondition $flooringCondition;
    #[Validate]
    public $title_ru;
    #[Validate]
    public $title_kk;
    public $title_en;

    public function mount($flooringCondition)
    {
        $this->flooringCondition = $flooringCondition;
        $this->title_ru = $this->flooringCondition->title_ru;
        $this->title_kk = $this->flooringCondition->title_kk;
        $this->title_en = $this->flooringCondition->title_en;
    }

    protected function rules()
    {
        return (new FlooringConditionUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.flooring-condition.edit');
    }
}
