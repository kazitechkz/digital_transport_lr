<?php

namespace App\Livewire\ArchitecturalFormOnRoadway;

use App\Http\Requests\ArchitecturalFormOnRoadway\ArchitecturalFormOnRoadwayCreateRequest;
use App\Models\ArchitecturalForm;
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
    #[Validate]
    public $perim_m;
    #[Validate]
    public $feature;
    public $streets;
    #[Validate]
    public $street_id;
    public $sides;
    #[Validate]
    public $side_id;
    public $architectural_forms;
    #[Validate]
    public $architectural_form_id;
    public function mount(): void
    {
        $this->streets = Street::all();
        $this->sides = Side::all();
        $this->architectural_forms = ArchitecturalForm::all();
    }
    public function rules(): array
    {
        return (new ArchitecturalFormOnRoadwayCreateRequest())->rules();
    }
    public function render()
    {
        return view('livewire.architectural-form-on-roadway.create');
    }
}
