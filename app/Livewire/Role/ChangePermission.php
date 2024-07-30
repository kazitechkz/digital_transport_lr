<?php

namespace App\Livewire\Role;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class ChangePermission extends Component
{
    public $role;
    public $permissions;
    public $groupedPermissions;
    public function mount($role): void
    {
        $this->role = $role;
        $this->permissions = Permission::all();
        $this->groupedPermissions = $this->permissions->reduce(function ($carry, $permission) {
            // Разделяем name на две части: тип и действие
            [$type, $action] = explode(' ', $permission->name);
            // Инициализируем массив для типа, если он еще не существует
            if (!isset($carry[$type])) {
                $carry[$type] = [];
            }
            // Добавляем действие в массив типа
            $carry[$type][$permission->id] = $action;
            return $carry;
        }, []);
    }

    public function updatePermission(int $id): void
    {
        $permission = Permission::findOrFail($id);
        if ($this->role->hasPermissionTo($permission)) {
            $this->role->revokePermissionTo($permission);
        } else {
            $this->role->givePermissionTo($permission);
        }
    }

    public function checkHasPermission(int|bool $id)
    {
        if (!$id) {
            return false;
        }
        $permission = Permission::findOrFail($id);
        return $this->role->hasPermissionTo($permission);
    }

    public function render()
    {
        return view('livewire.role.change-permission');
    }
}
