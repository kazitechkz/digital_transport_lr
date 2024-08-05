<?php

namespace App\Livewire\StreetDocument;

use App\Http\Requests\StreetDocument\StreetDocumentCreateRequest;
use App\Models\DocumentType;
use App\Models\File;
use App\Models\Street;
use App\Models\StreetDocument;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $description;
    #[Validate]
    public $document_type_id;
    #[Validate]
    public $street_id;
    #[Validate]
    public $file_id;
    public $file;
    public $streets;
    public $document_types;
    public function mount(): void
    {
        $this->streets = Street::all();
        $this->document_types = DocumentType::all();
    }
    public function updatedFile(): void
    {
        $fileModel = new File();
        $fileModel->uploadFile($this->file, 'url');
        $this->file_id = $fileModel->id;
    }
    public function rules(): array
    {
        return (new StreetDocumentCreateRequest())->rules();
    }
    public function save(): void
    {
        $this->validate();
        if (auth()->user()->can('StreetDocument create')) {
            StreetDocument::add($this->all());
            $this->redirect(route('street-document.index'));
        } else {
            $this->redirect(route('bad-request'));
        }
    }
    public function render()
    {
        return view('livewire.street-document.create');
    }
}
