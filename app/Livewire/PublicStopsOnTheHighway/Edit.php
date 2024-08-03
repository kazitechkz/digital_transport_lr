<?php

namespace App\Livewire\PublicStopsOnTheHighway;

use App\Http\Requests\PublicStopsOnTheHighway\PublicStopsOnTheHighwayCreateRequest;
use App\Http\Requests\PublicStopsOnTheHighway\PublicStopsOnTheHighwayUpdateRequest;
use App\Models\PublicStopsOnTheHighway;
use App\Models\Side;
use App\Models\Street;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public PublicStopsOnTheHighway $model;
    #[Validate]
    public $order;
    #[Validate]
    public $start_m;
    #[Validate]
    public $end_m;
    #[Validate]
    public $bus_stop;
    #[Validate]
    public $pavilion_qty;
    #[Validate]
    public $have_route;
    #[Validate]
    public $distance_to_the_roadway_m;
    #[Validate]
    public $boarding_square_m;
    #[Validate]
    public $extension_square_m;
    #[Validate]
    public $street_id;
    #[Validate]
    public $side_id;
    public $streets;
    public $sides;
    public function mount(PublicStopsOnTheHighway $model): void
    {
        $this->model = $model;
        $this->streets = Street::all();
        $this->sides = Side::all();
        $this->order = $model->order;
        $this->distance_to_the_roadway_m = $model->distance_to_the_roadway_m;
        $this->start_m = $model->start_m;
        $this->end_m = $model->end_m;
        $this->boarding_square_m = $model->boarding_square_m;
        $this->extension_square_m = $model->extension_square_m;
        $this->pavilion_qty = $model->pavilion_qty;
        $this->have_route = $model->have_route;
        $this->bus_stop = $model->bus_stop;
        $this->street_id = $model->street_id;
        $this->side_id = $model->side_id;
    }
    public function rules(): array
    {
        return (new PublicStopsOnTheHighwayUpdateRequest())->rules();
    }
    public function render()
    {
        return view('livewire.public-stops-on-the-highway.edit');
    }
}
