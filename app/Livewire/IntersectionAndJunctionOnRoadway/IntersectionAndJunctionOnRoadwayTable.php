<?php

namespace App\Livewire\IntersectionAndJunctionOnRoadway;

use App\Models\CoverageType;
use App\Models\Street;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\IntersectionAndJunctionOnRoadway;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class IntersectionAndJunctionOnRoadwayTable extends DataTableComponent
{
    protected $model = IntersectionAndJunctionOnRoadway::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setBulkActions([
            'deleteSelected' => 'Удалить',
        ]);
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function($row) {
                return route('ij-on-roadway.edit', $row);
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
            SelectFilter::make("Тип покрытия")
                ->options(CoverageType::pluck("title_ru","id")->toArray())
                ->filter(function($builder, string $value) {
                    return $builder->where(["coverage_type_id"=>$value]);
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
        if (auth()->user()->can('IntersectionAndJunctionOnRoadway delete')) {
            $model = $this->getSelected();
            foreach ($model as $key => $value) {
                $model_one = IntersectionAndJunctionOnRoadway::find($value);
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
                ->sortable(),
                Column::make("Улица", "street.title_ru")
                ->sortable(),
            Column::make("Тип покрытия", "coverage_type.title_ru")
                ->sortable(),
            Column::make("Номер", "order")
                ->searchable(),
            Column::make("Местоположение справа в км", "location_right_km")
                ->searchable(),
            Column::make("Местоположение справа в м", "location_right_m")
                ->searchable(),
            Column::make("Местоположение слева в км", "location_left_km")
                ->searchable(),
            Column::make("Местоположение слева в м", "location_left_m")
                ->searchable(),
            BooleanColumn::make("Имеются ли переходно-скоростные линии", "has_transiotional_high_speed_lanes")
                ->sortable(),
            BooleanColumn::make("Имеются ли знаки", "has_road_sign")
                ->sortable(),
            BooleanColumn::make("Имеются ли трубы", "has_tube")
                ->sortable(),
            BooleanColumn::make("Имеются ли сигнальные столбы", "has_signal_pole")
                ->sortable(),
            BooleanColumn::make("Имеются ли безопасные островки", "has_safety_island")
                ->sortable(),
            Column::make("Создан", "created_at")
                ->sortable(),
            Column::make("Обновлен", "updated_at")
                ->sortable(),
        ];
    }
}
