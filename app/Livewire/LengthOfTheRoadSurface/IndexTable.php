<?php

namespace App\Livewire\LengthOfTheRoadSurface;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\LengthOfTheRoadSurface;

class IndexTable extends DataTableComponent
{
    protected $model = LengthOfTheRoadSurface::class;

    public function configure(): void
    {
        $this->setBulkActions([
            'deleteSelected' => 'Удалить'
        ]);
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function ($row) {
                return route('length-of-the-road-surface.edit', $row);
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
        if (auth()->user()->can('LengthOfTheRoadSurface delete')) {
            $model = $this->getSelected();
            foreach ($model as $key => $value) {
                $entity = LengthOfTheRoadSurface::findOrFail($value);
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
            Column::make("Номер", "order")
                ->searchable()
                ->sortable(),
            Column::make("От", "start")
                ->sortable(),
            Column::make("До", "end")
                ->sortable(),
            Column::make("Протяженность", "total_length")
                ->sortable(),
            Column::make("Улица", "street.title_ru")
                ->searchable()
                ->sortable(),
            Column::make("Тип покрытия", "coverage_type.title_ru")
                ->searchable()
                ->sortable()
        ];
    }
}
