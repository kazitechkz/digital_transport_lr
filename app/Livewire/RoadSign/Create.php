<?php

namespace App\Livewire\RoadSign;

use App\Http\Requests\RoadSign\RoadSignCreateRequest;
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
    public $normative_act;
    public $sign_number;
    public $is_active;

    public function mount(){
        $this->title_ru = old("title_ru");
        $this->title_kk = old("title_kk");
        $this->title_en = old("title_en");
        $this->normative_act = old("normative_act");
        $this->sign_number = old("sign_number");
    }

    protected function rules(){
        return (new RoadSignCreateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.road-sign.create');
    }
}
