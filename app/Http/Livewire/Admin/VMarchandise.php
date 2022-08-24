<?php

namespace App\Http\Livewire\Admin;

use App\Models\marchandise;
use Livewire\Component;

class VMarchandise extends Component
{
    public $id_fourn;
    public $nom;
    public $qte;
    public $marchandises;
    public $idUnique;
    
    public function render()
    {
        //recupération de toutes les marchandises
        $this->marchandises = marchandise::all();
        return view('livewire.admin.v-marchandise');
    }

    public function add()
    {
        //validation des données des différents champs
        $validate = $this->validate([
            'id_fourn' => 'required',
            'nom' => 'required',
            'qte' => 'required'
        ]);

        //insertion dans la bdd
        $insert = marchandise::create($validate);
        $this->clear();
    }

    public function clear()
    {
        //suppression des données dans les champs après une action
        $this->id_fourn = '';
        $this->nom = '';
        $this->qte = '';
    }

    public function recupere($donne)
    {
        //recupération d'une marchandise unique
        $this->id_fourn = $donne['id_fourn'];
        $this->nom = $donne['nom'];
        $this->qte = $donne['qte'];
        $this->idUnique =  $donne['id'];
    }

    public function delete()
    {
        //recupération et suppression d'une marchandise
        $this->marchandises = marchandise::find($this->idUnique);
        $this->marchandises->delete();
        $this->clear();
    }

    public function update()
    {
        //recupération et mise à jour d'une marchandise
        $this->marchandises = marchandise::find($this->idUnique);
        $this->marchandises->update([
            'id_fourn' => $this->id_fourn,
            'nom' => $this->nom,
            'qte' => $this->qte
        ]);
        $this->clear();
    }
}
