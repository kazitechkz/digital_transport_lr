<?php

namespace App\Livewire\RailwayTransferOnRoadway;

use App\Http\Requests\RailwayTransferOnRoadway\RailwayTransferOnRoadwayCreateRequest;
use App\Models\BarrierType;
use App\Models\FlooringCondition;
use App\Models\Street;
use Livewire\Component;
use Psy\Util\Str;

class Create extends Component
{
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

    public function mount(){
        $this->streets = Street::where(["is_active" => true])->get();
        $this->barrierTypes = BarrierType::all();
        $this->floorConditions = FlooringCondition::all();

        $this->order = old("order");
        $this->location_m = old("location_m");
        $this->location_km = old("location_km");
        $this->path_qty = old("path_qty");
        $this->has_barrier = old("has_barrier");
        $this->has_road_sign = old("has_road_sign");
        $this->has_alarm_sign = old("has_alarm_sign");
        $this->has_fence = old("has_fence");
        $this->has_traffic_light = old("has_traffic_light");
        $this->has_security = old("has_security");
        $this->visible_distance_length = old("visible_distance_length");

        $this->street_id = old("street_id");
        $this->barrier_type_id = old("barrier_type_id");
        $this->floor_condition_id = old("floor_condition_id");
    }

    public function updatedHasBarrier($value)
    {
        if(!$this->has_barrier){
           $this->barrier_type_id = null;
        }
    }


    protected function rules(){
        return (new RailwayTransferOnRoadwayCreateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.railway-transfer-on-roadway.create');
    }
}
