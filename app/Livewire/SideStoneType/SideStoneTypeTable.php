<?php

namespace App\Livewire\SideStoneType;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\SideStoneType;

class SideStoneTypeTable extends DataTableComponent
{
    protected $model = SideStoneType::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setBulkActions([
            'deleteSelected' => 'Удалить',
        ]);
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function($row) {
                return route('side-stone-type.edit', $row);
            });
    }

    public function bulkActions(): array
    {
        return [
            'deleteSelected' => 'Удалить',
        ];
    }

    public function deleteSelected(): void
    {
        if (auth()->user()->can('SideStoneType delete')) {
            $model = $this->getSelected();
            foreach ($model as $key => $value) {
                $model_one = SideStoneType::find($value);
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
            Column::make("Наименование на русском", "title_ru")
                ->searchable(),
            Column::make("Наименование на казахском", "title_kk")
                ->searchable(),
            Column::make("Наименование на английском", "title_en")
                ->searchable(),
            Column::make("Создан", "created_at")
                ->sortable(),
            Column::make("Обновлен", "updated_at")
                ->sortable(),
        ];
    }
}
