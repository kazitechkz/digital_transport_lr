<?php

namespace App\Livewire\User;

use App\Models\Department;
use Illuminate\Support\Facades\DB;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;
use Spatie\Permission\Models\Role;

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
    public function filters(): array
    {
        $roles = Role::pluck("name","id")->toArray();
        $departments = Department::pluck("title_ru","id")->toArray();
        $roleOptions = ['' => 'Все'];
        $roleOptions += $roles;
        $departmentOptions = ['' => 'Все'];
        $departmentOptions += $departments;
        return [
            SelectFilter::make("Роль")
                ->options($roleOptions)
                ->filter(function($builder, string $value) {
                    $user_ids = DB::table("model_has_roles")->where("role_id", $value)->pluck("model_id")->toArray();
                    $builder->whereIn("users.id", $user_ids);
                }),
            SelectFilter::make("Департамент")
                ->options($departmentOptions)
                ->filter(function($builder, string $value) {
                    $builder->where("users.department_id", $value);
                }),
        ];
    }
    public function deleteSelected(): void
    {
        if (auth()->user()->can('employee delete')) {
            $model = $this->getSelected();
            foreach ($model as $key => $value) {
                $entity = User::findOrFail($value);
                $entity?->removeFile('avatar');
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
            Column::make("Имя", "name")
                ->searchable()
                ->sortable(),
            Column::make("Департамент", "department.title_ru")
                ->searchable()
                ->sortable(),
            Column::make("Email", "email")
                ->searchable()
                ->sortable(),
            Column::make("Дата создания", "created_at")
                ->sortable()
        ];
    }
}
