<?php

namespace App\Livewire\LongitudinalProfileOfTheRoad;

use App\Http\Requests\LongitudinalProfileOfTheRoad\LongitudinalProfileOfTheRoadCreateRequest;
use App\Http\Requests\LongitudinalProfileOfTheRoad\LongitudinalProfileOfTheRoadUpdateRequest;
use App\Models\LongitudinalProfileOfTheRoad;
use App\Models\Street;
use Livewire\Component;

class Edit extends Component
{
    public LongitudinalProfileOfTheRoad $longitudinalProfileOfTheRoad;
    public $order;
    public $start_of_region_km;
    public $start_of_region_m;
    public $end_of_region_km;
    public $end_of_region_m;
    public $length_m;
    public $slope;
    public $street_id;
    public $streets;

    public function mount(LongitudinalProfileOfTheRoad $longitudinalProfileOfTheRoad)
    {
        $this->longitudinalProfileOfTheRoad = $longitudinalProfileOfTheRoad;
        $this->streets = Street::where(["is_active"=>true])->get();
        $this->order = old("order",$longitudinalProfileOfTheRoad->order);
        $this->start_of_region_km = old("start_of_region_km",$longitudinalProfileOfTheRoad->start_of_region_km);
        $this->start_of_region_m = old("start_of_region_m",$longitudinalProfileOfTheRoad->start_of_region_m);
        $this->end_of_region_km = old("end_of_region_km",$longitudinalProfileOfTheRoad->end_of_region_km);
        $this->end_of_region_m = old("end_of_region_m",$longitudinalProfileOfTheRoad->end_of_region_m);
        $this->length_m = old("length_m",$longitudinalProfileOfTheRoad->length_m);
        $this->slope = old("slope",$longitudinalProfileOfTheRoad->slope);
        $this->street_id = old("street_id",$longitudinalProfileOfTheRoad->street_id);
    }

    protected function rules(){
        return (new LongitudinalProfileOfTheRoadUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.longitudinal-profile-of-the-road.edit');
    }
}
