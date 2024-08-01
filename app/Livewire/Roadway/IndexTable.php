<?php

namespace App\Livewire\Roadway;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Roadway;

class IndexTable extends DataTableComponent
{
    protected $model = Roadway::class;

    public function configure(): void
    {
        $this->setBulkActions([
            'deleteSelected' => 'Удалить'
        ]);
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function ($row) {
                return route('roadway.edit', $row);
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
        $model = $this->getSelected();
        foreach ($model as $key => $value) {
            $entity = Roadway::findOrFail($value);
            $entity?->delete();
        }
        $this->clearSelected();
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Номер", "order")
                ->sortable(),
            Column::make("От, м", "start_m")
                ->sortable(),
            Column::make("До, м", "end_m")
                ->sortable(),
            Column::make("Площадь, м2", "square_m")
                ->sortable(),
            Column::make("Улица", "street.title_ru")
                ->sortable(),
            Column::make("Сторона", "side.title_ru")
                ->sortable(),
            Column::make("Тип покрытия", "coverage_type.title_ru")
                ->sortable(),
            Column::make("Категория", "category_of_highway.title_ru")
                ->sortable()
        ];
    }
}
