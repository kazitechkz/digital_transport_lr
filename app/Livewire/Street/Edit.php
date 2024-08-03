<?php

namespace App\Livewire\Street;

use App\Http\Requests\Street\StreetCreateRequest;
use App\Http\Requests\Street\StreetUpdateRequest;
use App\Models\Street;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public Street $street;
    #[Validate]
    public $title_ru;
    #[Validate]
    public $title_kk;
    public $title_en;
    public $normative_act;
    public $geo_color;
    public $geo_position;
    public $is_active;

    public function mount($street){
        $this->street = $street;
        $this->title_ru = $this->street->title_ru;
        $this->title_kk = $this->street->title_kk;
        $this->title_en = $this->street->title_en;
        $this->geo_color = $this->street->geo_color;
        $this->geo_position =$this->street->geo_position;
    }

    protected function rules(){
        return (new StreetUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.street.edit');
    }
}
