<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\categorieprod;


class VCatproduit extends Component
{
    public $nom;
    public $selectedId;
    public $categories;

    public function render()
    {
        $this->categories=categorieprod::all();
        return view('livewire.admin.v-catproduit');
    }
    public function add(){
        $validate=$this->validate([
            'nom'=>'required',   
        ]);

        categorieprod::create($validate);
        $this->clear();

    }
    public function clear()
    {
        $this->nom="";
    }

    public function update()
    {
        $valider = $this->validate([
            'nom'=>'required'
        ]);
        $valide = categorieprod::find($this->selectedId);
        $valide->update($valider);
        $this->clear();
    }


    public function recu($data)
    {
        $this->selectedId=$data['id'];
        $this->nom=$data['nom'];
    }

    public function delete()
    {
        $valider = $this->validate([
            'nom'=>'required'
        ]);
        $record = categorieprod::find($this->selectedId);
        $record->delete();
        $this->clear();
    }
}
