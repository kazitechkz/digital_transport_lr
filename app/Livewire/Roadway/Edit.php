<?php

namespace App\Livewire\Roadway;

use App\Http\Requests\Roadway\RoadwayCreateRequest;
use App\Http\Requests\Roadway\RoadwayUpdateRequest;
use App\Models\CategoryOfHighway;
use App\Models\CoverageType;
use App\Models\Roadway;
use App\Models\Side;
use App\Models\Street;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public Roadway $model;
    #[Validate]
    public $order;
    #[Validate]
    public $start_m;
    #[Validate]
    public $end_m;
    #[Validate]
    public $square_m;
    public $streets;
    #[Validate]
    public $street_id;
    public $coverage_types;
    #[Validate]
    public $coverage_type_id;
    public $sides;
    #[Validate]
    public $side_id;
    public $category_of_highways;
    #[Validate]
    public $category_of_highway_id;
    public function mount(Roadway $model)
    {
        $this->model = $model;
        $this->streets = Street::all();
        $this->coverage_types = CoverageType::all();
        $this->sides = Side::all();
        $this->category_of_highways = CategoryOfHighway::all();
        $this->order = $model->order;
        $this->start_m = $model->start_m;
        $this->end_m = $model->end_m;
        $this->square_m = $model->square_m;
        $this->side_id = $model->side_id;
        $this->category_of_highway_id = $model->category_of_highway_id;
        $this->street_id = $model->street_id;
        $this->coverage_type_id = $model->coverage_type_id;
    }

    public function rules(): array
    {
        return (new RoadwayUpdateRequest())->rules();
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.roadway.edit');
    }
}
