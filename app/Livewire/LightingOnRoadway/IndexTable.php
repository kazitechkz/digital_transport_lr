<?php

namespace App\Livewire\LightingOnRoadway;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\LightingOnRoadway;

class IndexTable extends DataTableComponent
{
    protected $model = LightingOnRoadway::class;

    public function configure(): void
    {
        $this->setBulkActions([
            'deleteSelected' => 'Удалить'
        ]);
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function ($row) {
                return route('lighting-on-roadway.edit', $row);
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
            $entity = LightingOnRoadway::findOrFail($value);
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
            Column::make("По оси, м", "on_axis_m")
                ->sortable(),
            Column::make("Назначение опоры", "lighting_target")
                ->searchable()
                ->sortable(),
            Column::make("Улица", "street.title_ru")
                ->searchable()
                ->sortable(),
            Column::make("Сторона", "side.title_ru")
                ->searchable()
                ->sortable(),
            Column::make("Тип опоры", "lighting_type.title_ru")
                ->searchable()
                ->sortable()
        ];
    }
}
