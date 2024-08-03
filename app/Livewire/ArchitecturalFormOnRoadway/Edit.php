<?php

namespace App\Livewire\ArchitecturalFormOnRoadway;

use App\Http\Requests\ArchitecturalFormOnRoadway\ArchitecturalFormOnRoadwayCreateRequest;
use App\Http\Requests\ArchitecturalFormOnRoadway\ArchitecturalFormOnRoadwayUpdateRequest;
use App\Models\ArchitecturalForm;
use App\Models\ArchitecturalFormOnRoadway;
use App\Models\Side;
use App\Models\Street;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public ArchitecturalFormOnRoadway $model;
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
    public function mount(ArchitecturalFormOnRoadway $model): void
    {
        $this->model = $model;
        $this->streets = Street::all();
        $this->sides = Side::all();
        $this->architectural_forms = ArchitecturalForm::all();
        $this->order = $model->order;
        $this->start_m = $model->start_m;
        $this->end_m = $model->end_m;
        $this->square_m = $model->square_m;
        $this->perim_m = $model->perim_m;
        $this->feature = $model->feature;
        $this->street_id = $model->street_id;
        $this->side_id = $model->side_id;
        $this->architectural_form_id = $model->architectural_form_id;
    }
    public function rules(): array
    {
        return (new ArchitecturalFormOnRoadwayUpdateRequest())->rules();
    }
    public function render()
    {
        return view('livewire.architectural-form-on-roadway.edit');
    }
}
