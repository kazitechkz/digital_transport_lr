<?php

namespace App\Livewire\LightingOnRoadway;

use App\Http\Requests\LightingOnRoadway\LightingOnRoadwayUpdateRequest;
use App\Models\LightingOnRoadway;
use App\Models\LightingSupportType;
use App\Models\Side;
use App\Models\Street;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public LightingOnRoadway $model;
    #[Validate]
    public $order;
    #[Validate]
    public $on_axis_m;
    #[Validate]
    public $lighting_target;
    #[Validate]
    public $lighting_type_id;
    #[Validate]
    public $street_id;
    #[Validate]
    public $side_id;
    public $streets;
    public $sides;
    public $lighting_types;
    public function mount(LightingOnRoadway $model): void
    {
        $this->model = $model;
        $this->streets = Street::all();
        $this->sides = Side::all();
        $this->lighting_types = LightingSupportType::all();
        $this->order = $model->order;
        $this->on_axis_m = $model->on_axis_m;
        $this->street_id = $model->street_id;
        $this->side_id = $model->side_id;
        $this->lighting_target = $model->lighting_target;
        $this->lighting_type_id = $model->lighting_type_id;
    }
    public function rules(): array
    {
        return (new LightingOnRoadwayUpdateRequest())->rules();
    }
    public function render()
    {
        return view('livewire.lighting-on-roadway.edit');
    }
}
