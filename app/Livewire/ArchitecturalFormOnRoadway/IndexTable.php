<?php

namespace App\Livewire\ArchitecturalFormOnRoadway;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\ArchitecturalFormOnRoadway;

class IndexTable extends DataTableComponent
{
    protected $model = ArchitecturalFormOnRoadway::class;

    public function configure(): void
    {
        $this->setBulkActions([
            'deleteSelected' => 'Удалить'
        ]);
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function ($row) {
                return route('architectural-form-on-roadway.edit', $row);
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
        if (auth()->user()->can('architecturalFormOnRoadway delete')) {
            $model = $this->getSelected();
            foreach ($model as $key => $value) {
                $entity = ArchitecturalFormOnRoadway::findOrFail($value);
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
            Column::make("Номер", "order")
                ->sortable(),
            Column::make("Начало, м", "start_m")
                ->sortable(),
            Column::make("Конец, м", "end_m")
                ->sortable(),
            Column::make("Площадь, м2", "square_m")
                ->sortable(),
            Column::make("Периметр", "perim_m")
                ->sortable(),
            Column::make("Feature", "feature")
                ->sortable(),
            Column::make("Улица", "street.title_ru")
                ->sortable(),
            Column::make("Сторона", "side.title_ru")
                ->sortable(),
            Column::make("Architectural form id", "architectural_form.title_ru")
                ->sortable()
        ];
    }
}
