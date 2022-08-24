<?php

namespace App\Http\Livewire\Admin;

use App\Models\fournisseur;
use Exception;
use Livewire\Component;

class VFournisseur extends Component
{
    public $nom;
    public $tel;
    public $adresse;
    public $fournisseurs;
    public $idUnique1;
    public $idUnique2;
    public $marchandises=[];
    public $marchandise;
    
    protected $messages = [
        'nom.required' => 'le nom ne doit pas être vide.',
        'nom.max' => 'le nom ne doit pas dépasser 12 caractères',
        'nom.min' => 'le nom doit avoir au moins 6 caractères',
        'tel.max' => 'numéro incorrect',
        'tel.min' => 'numéro incorrect',
        'adresse.max' => 'l\'adresse ne doit contenir plus de 35 caractères',
        'adresse.min' => 'l\'adresse doit avoir au moins 2 caractères',
        'tel.required' => 'veuillez saisir le numéro',
        'adresse.required' => 'veuillez saisir l\'adresse',
        'idUnique1.required' => 'veuillez séléctionner un fournisseur',
        'idUnique2.required' => 'veuillez séléctionner un fournisseur',
        'marchandise.required' => 'veuillez saisir une marchandise'
    ];

    protected $listeners=['commande' => '$refresh'];

    public function render()
    {
        //recupération de tous les fournisseurs
        $this->fournisseurs = fournisseur::all();
        return view('livewire.admin.v-fournisseur');
    }

    public function add()
    {
        //validation des données des différents champs
        $validate = $this->validate([
            'nom' => 'required|max:15|min:6',
            'tel' => 'required|max:14|min:9',
            'adresse' => 'required|min:2|max:35',
            'marchandises' => 'nullable'
        ]);

        try 
        {
            //insertion d'un fournisseur dans la bdd
            $insert = fournisseur::create($validate);
            $this->dispatchBrowserEvent('confirm',[   
                'message' => "enregistrement effectué avec succès"
            ]);
            $this->emit('fournisseur');
            $this->clear();
        } 
        catch (Exception $e) 
        {
                 $this->dispatchBrowserEvent('echec',[
                    'message' => $e->getMessage()
                ]);
        }
    

    }

    public function clear()
    {
        //suppression des données dans les champs après une action
        $this->nom = '';
        $this->tel = '';
        $this->adresse = '';
        $this->marchandise='';
        
    }

    public function recupere($donne)
    {
        //recupération d'un fournisseur unique
        $this->nom = $donne['nom'];
        $this->tel = $donne['tel'];
        $this->adresse = $donne['adresse'];
        $this->idUnique1 =  $donne['id'];
        $this->idUnique2 =  $donne['id'];
    }

    public function delete()
    {
        //vérifie si un fournisseur a été séléctionné
        $validate = $this->validate([
            'idUnique1' => 'required'
        ]);
        //recupération et suppression d'un fournisseur
        $this->fournisseurs = fournisseur::find($this->idUnique1);
        try {
            $this->fournisseurs->delete();
            $this->dispatchBrowserEvent('confirm',['message' => 'donnée supprimée avec succès']);
            $this->emit('fournisseur');
            $this->clear();
            
        } catch (Exception $e) {
            $this->dispatchBrowserEvent('echec',['message' => $e ]);
        }
    }

    public function update()
    {
        //vérifie si un fournisseur a été séléctionné
        $validate = $this->validate([
            'idUnique2' => 'required'
        ]);
        //validation des données des différents champs
        $validate = $this->validate([
            'nom' => 'required|max:15|min:6',
            'tel' => 'required|max:14|min:9',
            'adresse' => 'required|min:2|max:35',
            'marchandises' => 'nullable'
        ]);

        try {
            //recupération et mise à jour d'un fournisseur
            $this->fournisseurs = fournisseur::find($this->idUnique2);
            $this->fournisseurs->update([
                'nom' => $this->nom,
                'tel' => $this->tel,
                'adresse' => $this->adresse,
                'marchandises' => $this->marchandises
            ]);
            $this->dispatchBrowserEvent('confirm',['message' => 'donnée modifiée avec succès']);
            $this->emit('fournisseur');
            $this->clear();
            
        } catch (Exception $e) {
            $this->dispatchBrowserEvent('echec',['message' => $e->getMessage()]);
        }
    }

    public function addmarch()
    {
        $validate = $this->validate([
            'marchandise' => 'required'
        ]);
        array_push($this->marchandises,$this->marchandise);
    }
}
