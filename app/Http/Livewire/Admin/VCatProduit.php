<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\categorieprod;

class VCatProduit extends Component
{
    public $nom;
    public $selectedId;
    public $categories;
    public function render()
    {
        $this->categories=categorieprod::all();
        return view('livewire.admin.v-cat-produit');
    }
    public function store(){
        $validate=$this->validate([
            'nom'=>'required',   
        ]);

        categorieprod::create($validate);
        $this->clear();
        $this->emit("cat");
    }
    public function clear()
    {
        $this->nom="";
        $this->selectedId = "";
    }

    public function update()
    {
        $validate = $this->validate([
            'nom'=>'required'
        ]);
        $record = categorieprod::find($this->selectedId);
        $record->update($validate);
        $this->clear();
        $this->emit("cat");
    }


    public function select($data)
    {
        $this->selectedId=$data['id'];
        $this->nom=$data['nom'];
    }

    public function delete()
    {
        $this->validate([
            'nom'=>'required'
        ]);
        $record = categorieprod::find($this->selectedId);
        $record->delete();
        $this->clear();
        $this->emit("cat");
    }
}
