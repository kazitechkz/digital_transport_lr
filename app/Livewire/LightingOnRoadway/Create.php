<?php

namespace App\Livewire\LightingOnRoadway;

use App\Http\Requests\LightingOnRoadway\LightingOnRoadwayCreateRequest;
use App\Models\LightingSupportType;
use App\Models\Side;
use App\Models\Street;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
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
    public function mount(): void
    {
        $this->streets = Street::all();
        $this->sides = Side::all();
        $this->lighting_types = LightingSupportType::all();
    }
    public function rules(): array
    {
        return (new LightingOnRoadwayCreateRequest())->rules();
    }
    public function render()
    {
        return view('livewire.lighting-on-roadway.create');
    }
}
