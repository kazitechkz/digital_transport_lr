<?php

namespace App\Livewire\CategoryOfHighway;

use App\Http\Requests\CategoryOfHighway\CategoryOfHighwayUpdateRequest;
use App\Http\Requests\CoverageType\CoverageTypeUpdateRequest;
use App\Models\CategoryOfHighway;
use App\Models\CoverageType;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public CategoryOfHighway $categoryOfHighway;
    #[Validate]
    public $title_ru;
    #[Validate]
    public $title_kk;
    public $title_en;

    public function mount($categoryOfHighway)
    {
        $this->categoryOfHighway = $categoryOfHighway;
        $this->title_ru = $this->categoryOfHighway->title_ru;
        $this->title_kk = $this->categoryOfHighway->title_kk;
        $this->title_en = $this->categoryOfHighway->title_en;
    }

    protected function rules()
    {
        return (new CategoryOfHighwayUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.category-of-highway.edit');
    }
}
