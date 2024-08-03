<?php

namespace App\Livewire\TrafficLightOnRoadway;

use App\Http\Requests\TrafficLightOnRoadway\TrafficLightOnRoadwayCreateRequest;
use App\Models\Side;
use App\Models\Street;
use App\Models\TypeTrafficLight;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Validate]
    public $order;
    #[Validate]
    public $on_axis;
    #[Validate]
    public $have_controller;
    #[Validate]
    public $traffic_light_qty;
    #[Validate]
    public $pedestrian_traffic_light_qty;
    #[Validate]
    public $rotary_section_qty;
    #[Validate]
    public $have_column;
    #[Validate]
    public $street_id;
    #[Validate]
    public $side_id;
    #[Validate]
    public $traffic_light_type_id;
    public $streets;
    public $sides;
    public $traffic_light_types;
    public function mount(): void
    {
        $this->streets = Street::all();
        $this->sides = Side::all();
        $this->traffic_light_types = TypeTrafficLight::all();
    }
    public function rules(): array
    {
        return (new TrafficLightOnRoadwayCreateRequest())->rules();
    }
    public function render()
    {
        return view('livewire.traffic-light-on-roadway.create');
    }
}
