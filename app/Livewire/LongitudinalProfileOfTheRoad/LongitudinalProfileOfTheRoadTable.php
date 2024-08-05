<?php

namespace App\Livewire\LongitudinalProfileOfTheRoad;

use App\Models\Street;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\LongitudinalProfileOfTheRoad;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class LongitudinalProfileOfTheRoadTable extends DataTableComponent
{
    protected $model = LongitudinalProfileOfTheRoad::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setBulkActions([
            'deleteSelected' => 'Удалить',
        ]);
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function($row) {
                return route('longitudinal-profile-of-the-road.edit', $row);
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
        if (auth()->user()->can('LongitudinalProfileOfTheRoad delete')) {
            $model = $this->getSelected();
            foreach ($model as $key => $value) {
                $model_one = LongitudinalProfileOfTheRoad::find($value);
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
            Column::make("Номер", "order")
                ->searchable(),
            Column::make("Начало участка в км", "start_of_region_km")
                ->searchable(),
            Column::make("Начало участка в м", "start_of_region_m")
                ->searchable(),
            Column::make("Конец участка в км", "end_of_region_km")
                ->searchable(),
            Column::make("Конец участка в м", "end_of_region_m")
                ->searchable(),
            Column::make("Протяженность в м", "length_m")
                ->searchable(),
            Column::make("Уклон в %", "slope")
                ->searchable(),
            Column::make("Создан", "created_at")
                ->sortable(),
            Column::make("Обновлен", "updated_at")
                ->sortable(),
        ];
    }
}
