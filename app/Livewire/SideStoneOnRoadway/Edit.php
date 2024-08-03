<?php

namespace App\Livewire\SideStoneOnRoadway;

use App\Http\Requests\SideStoneOnRoadway\SideStoneOnRoadwayUpdateRequest;
use App\Models\Side;
use App\Models\SideStoneOnRoadway;
use App\Models\SideStoneStamp;
use App\Models\SideStoneType;
use App\Models\Street;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public SideStoneOnRoadway $model;
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
    public function mount(SideStoneOnRoadway $model): void
    {
        $this->model = $model;
        $this->streets = Street::all();
        $this->sides = Side::all();
        $this->side_stone_stamps = SideStoneStamp::all();
        $this->side_stone_types = SideStoneType::all();
        $this->order = $model->order;
        $this->start_m = $model->start_m;
        $this->end_m = $model->end_m;
        $this->length_m = $model->length_m;
        $this->street_id = $model->street_id;
        $this->side_id = $model->side_id;
        $this->side_stone_stamp_id = $model->side_stone_stamp_id;
        $this->side_stone_type_id = $model->side_stone_type_id;
    }
    public function rules(): array
    {
        return (new SideStoneOnRoadwayUpdateRequest())->rules();
    }
    public function render()
    {
        return view('livewire.side-stone-on-roadway.edit');
    }
}
