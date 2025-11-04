<?php

namespace App\Livewire\Auth;

use App\Models\Usuario;
use Livewire\Component;

class Login extends Component
{

     public $email, $senha;

    public function autenticar()
    {
        $usuario = Usuario::where('email', $this->email)->first();

        if (!$usuario || $usuario->senha !== $this->senha) {
            session()->flash('erro', 'Usuário ou senha incorretos.');
            return;
        }

        session(['usuario' => $usuario]);
        return redirect()->route('dashboard');
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
