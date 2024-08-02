<?php

namespace App\Livewire\SpillwayInfrastructure;

use App\Http\Requests\Roadway\RoadwayCreateRequest;
use App\Http\Requests\SpillwayInfrastructure\SpillwayInfrastructureCreateRequest;
use App\Models\CategoryOfHighway;
use App\Models\CoverageType;
use App\Models\Side;
use App\Models\Street;
use App\Models\WellsType;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Validate]
    public $order;
    #[Validate]
    public $on_axis_m;
    #[Validate]
    public $from_axis_m;
    public $is_on_the_roadway;
    public $is_on_the_sidewalk;
    public $is_on_the_lawn;
    public $streets;
    #[Validate]
    public $street_id;
    public $sides;
    #[Validate]
    public $side_id;
    public $well_types;
    #[Validate]
    public $well_type_id;
    public $note;
    public function mount(): void
    {
        $this->streets = Street::all();
        $this->sides = Side::all();
        $this->well_types = WellsType::all();
        $this->order = old('order');
        $this->on_axis_m = old('on_axis_m');
        $this->from_axis_m = old('from_axis_m');
    }
    public function rules(): array
    {
        return (new SpillwayInfrastructureCreateRequest())->rules();
    }
    public function updated($propertyName): void
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.spillway-infrastructure.create');
    }
}
