<?php

namespace App\Livewire\WidthRoadwayOnHighway;
use App\Models\Street;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\WidthRoadwayOnHighway;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class WidthRoadwayOnHighwayTable extends DataTableComponent
{
    protected $model = WidthRoadwayOnHighway::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setBulkActions([
            'deleteSelected' => 'Удалить',
        ]);
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function($row) {
                return route('width-roadway-on-highway.edit', $row);
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
            $model_one = WidthRoadwayOnHighway::find($value);
            $model_one?->delete();
        }
        $this->clearSelected();
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->searchable(),
            Column::make("Номер", "order")
                ->sortable(),
            Column::make("Улица", "street.title_ru")
                ->sortable(),
            Column::make("Начало участка в км", "start_of_region_km")
                ->searchable(),
            Column::make("Начало участка в м", "start_of_region_m")
                ->searchable(),
            Column::make("Конец участка в км", "end_of_region_km")
                ->searchable(),
            Column::make("Конец участка в м", "end_of_region_m")
                ->searchable(),
            Column::make("Ширина обратного направления", "reverse_width_m")
                ->searchable(),
            Column::make("Ширина обоих направлений", "both_width_m")
                ->searchable(),
            Column::make("Ширина прямого направления м", "straight_width_m")
                ->searchable(),
            Column::make("Создан", "created_at")
                ->sortable(),
            Column::make("Обновлен", "updated_at")
                ->sortable(),
        ];
    }
}
