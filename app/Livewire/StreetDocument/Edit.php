<?php

namespace App\Livewire\StreetDocument;

use App\Http\Requests\StreetDocument\StreetDocumentUpdateRequest;
use App\Models\DocumentType;
use App\Models\File;
use App\Models\Street;
use App\Models\StreetDocument;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    public StreetDocument $model;
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
    public function mount(StreetDocument $model): void
    {
        $this->model = $model;
        $this->streets = Street::all();
        $this->document_types = DocumentType::all();
        $this->street_id = $model->street_id;
        $this->document_type_id = $model->document_type_id;
        $this->file_id = $model->file_id;
        $this->description = $model->description;
    }
    public function rules(): array
    {
        return (new StreetDocumentUpdateRequest())->rules();
    }
    public function updatedFile(): void
    {
        $fileModel = File::findOrFail($this->model->file_id);
        $fileModel->uploadFile($this->file, 'url');
        $this->file_id = $fileModel->id;
    }
    public function save()
    {
        $this->validate();

        if (auth()->user()->can('StreetDocument update')) {
            $this->model->edit($this->all());
            $this->redirect(route('street-document.index'));
        } else {
            $this->redirect(route('bad-request'));
        }
    }
    public function render()
    {
        return view('livewire.street-document.edit');
    }
}
