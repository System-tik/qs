<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\produit;

class VProduit extends Component
{
    public $id_catp=1;
    public $nom;
    public $prix;
    public $descrip;
    public $type;
    public $poids;
    public $selectId;
    public $produits;

    public function render()
    {
        $this->produits=produit::all();

        return view('livewire.admin.v-produit');
    }

    public function add(){
        $validate=$this->validate([
            'id_catp'=>'required',
            'nom'=>'required',
            'prix'=>'required',
            'descrip'=>'required',
            'type'=>'required',
            'poids'=>'required'
            
        ]);

        produit::create($validate);
    }

    public function clear()
    {
        $this->id_catp="";
        $this->nom="";
        $this->prix="";
        $this->descrip="";
        $this->type="";
        $this->poids="";
    }

    public function update()
    {
        $valider = $this->validate([
            'id_catp'=>'required',
            'nom'=>'required',
            'prix'=>'required',
            'descrip'=>'required',
            'type'=>'required',
            'poids'=>'required'
        ]);
        $valide = produit::find($this->selectedId);
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
            'id_catp'=>'required',
            'nom'=>'required',
            'prix'=>'required',
            'descrip'=>'required',
            'type'=>'required',
            'poids'=>'required'
        ]);
        $record = produit::find($this->selectedId);
        $record->delete();
        $this->clear();
    }


}
