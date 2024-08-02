<?php

namespace App\Livewire\Roadway;

use App\Http\Requests\Roadway\RoadwayCreateRequest;
use App\Models\CategoryOfHighway;
use App\Models\CoverageType;
use App\Models\Side;
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
    public function mount()
    {
        $this->streets = Street::all();
        $this->coverage_types = CoverageType::all();
        $this->sides = Side::all();
        $this->category_of_highways = CategoryOfHighway::all();
        $this->order = old('order');
        $this->start_m = old('start_m');
        $this->end_m = old('end_m');
        $this->square_m = old('square_m');
    }

    public function rules(): array
    {
        return (new RoadwayCreateRequest())->rules();
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.roadway.create');
    }
}
