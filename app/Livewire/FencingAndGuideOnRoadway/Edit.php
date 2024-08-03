<?php

namespace App\Livewire\FencingAndGuideOnRoadway;

use App\Http\Requests\FencingAndGuideOnRoadway\FencingAndGuideOnRoadwayUpdateRequest;
use App\Models\FencingAndGuideOnRoadway;
use App\Models\FencingAndGuideType;
use App\Models\Side;
use App\Models\Street;
use App\Models\Unit;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public FencingAndGuideOnRoadway $model;
    #[Validate]
    public $order;
    #[Validate]
    public $start_m;
    #[Validate]
    public $end_m;
    #[Validate]
    public $qty;
    #[Validate]
    public $street_id;
    #[Validate]
    public $side_id;
    #[Validate]
    public $fencing_guide_type_id;
    #[Validate]
    public $unit_id;
    public $streets;
    public $sides;
    public $fencing_guide_types;
    public $units;
    public function mount(FencingAndGuideOnRoadway $model): void
    {
        $this->model = $model;
        $this->streets = Street::all();
        $this->sides = Side::all();
        $this->fencing_guide_types = FencingAndGuideType::all();
        $this->units = Unit::all();
        $this->order = $model->order;
        $this->start_m = $model->start_m;
        $this->end_m = $model->end_m;
        $this->qty = $model->qty;
        $this->street_id = $model->street_id;
        $this->side_id = $model->side_id;
        $this->fencing_guide_type_id = $model->fencing_guide_type_id;
        $this->unit_id = $model->unit_id;
    }
    public function rules(): array
    {
        return (new FencingAndGuideOnRoadwayUpdateRequest())->rules();
    }
    public function render()
    {
        return view('livewire.fencing-and-guide-on-roadway.edit');
    }
}
