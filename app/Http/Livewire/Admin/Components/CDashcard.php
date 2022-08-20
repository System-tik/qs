<?php

namespace App\Http\Livewire\Admin\Components;

use Livewire\Component;

class CDashcard extends Component
{
    public $color;
    public $title;
    public $number;
    public $icon;

    public function render()
    {
        return view('livewire.admin.components.c-dashcard');
    }

    public function mount($color, $title, $number, $icon){
        $this->color = $color;
        $this->title = $title;
        $this->number = $number;
        $this->icon = $icon;
    }
}
