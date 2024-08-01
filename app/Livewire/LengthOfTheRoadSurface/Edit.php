<?php

namespace App\Livewire\LengthOfTheRoadSurface;

use App\Models\CoverageType;
use App\Models\LengthOfTheRoadSurface;
use App\Models\Street;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public LengthOfTheRoadSurface $model;
    #[Validate('required|min:1')]
    public $order;
    #[Validate('required|numeric|min:1')]
    public $start;
    #[Validate('required|numeric|min:1')]
    public $end;
    #[Validate('required|numeric|min:1')]
    public $total_length;
    public $streets;
    #[Validate('required|exists:streets,id')]
    public $street_id;
    public $coverage_types;
    #[Validate('required|exists:coverage_types,id')]
    public $coverage_type_id;
    public function mount(LengthOfTheRoadSurface $model)
    {
        $this->model = $model;
        $this->streets = Street::all();
        $this->coverage_types = CoverageType::all();
        $this->order = $model->order;
        $this->start = $model->start;
        $this->end = $model->end;
        $this->total_length = $model->total_length;
        $this->street_id = $model->street_id;
        $this->coverage_type_id = $model->coverage_type_id;
    }
    public function render()
    {
        return view('livewire.length-of-the-road-surface.edit');
    }
}
