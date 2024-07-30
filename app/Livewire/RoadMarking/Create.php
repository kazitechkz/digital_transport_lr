<?php

namespace App\Livewire\RoadMarking;

use App\Http\Requests\RoadMarking\RoadMarkingCreateRequest;
use App\Http\Requests\Side\SideCreateRequest;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Validate]
    public $title_ru;
    #[Validate]
    public $title_kk;
    public $title_en;
    public $line_of_number;
    public $normative_document;

    public function mount(){
        $this->title_ru = old("title_ru");
        $this->title_kk = old("title_kk");
        $this->title_en = old("title_en");
        $this->line_of_number = old("line_of_number");
        $this->normative_document = old("normative_document");
    }

    protected function rules(){
        return (new RoadMarkingCreateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.road-marking.create');
    }
}
