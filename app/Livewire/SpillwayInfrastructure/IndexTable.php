<?php

namespace App\Livewire\SpillwayInfrastructure;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\SpillwayInfrastructure;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

class IndexTable extends DataTableComponent
{
    protected $model = SpillwayInfrastructure::class;

    public function configure(): void
    {
        $this->setBulkActions([
            'deleteSelected' => 'Удалить'
        ]);
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function ($row) {
                return route('spillway-infrastructure.edit', $row);
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
            $entity = SpillwayInfrastructure::findOrFail($value);
            $entity?->delete();
        }
        $this->clearSelected();
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Номер", "order")
                ->searchable()
                ->sortable(),
            Column::make("По оси, м", "on_axis_m")
                ->sortable(),
            Column::make("От оси", "from_axis_m")
                ->sortable(),
            BooleanColumn::make("На проезжей части", "is_on_the_roadway")
                ->sortable(),
            BooleanColumn::make("на тротуаре", "is_on_the_sidewalk")
                ->sortable(),
            BooleanColumn::make("на газоне", "is_on_the_lawn")
                ->sortable(),
            Column::make("Примечание", "note")
                ->sortable(),
            Column::make("Улица", "street.title_ru")
                ->searchable()
                ->sortable(),
            Column::make("Сторона", "side.title_ru")
                ->searchable()
                ->sortable(),
            Column::make("Тип колодца", "wells_type.title_ru")
                ->searchable()
                ->sortable()
        ];
    }
}
