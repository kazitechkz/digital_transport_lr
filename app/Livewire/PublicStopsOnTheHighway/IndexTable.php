<?php

namespace App\Livewire\PublicStopsOnTheHighway;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\PublicStopsOnTheHighway;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

class IndexTable extends DataTableComponent
{
    protected $model = PublicStopsOnTheHighway::class;

    public function configure(): void
    {
        $this->setBulkActions([
            'deleteSelected' => 'Удалить'
        ]);
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function ($row) {
                return route('public-stops-on-the-highway.edit', $row);
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
            $entity = PublicStopsOnTheHighway::findOrFail($value);
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
                ->sortable(),
            Column::make("Начало, м", "start_m")
                ->sortable(),
            Column::make("Конец, м", "end_m")
                ->sortable(),
            Column::make("Название остановки", "bus_stop")
                ->sortable(),
            Column::make("Кол-во повильонов", "pavilion_qty")
                ->sortable(),
            Column::make("Расстояние", "distance_to_the_roadway_m")
                ->sortable(),
            BooleanColumn::make("Наличие маршрутов", "have_route")
                ->sortable(),
            Column::make("Посадочная площадка", "boarding_square_m")
                ->sortable(),
            Column::make("Площадь уширения", "extension_square_m")
                ->sortable(),
            Column::make("Улица", "street.title_ru")
                ->sortable(),
            Column::make("Сторона", "side.title_ru")
                ->sortable()
        ];
    }
}
