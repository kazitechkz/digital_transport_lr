<?php

namespace App\Livewire\SpillwayInfrastructure;

use App\Http\Requests\SpillwayInfrastructure\SpillwayInfrastructureCreateRequest;
use App\Http\Requests\SpillwayInfrastructure\SpillwayInfrastructureUpdateRequest;
use App\Models\Side;
use App\Models\SpillwayInfrastructure;
use App\Models\Street;
use App\Models\WellsType;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public SpillwayInfrastructure $model;
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
    public function mount(SpillwayInfrastructure $model): void
    {
        $this->model = $model;
        $this->streets = Street::all();
        $this->sides = Side::all();
        $this->well_types = WellsType::all();
        $this->order = $model->order;
        $this->on_axis_m = $model->on_axis_m;
        $this->from_axis_m = $model->from_axis_m;
        $this->well_type_id = $model->well_type_id;
        $this->street_id = $model->street_id;
        $this->side_id = $model->side_id;
        $this->is_on_the_sidewalk = $model->is_on_the_sidewalk;
        $this->is_on_the_roadway = $model->is_on_the_roadway;
        $this->is_on_the_lawn = $model->is_on_the_lawn;
    }
    public function rules(): array
    {
        return (new SpillwayInfrastructureUpdateRequest())->rules();
    }
    public function updated($propertyName): void
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.spillway-infrastructure.edit');
    }
}
