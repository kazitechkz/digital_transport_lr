<?php

namespace App\Livewire\LandingTypeOnRoadway;

use App\Http\Requests\LandingTypeOnRoadway\LandingTypeOnRoadwayCreateRequest;
use App\Http\Requests\LandingTypeOnRoadway\LandingTypeOnRoadwayUpdateRequest;
use App\Models\LandingType;
use App\Models\LandingTypeOnRoadway;
use App\Models\Side;
use App\Models\Street;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public LandingTypeOnRoadway $model;
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
    public function mount(LandingTypeOnRoadway $model): void
    {
        $this->model = $model;
        $this->streets = Street::all();
        $this->sides = Side::all();
        $this->landing_types = LandingType::all();
        $this->order = $model->order;
        $this->start_m = $model->start_m;
        $this->end_m = $model->end_m;
        $this->width_start_m = $model->width_start_m;
        $this->width_end_m = $model->width_end_m;
        $this->square_m = $model->square_m;
        $this->street_id = $model->street_id;
        $this->side_id = $model->side_id;
        $this->landing_type_id = $model->landing_type_id;
    }
    public function rules(): array
    {
        return (new LandingTypeOnRoadwayUpdateRequest())->rules();
    }
    public function render()
    {
        return view('livewire.landing-type-on-roadway.edit');
    }
}
