<?php

namespace App\Livewire\WidthRoadwayOnHighway;
use App\Http\Requests\WidthRoadwayOnHighway\WidthRoadwayOnHighwayCreateRequest;
use App\Http\Requests\WidthRoadwayOnHighway\WidthRoadwayOnHighwayUpdateRequest;
use App\Models\Street;
use App\Models\WidthRoadwayOnHighway;
use Livewire\Component;

class Edit extends Component
{
    public $streets;
    public WidthRoadwayOnHighway $widthRoadwayOnHighway;
    public $order;
    public $start_of_region_km;
    public $start_of_region_m;
    public $end_of_region_km;
    public $end_of_region_m;
    public $reverse_width_m;
    public $both_width_m;
    public $straight_width_m;
    public $street_id;

    public function mount(WidthRoadwayOnHighway $widthRoadwayOnHighway)
    {
        $this->streets = Street::where(["is_active" => true])->get();
        $this->widthRoadwayOnHighway = $widthRoadwayOnHighway;
        $this->order = $widthRoadwayOnHighway->order;
        $this->start_of_region_km = $widthRoadwayOnHighway->start_of_region_km;
        $this->start_of_region_m = $widthRoadwayOnHighway->start_of_region_m;
        $this->end_of_region_km = $widthRoadwayOnHighway->end_of_region_km;
        $this->end_of_region_m = $widthRoadwayOnHighway->end_of_region_m;
        $this->reverse_width_m = $widthRoadwayOnHighway->reverse_width_m;
        $this->both_width_m = $widthRoadwayOnHighway->both_width_m;
        $this->straight_width_m = $widthRoadwayOnHighway->straight_width_m;
        $this->street_id = $widthRoadwayOnHighway->street_id;
    }


    protected function rules(){
        return (new WidthRoadwayOnHighwayUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.width-roadway-on-highway.edit');
    }
}
