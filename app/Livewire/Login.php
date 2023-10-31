<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Login extends Component
{

    public string $email = '';
    public string $password = '';

    public function login(){
        if(Auth::attempt(['email'=>$this->email, 'password' =>$this->password])){
            return redirect()->route('home');
        };

        throw ValidationException::withMessages([
            'email' => 'User Tidak Ditemukan'
        ]);
    }

    public function logout(){
        Auth::logout();
 
        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
