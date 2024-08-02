<?php

namespace App\Livewire\User;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;

class IndexTable extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setBulkActions([
            'deleteSelected' => 'Удалить'
        ]);
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function ($row) {
                return route('employee.edit', $row);
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
            $entity = User::findOrFail($value);
            $entity?->removeFile('avatar');
            $entity?->delete();
        }
        $this->clearSelected();
    }

    public function columns(): array
    {
        return [
            Column::make("ID", "id")
                ->sortable(),
            Column::make("Имя", "name")
                ->searchable()
                ->sortable(),
            Column::make("Департамент", "department.title_ru")
                ->searchable()
                ->sortable(),
            Column::make("Email", "email")
                ->sortable(),
            Column::make("Дата создания", "created_at")
                ->sortable()
        ];
    }
}
