<?php

namespace App\Livewire\PedestrianCrossingOnRoadway;

use App\Http\Requests\PedestrianCrossingOnRoadway\PedestrianCrossingOnRoadwayUpdateRequest;
use App\Models\PedestrianCrossingOnRoadway;
use App\Models\PedestrianCrossingPosition;
use App\Models\PedestrianCrossingType;
use App\Models\Street;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public PedestrianCrossingOnRoadway $model;
    #[Validate]
    public $order;
    #[Validate]
    public $address_length_m;
    #[Validate]
    public $bus_stop_has_pedestrian;
    #[Validate]
    public $street_id;
    #[Validate]
    public $pc_type_id;
    #[Validate]
    public $pc_position_id;
    public $streets;
    public $types;
    public $positions;
    public function mount(PedestrianCrossingOnRoadway $model): void
    {
        $this->model = $model;
        $this->streets = Street::all();
        $this->positions = PedestrianCrossingPosition::all();
        $this->types = PedestrianCrossingType::all();
        $this->order = $model->order;
        $this->address_length_m = $model->address_length_m;
        $this->bus_stop_has_pedestrian = $model->bus_stop_has_pedestrian;
        $this->street_id = $model->street_id;
        $this->pc_type_id = $model->pc_type_id;
        $this->pc_position_id = $model->pc_position_id;
    }
    public function rules(): array
    {
        return (new PedestrianCrossingOnRoadwayUpdateRequest())->rules();
    }
    public function render()
    {
        return view('livewire.pedestrian-crossing-on-roadway.edit');
    }
}
