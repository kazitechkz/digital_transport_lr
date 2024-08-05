<?php

namespace App\Livewire\TrafficLightOnRoadway;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\TrafficLightOnRoadway;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

class IndexTable extends DataTableComponent
{
    protected $model = TrafficLightOnRoadway::class;

    public function configure(): void
    {
        $this->setBulkActions([
            'deleteSelected' => 'Удалить'
        ]);
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function ($row) {
                return route('traffic-light-on-roadway.edit', $row);
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
        if (auth()->user()->can('TrafficLightOnRoadway delete')) {
            $model = $this->getSelected();
            foreach ($model as $key => $value) {
                $entity = TrafficLightOnRoadway::findOrFail($value);
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
                ->searchable()
                ->sortable(),
            Column::make("По оси, м", "on_axis")
                ->sortable(),
            BooleanColumn::make("Контроллер", "have_controller")
                ->sortable(),
            BooleanColumn::make("Колонка", "have_column")
                ->sortable(),
            Column::make("Кол-во транспортных светофоров", "traffic_light_qty")
                ->sortable(),
            Column::make("Кол-во пешеходных светофоров", "pedestrian_traffic_light_qty")
                ->sortable(),
            Column::make("Кол-во поворотных секций", "rotary_section_qty")
                ->sortable(),
            Column::make("Улица", "street.title_ru")
                ->searchable()
                ->sortable(),
            Column::make("Сторона", "side.title_ru")
                ->searchable()
                ->sortable(),
            Column::make("Тип установки", "type_traffic_light.title_ru")
                ->searchable()
                ->sortable()
        ];
    }
}
