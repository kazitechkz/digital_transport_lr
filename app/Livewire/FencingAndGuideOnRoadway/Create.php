<?php

namespace App\Livewire\FencingAndGuideOnRoadway;

use App\Http\Requests\FencingAndGuideOnRoadway\FencingAndGuideOnRoadwayCreateRequest;
use App\Models\FencingAndGuideType;
use App\Models\Side;
use App\Models\Street;
use App\Models\Unit;
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
    public function mount(): void
    {
        $this->streets = Street::all();
        $this->sides = Side::all();
        $this->fencing_guide_types = FencingAndGuideType::all();
        $this->units = Unit::all();
    }
    public function rules(): array
    {
        return (new FencingAndGuideOnRoadwayCreateRequest())->rules();
    }
    public function render()
    {
        return view('livewire.fencing-and-guide-on-roadway.create');
    }
}
