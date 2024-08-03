<?php

namespace App\Livewire\LandscapingOnRoadway;

use App\Http\Requests\LandscapingOnRoadway\LandscapingOnRoadwayCreateRequest;
use App\Models\LandscapingCondition;
use App\Models\LandscapingOnRoadway;
use App\Models\Street;
use Livewire\Component;

class Edit extends Component
{

    public LandscapingOnRoadway $landscapingOnRoadway;
    public $order;
    public $start_location_right_km;
    public $start_location_right_m;
    public $end_location_right_km;
    public $end_location_right_m;
    public $start_location_left_km;
    public $start_location_left_m;
    public $end_location_left_km;
    public $end_location_left_m;
    public $two_row_m;
    public $three_row_m;
    public $four_row_m;
    public $five_row_m;
    public $six_row_m;
    public $eight_row_m;
    public $total_length_m;
    public $decorative_length_km;
    public $length_to_edge_m;
    public $street_id;
    public $streets;
    public $landscaping_condition_id;
    public $landscapingConditions;

    public function mount(LandscapingOnRoadway $landscapingOnRoadway)
    {
        $this->landscapingConditions = $landscapingOnRoadway;
        $this->streets = Street::where(["is_active" => true])->get();
        $this->landscapingConditions = LandscapingCondition::all();
        $this->order = old("order", $landscapingOnRoadway->order);
        $this->start_location_right_km = old("start_location_right_km", $landscapingOnRoadway->start_location_right_km);
        $this->start_location_right_m = old("start_location_right_m", $landscapingOnRoadway->start_location_right_m);
        $this->end_location_right_km = old("end_location_right_km", $landscapingOnRoadway->end_location_right_km);
        $this->end_location_right_m = old("end_location_right_m", $landscapingOnRoadway->end_location_right_m);
        $this->start_location_left_km = old("start_location_left_km", $landscapingOnRoadway->start_location_left_km);
        $this->start_location_left_m = old("start_location_left_m", $landscapingOnRoadway->start_location_left_m);
        $this->end_location_left_km = old("end_location_left_km", $landscapingOnRoadway->end_location_left_km);
        $this->end_location_left_m = old("end_location_left_m", $landscapingOnRoadway->end_location_left_m);
        $this->two_row_m = old("two_row_m", $landscapingOnRoadway->two_row_m);
        $this->three_row_m = old("three_row_m", $landscapingOnRoadway->three_row_m);
        $this->four_row_m = old("four_row_m", $landscapingOnRoadway->four_row_m);
        $this->five_row_m = old("five_row_m", $landscapingOnRoadway->five_row_m);
        $this->six_row_m = old("six_row_m", $landscapingOnRoadway->six_row_m);
        $this->eight_row_m = old("eight_row_m", $landscapingOnRoadway->eight_row_m);
        $this->total_length_m = old("total_length_m", $landscapingOnRoadway->total_length_m);
        $this->decorative_length_km = old("decorative_length_km", $landscapingOnRoadway->decorative_length_km);
        $this->length_to_edge_m = old("length_to_edge_m", $landscapingOnRoadway->length_to_edge_m);
        $this->street_id = old("street_id", $landscapingOnRoadway->street_id);
        $this->landscaping_condition_id = old("landscaping_condition_id", $landscapingOnRoadway->landscaping_condition_id);
    }
    protected function rules(){
        return (new LandscapingOnRoadwayCreateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.landscaping-on-roadway.edit');
    }
}
