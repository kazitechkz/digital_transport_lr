<?php

namespace App\Livewire\ArchitecturalForm;

use App\Http\Requests\ArchitecturalForm\ArchitecturalFormCreateRequest;
use Livewire\Component;

class Create extends Component
{
    #[Validate]
    public $title_ru;
    #[Validate]
    public $title_kk;
    public $title_en;

    public function mount(){
        $this->title_ru = old("title_ru");
        $this->title_kk = old("title_kk");
        $this->title_en = old("title_en");
    }

    protected function rules(){
        return (new ArchitecturalFormCreateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.architectural-form.create');
    }
}
