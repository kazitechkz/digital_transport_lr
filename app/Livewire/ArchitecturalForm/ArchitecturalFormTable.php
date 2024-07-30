<?php

namespace App\Livewire\ArchitecturalForm;

use App\Models\Side;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\ArchitecturalForm;

class ArchitecturalFormTable extends DataTableComponent
{
    protected $model = ArchitecturalForm::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setBulkActions([
            'deleteSelected' => 'Удалить',
        ]);
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function($row) {
                return route('architectural-form.edit', $row);
            });
    }

    public function bulkActions(): array
    {
        return [
            'deleteSelected' => 'Удалить',
        ];
    }

    public function deleteSelected(): void
    {
        $model = $this->getSelected();
        foreach ($model as $key => $value) {
            $model_one = ArchitecturalForm::find($value);
            $model_one?->delete();
        }
        $this->clearSelected();
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->searchable(),
            Column::make("Наименование на русском", "title_ru")
                ->searchable(),
            Column::make("Наименование на казахском", "title_kk")
                ->searchable(),
            Column::make("Наименование на английском", "title_en")
                ->searchable(),
            Column::make("Создан", "created_at")
                ->sortable(),
            Column::make("Обновлен", "updated_at")
                ->sortable(),
        ];
    }
}
