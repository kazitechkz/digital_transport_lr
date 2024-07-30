<?php

namespace App\Livewire\RoadMarking;

use App\Http\Requests\RoadMarking\RoadMarkingUpdateRequest;
use App\Http\Requests\Side\SideUpdateRequest;
use App\Models\RoadMarking;
use App\Models\Side;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public RoadMarking $roadMarking;
    #[Validate]
    public $title_ru;
    #[Validate]
    public $title_kk;
    public $title_en;
    public $line_of_number;
    public $normative_document;

    public function mount($roadMarking)
    {
        $this->roadMarking = $roadMarking;
        $this->title_ru = $this->roadMarking->title_ru;
        $this->title_kk = $this->roadMarking->title_kk;
        $this->title_en = $this->roadMarking->title_en;
        $this->line_of_number = $this->roadMarking->line_of_number;
        $this->normative_document = $this->roadMarking->normative_document;
    }

    protected function rules()
    {
        return (new RoadMarkingUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.road-marking.edit');
    }
}
