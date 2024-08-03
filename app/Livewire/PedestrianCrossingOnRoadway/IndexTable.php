<?php

namespace App\Livewire\PedestrianCrossingOnRoadway;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\PedestrianCrossingOnRoadway;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

class IndexTable extends DataTableComponent
{
    protected $model = PedestrianCrossingOnRoadway::class;

    public function configure(): void
    {
        $this->setBulkActions([
            'deleteSelected' => 'Удалить'
        ]);
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function ($row) {
                return route('pedestrian-crossing-on-roadway.edit', $row);
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
            $entity = PedestrianCrossingOnRoadway::findOrFail($value);
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
            Column::make("Адрес", "address_length_m")
                ->searchable()
                ->sortable(),
            BooleanColumn::make("Наличие пешеходных дорожек", "bus_stop_has_pedestrian")
                ->sortable(),
            Column::make("Улица", "street.title_ru")
                ->searchable()
                ->sortable(),
            Column::make("Вид перехода", "pedestrian_crossing_type.title_ru")
                ->searchable()
                ->sortable(),
            Column::make("Расположение перехода", "pedestrian_crossing_position.title_ru")
                ->searchable()
                ->sortable()
        ];
    }
}
