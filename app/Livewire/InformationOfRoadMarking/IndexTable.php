<?php

namespace App\Livewire\InformationOfRoadMarking;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\InformationOfRoadMarking;

class IndexTable extends DataTableComponent
{
    protected $model = InformationOfRoadMarking::class;

    public function configure(): void
    {
        $this->setBulkActions([
            'deleteSelected' => 'Удалить'
        ]);
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function ($row) {
                return route('information-of-road-marking.edit', $row);
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
        if (auth()->user()->can('InformationOfRoadMarking delete')) {
            $model = $this->getSelected();
            foreach ($model as $key => $value) {
                $entity = InformationOfRoadMarking::findOrFail($value);
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
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Ширина линии, см", "road_width_sm")
                ->sortable(),
            Column::make("Протяженность линии, м", "road_length_m")
                ->sortable(),
            Column::make("Площадь линии, м2", "road_square_m")
                ->sortable(),
            Column::make("Улица", "street.title_ru")
                ->searchable()
                ->sortable(),
            Column::make("Дорожная разметка", "road_marking.title_ru")
                ->searchable()
                ->sortable(),
            Column::make("Вид материала", "road_marking_material.title_ru")
                ->searchable()
                ->sortable()
        ];
    }
}
