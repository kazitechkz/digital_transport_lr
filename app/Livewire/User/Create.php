<?php

namespace App\Livewire\User;

use App\Models\Department;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Spatie\Permission\Models\Role;

class Create extends Component
{
    use WithFileUploads;
    #[Validate('nullable|image|max:1024')]
    public $photo;
    #[Validate('required|min:3')]
    public $name;
    #[Validate('required|email')]
    public $email;
    #[Validate('required|min:3')]
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

    public function mount(): void
    {
        $this->roles = Role::all();
        $this->departments = Department::all();
    }

    public function submit(): void
    {
        $this->validate();
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'birthday' => $this->birthday,
            'gender' => $this->gender,
            'phone' => $this->phone,
            'department_id' => $this->department_id
        ];
        if (auth()->user()->can('employee create')) {
            $user = User::add($data);
            foreach ($this->role_ids as $role_id) {
                $user->assignRole($role_id);
            }
            if ($this->photo) {
                $user->uploadFile($this->photo, 'avatar');
            }
            $this->redirect(route('employee.index'));
        } else {
            $this->redirect(route('bad-request'));
        }
    }
    public function render()
    {
        return view('livewire.user.create');
    }
}
