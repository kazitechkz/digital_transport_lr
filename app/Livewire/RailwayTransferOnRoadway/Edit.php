<?php

namespace App\Livewire\RailwayTransferOnRoadway;

use App\Http\Requests\RailwayTransferOnRoadway\RailwayTransferOnRoadwayCreateRequest;
use App\Http\Requests\RailwayTransferOnRoadway\RailwayTransferOnRoadwayUpdateRequest;
use App\Models\BarrierType;
use App\Models\FlooringCondition;
use App\Models\RailwayTransferOnRoadway;
use App\Models\Street;
use Livewire\Component;

class Edit extends Component
{
    public RailwayTransferOnRoadway $railwayTransferOnRoadway;
    public $order;
    public $location_m;
    public $location_km;
    public $path_qty;
    public $has_barrier;
    public $has_road_sign;
    public $has_alarm_sign;
    public $has_fence;
    public $has_traffic_light;
    public $has_security;
    public $visible_distance_length;
    public $street_id;
    public $barrier_type_id;
    public $floor_condition_id;

    public $floorConditions;
    public $streets;
    public $barrierTypes;

    public function mount($railwayTransferOnRoadway){
        $this->railwayTransferOnRoadway = $railwayTransferOnRoadway;
        $this->streets = Street::where(["is_active" => true])->get();
        $this->barrierTypes = BarrierType::all();
        $this->floorConditions = FlooringCondition::all();

        $this->order = $railwayTransferOnRoadway->order;
        $this->location_m = $railwayTransferOnRoadway->location_m;
        $this->location_km = $railwayTransferOnRoadway->location_km;
        $this->path_qty = $railwayTransferOnRoadway->path_qty;
        $this->has_barrier = $railwayTransferOnRoadway->has_barrier;
        $this->has_road_sign = $railwayTransferOnRoadway->has_road_sign;
        $this->has_alarm_sign = $railwayTransferOnRoadway->has_alarm_sign;
        $this->has_fence = $railwayTransferOnRoadway->has_fence;
        $this->has_traffic_light = $railwayTransferOnRoadway->has_traffic_light;
        $this->has_security = $railwayTransferOnRoadway->has_security;
        $this->visible_distance_length = $railwayTransferOnRoadway->visible_distance_length;

        $this->street_id = $railwayTransferOnRoadway->street_id;
        $this->barrier_type_id = $railwayTransferOnRoadway->barrier_type_id;
        $this->floor_condition_id = $railwayTransferOnRoadway->floor_condition_id;
    }

    public function updatedHasBarrier($value)
    {
        if(!$this->has_barrier){
            $this->barrier_type_id = null;
        }
    }


    protected function rules(){
        return (new RailwayTransferOnRoadwayUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.railway-transfer-on-roadway.edit');
    }
}
