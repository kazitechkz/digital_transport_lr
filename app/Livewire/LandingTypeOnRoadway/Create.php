<?php

namespace App\Livewire\LandingTypeOnRoadway;

use App\Http\Requests\LandingTypeOnRoadway\LandingTypeOnRoadwayCreateRequest;
use App\Models\LandingType;
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
    public $width_start_m;
    #[Validate]
    public $width_end_m;
    #[Validate]
    public $square_m;
    #[Validate]
    public $street_id;
    #[Validate]
    public $side_id;
    #[Validate]
    public $landing_type_id;
    public $streets;
    public $sides;
    public $landing_types;
    public function mount(): void
    {
        $this->streets = Street::all();
        $this->sides = Side::all();
        $this->landing_types = LandingType::all();
    }
    public function rules(): array
    {
        return (new LandingTypeOnRoadwayCreateRequest())->rules();
    }
    public function render()
    {
        return view('livewire.landing-type-on-roadway.create');
    }
}
