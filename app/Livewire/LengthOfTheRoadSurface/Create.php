<?php

namespace App\Livewire\LengthOfTheRoadSurface;

use App\Models\CoverageType;
use App\Models\LengthOfTheRoadSurface;
use App\Models\Street;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Validate('required|min:1')]
    public $order;
    #[Validate('required|numeric|min:1')]
    public $start;
    #[Validate('required|numeric|min:1')]
    public $end;
    #[Validate('required|numeric|min:1')]
    public $total_length;
    public $streets;
    #[Validate('required')]
    public $street_id;
    public $coverage_types;
    #[Validate('required')]
    public $coverage_type_id;
    public function mount()
    {
        $this->streets = Street::all();
        $this->coverage_types = CoverageType::all();
    }
    public function render()
    {
        return view('livewire.length-of-the-road-surface.create');
    }
}
