<?php

namespace App\Livewire\SideStoneOnRoadway;

use App\Http\Requests\SideStoneOnRoadway\SideStoneOnRoadwayCreateRequest;
use App\Models\Side;
use App\Models\SideStoneStamp;
use App\Models\SideStoneType;
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
    public $street_id;
    #[Validate]
    public $side_id;
    #[Validate]
    public $side_stone_stamp_id;
    #[Validate]
    public $side_stone_type_id;
    public $streets;
    public $sides;
    public $side_stone_stamps;
    public $side_stone_types;
    public function mount(): void
    {
        $this->streets = Street::all();
        $this->sides = Side::all();
        $this->side_stone_stamps = SideStoneStamp::all();
        $this->side_stone_types = SideStoneType::all();
    }
    public function rules(): array
    {
        return (new SideStoneOnRoadwayCreateRequest())->rules();
    }
    public function render()
    {
        return view('livewire.side-stone-on-roadway.create');
    }
}
