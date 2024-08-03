<?php

namespace App\Livewire\TrafficLightOnRoadway;

use App\Http\Requests\TrafficLightOnRoadway\TrafficLightOnRoadwayCreateRequest;
use App\Http\Requests\TrafficLightOnRoadway\TrafficLightOnRoadwayUpdateRequest;
use App\Models\Side;
use App\Models\Street;
use App\Models\TrafficLightOnRoadway;
use App\Models\TypeTrafficLight;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public TrafficLightOnRoadway $model;
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
    public function mount(TrafficLightOnRoadway $model): void
    {
        $this->model = $model;
        $this->streets = Street::all();
        $this->sides = Side::all();
        $this->traffic_light_types = TypeTrafficLight::all();
        $this->order = $model->order;
        $this->on_axis = $model->on_axis;
        $this->have_column = $model->have_column;
        $this->have_controller = $model->have_controller;
        $this->traffic_light_qty = $model->traffic_light_qty;
        $this->pedestrian_traffic_light_qty = $model->pedestrian_traffic_light_qty;
        $this->rotary_section_qty = $model->rotary_section_qty;
        $this->street_id = $model->street_id;
        $this->side_id = $model->side_id;
        $this->traffic_light_type_id = $model->traffic_light_type_id;
    }
    public function rules(): array
    {
        return (new TrafficLightOnRoadwayUpdateRequest())->rules();
    }
    public function render()
    {
        return view('livewire.traffic-light-on-roadway.edit');
    }
}
