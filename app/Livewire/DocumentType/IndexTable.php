<?php

namespace App\Livewire\DocumentType;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\DocumentType;

class IndexTable extends DataTableComponent
{
    protected $model = DocumentType::class;

    public function configure(): void
    {
        $this->setBulkActions([
            'deleteSelected' => 'Удалить'
        ]);
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function ($row) {
                return route('document-type.edit', $row);
            });
    }
    public function bulkActions(): array
    {
        return [
            'deleteSelected' => 'Удалить'
        ];
    }
    public function deleteSelected(): void
    {
        if (auth()->user()->can('DocumentType delete')) {
            $model = $this->getSelected();
            foreach ($model as $key => $value) {
                $entity = DocumentType::findOrFail($value);
                $entity?->delete();
            }
            $this->clearSelected();
        } else {
            $this->redirect(route('bad-request'));
        }
    }

    public function columns(): array
    {
        return [
            Column::make("ID", "id")
                ->sortable(),
            Column::make("Наименование", "title")
                ->sortable(),
            Column::make("Расширение файла", "extension")
                ->sortable(),
            Column::make("Дата создания", "created_at")
                ->sortable()
        ];
    }
}
