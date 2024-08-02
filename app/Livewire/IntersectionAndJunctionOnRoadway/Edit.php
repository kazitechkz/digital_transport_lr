<?php

namespace App\Livewire\IntersectionAndJunctionOnRoadway;

use App\Http\Requests\IntersectionAndJunctionOnRoadway\IntersectionAndJunctionOnRoadwayCreateRequest;
use App\Http\Requests\IntersectionAndJunctionOnRoadway\IntersectionAndJunctionOnRoadwayUpdateRequest;
use App\Models\CoverageType;
use App\Models\IntersectionAndJunctionOnRoadway;
use App\Models\Street;
use Livewire\Component;

class Edit extends Component
{
    public IntersectionAndJunctionOnRoadway $intersectionAndJunctionOnRoadway;
    public $order;
    public $location_right_km;
    public $location_right_m;
    public $location_left_km;
    public $location_left_m;
    public $has_transiotional_high_speed_lanes;
    public $has_road_sign;
    public $has_tube;
    public $has_signal_pole;
    public $has_safety_island;
    public $street_id;
    public $streets;
    public $coverage_type_id;
    public $coverageTypes;



    public function mount($intersectionAndJunctionOnRoadway)
    {
        $this->intersectionAndJunctionOnRoadway = $intersectionAndJunctionOnRoadway;
        $this->streets = Street::where(["is_active" => true])->get();
        $this->coverageTypes = CoverageType::all();
        $this->order = old("order", $intersectionAndJunctionOnRoadway->order);
        $this->location_right_km = old("location_right_km", $intersectionAndJunctionOnRoadway->location_right_km);
        $this->location_right_m = old("location_right_m", $intersectionAndJunctionOnRoadway->location_right_m);
        $this->location_left_km = old("location_left_km", $intersectionAndJunctionOnRoadway->location_left_km);
        $this->location_left_m = old("location_left_m", $intersectionAndJunctionOnRoadway->location_left_m);
        $this->has_transiotional_high_speed_lanes = old("has_transiotional_high_speed_lanes", $intersectionAndJunctionOnRoadway->has_transiotional_high_speed_lanes);
        $this->has_road_sign = old("has_road_sign", $intersectionAndJunctionOnRoadway->has_road_sign);
        $this->has_tube = old("has_tube", $intersectionAndJunctionOnRoadway->has_tube);
        $this->has_signal_pole = old("has_signal_pole", $intersectionAndJunctionOnRoadway->has_signal_pole);
        $this->has_safety_island = old("has_safety_island", $intersectionAndJunctionOnRoadway->has_safety_island);
        $this->street_id = old("street_id", $intersectionAndJunctionOnRoadway->street_id);
        $this->coverage_type_id = old("coverage_type_id", $intersectionAndJunctionOnRoadway->coverage_type_id);
    }
    protected function rules(){
        return (new IntersectionAndJunctionOnRoadwayUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.intersection-and-junction-on-roadway.edit');
    }
}
