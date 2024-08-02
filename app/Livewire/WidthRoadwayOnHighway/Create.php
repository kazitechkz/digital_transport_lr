<?php

namespace App\Livewire\WidthRoadwayOnHighway;

use App\Http\Requests\WidthRoadwayOnHighway\WidthRoadwayOnHighwayCreateRequest;
use App\Models\Street;
use Livewire\Component;

class Create extends Component
{
    public $streets;
    public $order;
    public $start_of_region_km;
    public $start_of_region_m;
    public $end_of_region_km;
    public $end_of_region_m;
    public $reverse_width_m;
    public $both_width_m;
    public $straight_width_m;
    public $street_id;


    public function mount()
    {
        $this->streets = Street::where(["is_active" => true])->get();
        $this->order = old('order');
        $this->start_of_region_km = old('start_of_region_km');
        $this->start_of_region_m = old('start_of_region_m');
        $this->end_of_region_km = old('end_of_region_km');
        $this->end_of_region_m = old('end_of_region_m');
        $this->reverse_width_m = old('reverse_width_m');
        $this->both_width_m = old('both_width_m');
        $this->straight_width_m = old('straight_width_m');
        $this->street_id = old('street_id');
    }

    protected function rules(){
        return (new WidthRoadwayOnHighwayCreateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function render()
    {
        return view('livewire.width-roadway-on-highway.create');
    }
}
