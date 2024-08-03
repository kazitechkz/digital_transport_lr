<?php

namespace App\Livewire\SidewalkOnRoadway;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\SidewalkOnRoadway;

class IndexTable extends DataTableComponent
{
    protected $model = SidewalkOnRoadway::class;

    public function configure(): void
    {
        $this->setBulkActions([
            'deleteSelected' => 'Удалить'
        ]);
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function ($row) {
                return route('sidewalk-on-roadway.edit', $row);
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
            $entity = SidewalkOnRoadway::findOrFail($value);
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
            Column::make("Длина, м", "length_m")
                ->sortable(),
            Column::make("Ширина в начале, м", "width_start_m")
                ->sortable(),
            Column::make("Ширина в конце, м", "width_end_m")
                ->sortable(),
            Column::make("Площадь, м2", "square_m")
                ->sortable(),
            Column::make("Улица", "street.title_ru")
                ->searchable()
                ->sortable(),
            Column::make("Сторона", "side.title_ru")
                ->searchable()
                ->sortable(),
            Column::make("Тип покрытия", "coverage_type.title_ru")
                ->searchable()
                ->sortable(),
            Column::make("Расположение", "position.title_ru")
                ->searchable()
                ->sortable()
        ];
    }
}
