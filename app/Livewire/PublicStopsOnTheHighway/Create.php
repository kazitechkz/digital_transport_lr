<?php

namespace App\Livewire\PublicStopsOnTheHighway;

use App\Http\Requests\PublicStopsOnTheHighway\PublicStopsOnTheHighwayCreateRequest;
use App\Models\Side;
use App\Models\Street;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
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
    public function mount(): void
    {
        $this->streets = Street::all();
        $this->sides = Side::all();
    }
    public function rules(): array
    {
        return (new PublicStopsOnTheHighwayCreateRequest())->rules();
    }
    public function render()
    {
        return view('livewire.public-stops-on-the-highway.create');
    }
}
