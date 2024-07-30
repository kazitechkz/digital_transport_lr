<?php

namespace App\Livewire\ArchitecturalForm;

use App\Http\Requests\ArchitecturalForm\ArchitecturalFormUpdateRequest;
use App\Models\ArchitecturalForm;
use Livewire\Component;

class Edit extends Component
{
    public ArchitecturalForm $architecturalForm;
    #[Validate]
    public $title_ru;
    #[Validate]
    public $title_kk;
    public $title_en;

    public function mount($architecturalForm)
    {
        $this->architecturalForm = $architecturalForm;
        $this->title_ru = $this->architecturalForm->title_ru;
        $this->title_kk = $this->architecturalForm->title_kk;
        $this->title_en = $this->architecturalForm->title_en;
    }

    protected function rules()
    {
        return (new ArchitecturalFormUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.architectural-form.edit');
    }
}
