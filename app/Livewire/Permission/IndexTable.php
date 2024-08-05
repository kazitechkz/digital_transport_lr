<?php

namespace App\Livewire\Permission;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Spatie\Permission\Models\Permission;

class IndexTable extends DataTableComponent
{
    protected $model = Permission::class;

    public function configure(): void
    {
        $this->setBulkActions([
            'deleteSelected' => 'Удалить'
        ]);
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function ($row) {
                return route('permission.edit', $row);
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
        if (auth()->user()->can('permission delete')) {
            $model = $this->getSelected();
            foreach ($model as $key => $value) {
                $entity = Permission::findOrFail($value);
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
            Column::make('Наименование', 'name')
                ->searchable(),
            Column::make('Дата создания', 'created_at')
                ->sortable()
        ];
    }
}
