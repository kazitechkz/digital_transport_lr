<?php

namespace App\Livewire\User;

use App\Models\Department;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Spatie\Permission\Models\Role;

class Edit extends Component
{
    public User $user;
    use WithFileUploads;
    #[Validate('nullable|image|max:1024')]
    public $photo;
    #[Validate('required|min:3')]
    public $name;
    #[Validate('required|email')]
    public $email;
    #[Validate('nullable|min:3')]
    public $password;
    #[Validate('required')]
    public $department_id;
    public $departments;
    public $genders = [
        [
            'id' => 'man',
            'name' => 'Мужской'
        ],
        [
            'id' => 'woman',
            'name' => 'Женский'
        ]
    ];
    public $gender;
    public $birthday;
    public $phone;
    public $roles;
    #[Validate('required')]
    public $role_ids = [];
    public function mount(User $user): void
    {
        $this->roles = Role::all();
        $this->departments = Department::all();
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone = $user->phone;
        $this->birthday = $user->birthday;
        $this->gender = $user->gender;
        $this->photo = $user->avatar;
        $this->department_id = $user->department_id;
        foreach ($user->getRoleNames() as $roleName) {
            $this->role_ids[] = $roleName;
        }
    }
    public function submit()
    {
        $this->validate();
        $password = $this->password ? Hash::make($this->password) : $this->user->password;
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $password,
            'birthday' => $this->birthday,
            'gender' => $this->gender,
            'phone' => $this->phone,
            'department_id' => $this->department_id
        ];
        $this->user->edit($data);
        foreach ($this->user->getRoleNames() as $roleName) {
            $this->user->removeRole($roleName);
        }
        $this->user->assignRole($this->role_ids);
        if (gettype($this->photo) != 'string') {
            $this->user->uploadFile($this->photo, 'avatar');
        }
        $this->redirect(route('employee.index'));
    }
    public function render()
    {
        return view('livewire.user.edit');
    }
}
