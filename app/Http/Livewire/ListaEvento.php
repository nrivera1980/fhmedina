<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Evento;
use App\Models\Link;

class ListaEvento extends Component
{
    public function render()
    {
        return view('livewire.lista-evento', [
            'eventos' => Evento::where('estado', 1)->orderby('id', 'DESC')->get(),
            'links' => Link::where('estado', 1)->get(),
        ]);
    }
}
