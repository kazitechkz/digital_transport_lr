<?php

namespace App\Livewire\InformationOfRoadMarking;

use App\Http\Requests\InformationOfRoadMarking\InformationOfRoadMarkingCreateRequest;
use App\Models\RoadMarking;
use App\Models\RoadMarkingMaterial;
use App\Models\Street;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
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
    public function mount(): void
    {
        $this->streets = Street::all();
        $this->road_markings = RoadMarking::all();
        $this->road_marking_materials = RoadMarkingMaterial::all();
    }
    public function rules(): array
    {
        return (new InformationOfRoadMarkingCreateRequest())->rules();
    }
    public function render()
    {
        return view('livewire.information-of-road-marking.create');
    }
}
