<?php

namespace App\Livewire\Street;

use App\Http\Requests\RoadSign\RoadSignCreateRequest;
use App\Http\Requests\Street\StreetCreateRequest;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Validate]
    public $title_ru;
    #[Validate]
    public $title_kk;
    public $title_en;
    public $normative_act;
    public $geo_color;
    public $geo_position;
    public $is_active;

    public function mount(){
        $this->title_ru = old("title_ru");
        $this->title_kk = old("title_kk");
        $this->title_en = old("title_en");
        $this->geo_color = old("geo_color");
        $this->geo_position = old("geo_position");
    }

    protected function rules(){
        return (new StreetCreateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.street.create');
    }
}
