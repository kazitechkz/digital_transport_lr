<?php

namespace App\Livewire\SidewalkOnRoadway;

use App\Http\Requests\SidewalkOnRoadway\SidewalkOnRoadwayUpdateRequest;
use App\Models\CoverageType;
use App\Models\Position;
use App\Models\Side;
use App\Models\SidewalkOnRoadway;
use App\Models\Street;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public SidewalkOnRoadway $model;
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
    public function mount(SidewalkOnRoadway $model): void
    {
        $this->model = $model;
        $this->streets = Street::all();
        $this->sides = Side::all();
        $this->coverage_types = CoverageType::all();
        $this->positions = Position::all();
        $this->order = $model->order;
        $this->start_m = $model->start_m;
        $this->end_m = $model->end_m;
        $this->length_m = $model->length_m;
        $this->width_start_m = $model->width_start_m;
        $this->width_end_m = $model->width_end_m;
        $this->square_m = $model->square_m;
        $this->street_id = $model->street_id;
        $this->side_id = $model->side_id;
        $this->coverage_type_id = $model->coverage_type_id;
        $this->position_id = $model->position_id;
    }
    public function rules(): array
    {
        return (new SidewalkOnRoadwayUpdateRequest())->rules();
    }
    public function render()
    {
        return view('livewire.sidewalk-on-roadway.edit');
    }
}
