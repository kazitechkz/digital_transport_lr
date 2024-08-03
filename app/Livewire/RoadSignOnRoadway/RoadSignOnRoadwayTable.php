<?php

namespace App\Livewire\RoadSignOnRoadway;

use App\Models\RoadSign;
use App\Models\RoadSignCondition;
use App\Models\Street;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\RoadSignOnRoadway;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class RoadSignOnRoadwayTable extends DataTableComponent
{
    protected $model = RoadSignOnRoadway::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setBulkActions([
            'deleteSelected' => 'Удалить',
        ]);
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function($row) {
                return route('road-sign-on-roadway.edit', $row);
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
            SelectFilter::make("Дорожный знак")
                ->options(RoadSign::pluck("title_ru","id")->toArray())
                ->filter(function($builder, string $value) {
                    return $builder->where(["road_sign_id"=>$value]);
                }),
            SelectFilter::make("Состояние дорожного знака")
                ->options(RoadSignCondition::pluck("title_ru","id")->toArray())
                ->filter(function($builder, string $value) {
                    return $builder->where(["road_sign_condition_id"=>$value]);
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
        $model = $this->getSelected();
        foreach ($model as $key => $value) {
            $model_one = RoadSignOnRoadway::find($value);
            $model_one?->delete();
        }
        $this->clearSelected();
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->searchable(),
            Column::make("Улица", "street.title_ru")
                ->sortable(),
            Column::make("Дорожный знак", "road_sign.title_ru")
                ->sortable(),
            Column::make("Состояние дорожного знака", "road_sign_condition.title_ru")
                ->sortable(),
            Column::make("Номер", "order")
                ->searchable(),
            Column::make("Местоположение в км", "location_km")
                ->searchable(),
            Column::make("Местоположение в м", "location_m")
                ->searchable(),
            BooleanColumn::make("Расположение знака слева по ходу движения на примыкании", "has_left_adjunctions_location")
                ->sortable(),
            BooleanColumn::make("Расположение знака слева по ходу движения на прямом", "has_left_direct_location")
                ->sortable(),
            BooleanColumn::make("Расположение знака слева по ходу движения на обратном", "has_left_reverse_location")
                ->sortable(),
            BooleanColumn::make("Расположение знака справа по ходу движения на примыкании", "has_right_adjunctions_location")
                ->sortable(),
            BooleanColumn::make("Расположение знака справа по ходу движения на прямом", "has_right_direct_location")
                ->sortable(),
            BooleanColumn::make("Расположение знака справа по ходу движения на обратном", "has_right_reverse_location")
                ->sortable(),
            BooleanColumn::make("Есть ли берма", "has_berm")
                ->sortable(),
            Column::make("Создан", "created_at")
                ->sortable(),
            Column::make("Обновлен", "updated_at")
                ->sortable(),
        ];
    }
}
