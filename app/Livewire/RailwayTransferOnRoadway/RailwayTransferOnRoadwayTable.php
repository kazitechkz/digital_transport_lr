<?php

namespace App\Livewire\RailwayTransferOnRoadway;

use App\Models\BarrierType;
use App\Models\FlooringCondition;
use App\Models\RoadSign;
use App\Models\Street;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\RailwayTransferOnRoadway;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class RailwayTransferOnRoadwayTable extends DataTableComponent
{
    protected $model = RailwayTransferOnRoadway::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setBulkActions([
            'deleteSelected' => 'Удалить',
        ]);
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function($row) {
                return route('railway-transfer-on-roadway.edit', $row);
            });

    }

    public function filters(): array
    {
        return [
            SelectFilter::make("Улица")
                ->options(Street::pluck("title_ru","id")->toArray())
                ->filter(function($builder, string $value) {
                    return $builder->where(["street_id"=>$value]);
                }),
            SelectFilter::make("Тип Барьера")
                ->options(BarrierType::pluck("title_ru","id")->toArray())
                ->filter(function($builder, string $value) {
                    return $builder->where(["barrier_type_id"=>$value]);
                }),
            SelectFilter::make("Состояние настила")
                ->options(FlooringCondition::pluck("title_ru","id")->toArray())
                ->filter(function($builder, string $value) {
                    return $builder->where(["floor_condition_id"=>$value]);
                }),
        ];
    }

    public function bulkActions(): array
    {
        return [
            'deleteSelected' => 'Удалить',
        ];
    }

    public function deleteSelected(): void
    {
        if (auth()->user()->can('RailwayTransferOnRoadway delete')) {
            $model = $this->getSelected();
            foreach ($model as $key => $value) {
                $model_one = RailwayTransferOnRoadway::find($value);
                $model_one?->delete();
            }
            $this->clearSelected();
        } else {
            $this->redirect(route('bad-request'));
        }
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->searchable(),
            Column::make("Номер", "order")
                ->searchable()->sortable(),
            Column::make("Улица", "street.title_ru")
                ->sortable(),
            Column::make("Тип Барьера", "barrier_type.title_ru")
                ->sortable(),
            Column::make("Состояние настила", "flooring_condition.title_ru")
                ->sortable(),
            Column::make("Местоположение в м", "location_m")
                ->searchable(),
            Column::make("Местоположение в км", "location_km")
                ->searchable(),
            Column::make("Количество путей", "path_qty")
                ->searchable(),
            BooleanColumn::make("Есть ли ограждение", "has_barrier")
                ->sortable(),
            BooleanColumn::make("Есть ли дорожные знаки", "has_road_sign")
                ->sortable(),
            BooleanColumn::make("Есть ли сигнальные столбики", "has_alarm_sign")
                ->sortable(),
            BooleanColumn::make("Наличие перильного ограждения", "has_fence")
                ->sortable(),
            BooleanColumn::make("Наличие транспортных светофоров", "has_traffic_light")
                ->sortable(),
            BooleanColumn::make("Наличие охраны", "has_security")
                ->sortable(),
            Column::make("Расстояние видимости", "visible_distance_length")
                ->sortable(),
            Column::make("Создан", "created_at")
                ->sortable(),
            Column::make("Обновлен", "updated_at")
                ->sortable(),
        ];
    }
}
