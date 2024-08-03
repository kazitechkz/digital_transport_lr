<?php

namespace App\Livewire\RoadSignOnRoadway;

use App\Http\Requests\RoadSignOnRoadway\RoadSignOnRoadwayCreateRequest;
use App\Models\RoadSign;
use App\Models\RoadSignCondition;
use App\Models\Street;
use Livewire\Component;

class Create extends Component
{
    public $order;
    public $location_km;
    public $location_m;
    public $has_left_adjunctions_location;
    public $has_left_direct_location;
    public $has_left_reverse_location;
    public $has_right_adjunctions_location;
    public $has_right_direct_location;
    public $has_right_reverse_location;
    public $has_berm;
    public $street_id;
    public $road_sign_id;
    public $road_sign_condition_id;

    public $streets;
    public $road_signs;
    public $road_sign_conditions;

    public function mount()
    {
        $this->streets = Street::where('is_active', true)->get();
        $this->road_signs = RoadSign::all();
        $this->road_sign_conditions = RoadSignCondition::all();

        $this->order = old('order');
        $this->location_km = old('location_km');
        $this->location_m = old('location_m');
        $this->has_left_adjunctions_location = old('has_left_adjunctions_location');
        $this->has_left_direct_location = old('has_left_direct_location');
        $this->has_left_reverse_location = old('has_left_reverse_location');
        $this->has_right_adjunctions_location = old('has_right_adjunctions_location');
        $this->has_right_direct_location = old('has_right_direct_location');
        $this->has_right_reverse_location = old('has_right_reverse_location');
        $this->has_berm = old('has_berm');
        $this->street_id = old('street_id');
        $this->road_sign_id = old('road_sign_id');
        $this->road_sign_condition_id = old('road_sign_condition_id');
    }

    public function rules(): array
    {
        return (new RoadSignOnRoadwayCreateRequest())->rules();
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.road-sign-on-roadway.create');
    }
}
