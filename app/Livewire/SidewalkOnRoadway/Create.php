<?php

namespace App\Livewire\SidewalkOnRoadway;

use App\Http\Requests\SidewalkOnRoadway\SidewalkOnRoadwayCreateRequest;
use App\Models\CoverageType;
use App\Models\Position;
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
    public $length_m;
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
    public $coverage_type_id;
    #[Validate]
    public $position_id;
    public $streets;
    public $sides;
    public $coverage_types;
    public $positions;
    public function mount(): void
    {
        $this->streets = Street::all();
        $this->sides = Side::all();
        $this->coverage_types = CoverageType::all();
        $this->positions = Position::all();
    }
    public function rules(): array
    {
        return (new SidewalkOnRoadwayCreateRequest())->rules();
    }
    public function render()
    {
        return view('livewire.sidewalk-on-roadway.create');
    }
}
