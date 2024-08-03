<?php

namespace App\Livewire\CommunicationWithinTheBandOnRoadway;

use App\Models\CommunicationType;
use App\Models\Street;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\CommunicationWithinTheBandOnRoadway;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class CommunicationWithinTheBandOnRoadwayTable extends DataTableComponent
{
    protected $model = CommunicationWithinTheBandOnRoadway::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setBulkActions([
            'deleteSelected' => 'Удалить',
        ]);
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function($row) {
                return route('cwb-on-roadway.edit', $row);
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
            SelectFilter::make("Тип коммуникаций")
                ->options(CommunicationType::pluck("title_ru","id")->toArray())
                ->filter(function($builder, string $value) {
                    return $builder->where(["ctype_id"=>$value]);
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
            $model_one = CommunicationWithinTheBandOnRoadway::find($value);
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
            Column::make("Тип коммуникаций", "communication_type.title_ru")
                ->sortable(),
            Column::make("Номер", "order")
                ->searchable(),
            Column::make("Начало местоположения в км", "location_start_km")
                ->searchable(),
            Column::make("Начало местоположения в м", "location_start_m")
                ->searchable(),
            Column::make("Конец местоположения в км", "location_end_km")
                ->searchable(),
            Column::make("Конец местоположения в м", "location_end_m")
                ->searchable(),
            Column::make("Расстояние от кромки до опоры слева в метрах", "distance_edge_left_m")
                ->searchable(),
            Column::make("Расстояние от кромки до опоры справа в метрах", "distance_edge_right_m")
                ->searchable(),
            Column::make("Место пересечения в км", "place_of_intersection_km")
                ->searchable(),
            Column::make("Место пересечения в м", "place_of_intersection_m")
                ->searchable(),
            Column::make("Создан", "created_at")
                ->sortable(),
            Column::make("Обновлен", "updated_at")
                ->sortable(),
        ];
    }
}
