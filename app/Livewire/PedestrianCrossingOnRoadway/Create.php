<?php

namespace App\Livewire\PedestrianCrossingOnRoadway;

use App\Http\Requests\PedestrianCrossingOnRoadway\PedestrianCrossingOnRoadwayCreateRequest;
use App\Models\PedestrianCrossingPosition;
use App\Models\PedestrianCrossingType;
use App\Models\Street;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
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
    public function mount(): void
    {
        $this->streets = Street::all();
        $this->positions = PedestrianCrossingPosition::all();
        $this->types = PedestrianCrossingType::all();
    }
    public function rules(): array
    {
        return (new PedestrianCrossingOnRoadwayCreateRequest())->rules();
    }
    public function render()
    {
        return view('livewire.pedestrian-crossing-on-roadway.create');
    }
}
