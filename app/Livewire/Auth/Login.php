<?php

namespace App\Livewire\Auth;

use App\Http\Requests\Appeal\AppealCreateRequest;
use Livewire\Component;

class Login extends Component
{

    public string $email;
    public string $password;

    public function mount(){
        $this->email = old("email")??"";
    }

    protected function rules(){
        return ([
            "email"=>"required|email",
            "password"=>"required|max:225|min:4"
        ]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
