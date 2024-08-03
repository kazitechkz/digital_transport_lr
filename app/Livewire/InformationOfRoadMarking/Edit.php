<?php

namespace App\Livewire\InformationOfRoadMarking;

use App\Http\Requests\InformationOfRoadMarking\InformationOfRoadMarkingCreateRequest;
use App\Http\Requests\InformationOfRoadMarking\InformationOfRoadMarkingUpdateRequest;
use App\Models\InformationOfRoadMarking;
use App\Models\RoadMarking;
use App\Models\RoadMarkingMaterial;
use App\Models\Street;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public InformationOfRoadMarking $model;
    #[Validate]
    public $road_width_sm;
    #[Validate]
    public $road_length_m;
    #[Validate]
    public $road_square_m;
    public $streets;
    #[Validate]
    public $street_id;
    public $road_markings;
    #[Validate]
    public $road_marking_id;
    public $road_marking_materials;
    #[Validate]
    public $road_marking_material_id;
    public function mount(InformationOfRoadMarking $model): void
    {
        $this->model = $model;
        $this->streets = Street::all();
        $this->road_markings = RoadMarking::all();
        $this->road_marking_materials = RoadMarkingMaterial::all();
        $this->road_length_m = $model->road_length_m;
        $this->road_width_sm = $model->road_width_sm;
        $this->road_square_m = $model->road_square_m;
        $this->street_id = $model->street_id;
        $this->road_marking_id = $model->road_marking_id;
        $this->road_marking_material_id = $model->road_marking_material_id;
    }
    public function rules(): array
    {
        return (new InformationOfRoadMarkingUpdateRequest())->rules();
    }
    public function render()
    {
        return view('livewire.information-of-road-marking.edit');
    }
}
