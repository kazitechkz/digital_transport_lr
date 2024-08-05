<?php

namespace App\Livewire\LandscapingOnRoadway;

use App\Models\LandscapingCondition;
use App\Models\Street;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\LandscapingOnRoadway;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class LandscapingOnRoadwayTable extends DataTableComponent
{
    protected $model = LandscapingOnRoadway::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setBulkActions([
            'deleteSelected' => 'Удалить',
        ]);
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function($row) {
                return route('landscaping-on-roadway.edit', $row);
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
            SelectFilter::make("Состояние посадок")
                ->options(LandscapingCondition::pluck("title_ru","id")->toArray())
                ->filter(function($builder, string $value) {
                    return $builder->where(["landscaping_condition_id"=>$value]);
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
        if (auth()->user()->can('LandscapingOnRoadway delete')) {
            $model = $this->getSelected();
            foreach ($model as $key => $value) {
                $model_one = LandscapingOnRoadway::find($value);
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
            Column::make("Улица", "street.title_ru")
                ->sortable(),
            Column::make("Состояние посадки", "landscaping_condition.title_ru")
                ->sortable(),
            Column::make("Номер", "order")
                ->searchable(),
            Column::make("Местоположение начала справа в км", "start_location_right_km")
                ->searchable(),
            Column::make("Местоположение начала справа в м", "start_location_right_m")
                ->searchable(),
            Column::make("Местоположение конца справа в км", "end_location_right_km")
                ->searchable(),
            Column::make("Местоположение конца справа в м", "end_location_right_m")
                ->searchable(),
            Column::make("Местоположение начала слева в км", "start_location_left_km")
                ->searchable(),
            Column::make("Местоположение начала слева в м", "start_location_left_m")
                ->searchable(),
            Column::make("Местоположение конца слева в км", "end_location_left_km")
                ->searchable(),
            Column::make("Местоположение конца слева в м", "end_location_left_m")
                ->searchable(),
            Column::make("2х Рядные в м", "two_row_m")
                ->searchable(),
            Column::make("3х Рядные в м", "three_row_m")
                ->searchable(),
            Column::make("4х Рядные в м", "four_row_m")
                ->searchable(),
            Column::make("5 Рядные в м", "five_row_m")
                ->searchable(),
            Column::make("6 Рядные в м", "six_row_m")
                ->searchable(),
            Column::make("8 Рядные в м", "eight_row_m")
                ->searchable(),
            Column::make("Протяженность всего в метрах", "total_length_m")
                ->searchable(),
            Column::make("Декортивная длина в км", "decorative_length_km")
                ->searchable(),
            Column::make("Расстояние от кромки в м", "length_to_edge_m")
                ->searchable(),
            Column::make("Создан", "created_at")
                ->sortable(),
            Column::make("Обновлен", "updated_at")
                ->sortable(),
        ];
    }
}
