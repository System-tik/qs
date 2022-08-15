<?php

namespace App\Http\Livewire\Admin\Components;

use Livewire\Component;

class CDashcard extends Component
{
    public $color;

    public function render()
    {
        return view('livewire.admin.components.c-dashcard');
    }

    public function mount($color){
        $this->color = $color;
    }
}
