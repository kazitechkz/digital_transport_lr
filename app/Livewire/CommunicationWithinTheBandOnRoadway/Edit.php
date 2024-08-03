<?php

namespace App\Livewire\CommunicationWithinTheBandOnRoadway;

use App\Http\Requests\CommunicationWithinTheBandOnRoadway\CommunicationWithinTheBandOnRoadwayUpdateRequest;
use App\Models\CommunicationType;
use App\Models\CommunicationWithinTheBandOnRoadway;
use App\Models\Street;
use Livewire\Component;

class Edit extends Component
{
    public CommunicationWithinTheBandOnRoadway $communicationWithinTheBandOnRoadway;
    public $order;
    public $location_start_km;
    public $location_start_m;
    public $location_end_km;
    public $location_end_m;
    public $distance_edge_left_m;
    public $distance_edge_right_m;
    public $place_of_intersection_km;
    public $place_of_intersection_m;
    public $street_id;
    public $streets;
    public $ctype_id;
    public $communication_types;

    public function mount($communicationWithinTheBandOnRoadway)
    {
        $this->streets = Street::where(["is_active" => true])->get();
        $this->communication_types = CommunicationType::all();
        $this->order = old('order', $communicationWithinTheBandOnRoadway->order);
        $this->location_start_km = old('location_start_km', $communicationWithinTheBandOnRoadway->location_start_km);
        $this->location_start_m = old('location_start_m', $communicationWithinTheBandOnRoadway->location_start_m);
        $this->location_end_km = old('location_end_km', $communicationWithinTheBandOnRoadway->location_end_km);
        $this->location_end_m = old('location_end_m', $communicationWithinTheBandOnRoadway->location_end_m);
        $this->distance_edge_left_m = old('distance_edge_left_m', $communicationWithinTheBandOnRoadway->distance_edge_left_m);
        $this->distance_edge_right_m = old('distance_edge_right_m', $communicationWithinTheBandOnRoadway->distance_edge_right_m);
        $this->place_of_intersection_km = old('place_of_intersection_km', $communicationWithinTheBandOnRoadway->place_of_intersection_km);
        $this->place_of_intersection_m = old('place_of_intersection_m', $communicationWithinTheBandOnRoadway->place_of_intersection_m);
        $this->street_id = old('street_id', $communicationWithinTheBandOnRoadway->street_id);
        $this->ctype_id = old('ctype_id', $communicationWithinTheBandOnRoadway->ctype_id);
    }
    protected function rules(){
        return (new CommunicationWithinTheBandOnRoadwayUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.communication-within-the-band-on-roadway.edit');
    }
}
