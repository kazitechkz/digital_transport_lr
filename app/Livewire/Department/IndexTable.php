<?php

namespace App\Livewire\Department;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Department;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

class IndexTable extends DataTableComponent
{
    protected $model = Department::class;

    public function configure(): void
    {
        $this->setBulkActions([
            'deleteSelected' => 'Удалить'
        ]);
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function ($row) {
                return route('department.edit', $row);
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
        if (auth()->user()->can('department delete')) {
            $model = $this->getSelected();
            foreach ($model as $key => $value) {
                $entity = Department::findOrFail($value);
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
            Column::make("ID", "id")
                ->sortable(),
            Column::make("Наименование", "title_ru")
                ->searchable()
                ->sortable(),
            BooleanColumn::make("Статус", "status")
                ->sortable(),
            Column::make("Дата создания", "created_at")
                ->sortable(),
        ];
    }
}
