<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
     public function logout()
    {
        session()->forget('usuario'); 
        return redirect()->route('login');
    }

    public function render()
    {
           $usuario = session('usuario');
        return view('livewire.dashboard');
    }
}
