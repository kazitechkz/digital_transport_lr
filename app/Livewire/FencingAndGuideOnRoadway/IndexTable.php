<?php

namespace App\Livewire\FencingAndGuideOnRoadway;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\FencingAndGuideOnRoadway;

class IndexTable extends DataTableComponent
{
    protected $model = FencingAndGuideOnRoadway::class;

    public function configure(): void
    {
        $this->setBulkActions([
            'deleteSelected' => 'Удалить'
        ]);
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function ($row) {
                return route('fencing-and-guide-on-roadway.edit', $row);
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
        $model = $this->getSelected();
        foreach ($model as $key => $value) {
            $entity = FencingAndGuideOnRoadway::findOrFail($value);
            $entity?->delete();
        }
        $this->clearSelected();
    }

    public function columns(): array
    {
        return [
            Column::make("ID", "id")
                ->sortable(),
            Column::make("Номер", "order")
                ->searchable()
                ->sortable(),
            Column::make("Начало, м", "start_m")
                ->sortable(),
            Column::make("Конец, м", "end_m")
                ->sortable(),
            Column::make("Кол-во", "qty")
                ->sortable(),
            Column::make("Улица", "street.title_ru")
                ->searchable()
                ->sortable(),
            Column::make("Сторона", "side.title_ru")
                ->searchable()
                ->sortable(),
            Column::make("Тип устройства", "fencing_and_guide_type.title_ru")
                ->searchable()
                ->sortable(),
            Column::make("Ед.изм", "unit.name")
                ->sortable()
        ];
    }
}
