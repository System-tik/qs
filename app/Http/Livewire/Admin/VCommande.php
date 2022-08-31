<?php

namespace App\Http\Livewire\Admin;

<<<<<<< HEAD
=======
use App\Models\commande;
use App\Models\fournisseur;
use Exception;
>>>>>>> 662d0f245a662571ce6c2784d275d708e6c36b72
use Livewire\Component;

class VCommande extends Component
{
<<<<<<< HEAD
    public function render()
    {
        return view('livewire.admin.v-commande');
    }
}
=======

    public $etats=[
        ['non traitée','argent perçu','en cours de traitement','traitée','commande annulée'],
        ['non traitée','signaler dépôt','empaquetage','attente du livreur','en cours de livraison','livrée','livraison annulée']
    ];

    public $id_pan;
    public $datec;
    public $etatcom;
    public $adresse;
    public $etatliv;
    public $tel;
    public $dateliv;
    public $id_lieu;
    public $commandes;
    public $fournisseurs;
    public $idUnique1;
    public $idUnique2;

    public $messages=[
        'id_pan.required' => 'veuillez renseigner ce champs',
        'datec.required' => 'veuillez renseigner ce champs',
        'etatcom.required' => 'veuillez renseigner ce champs',
        'adresse.required' => 'veuillez renseigner ce champs',
        'etatliv.required' => 'veuillez renseigner ce champs',
        'tel.required' => 'veuillez renseigner ce champs',
        'dateliv.required' => 'veuillez renseigner ce champs',
        'id_lieu.required' => 'veuillez renseigner ce champs',
        'idUnique1.required' => 'veuillez séléctionner une commande',
        'idUnique2.required' => 'veuillez séléctionner une commande',
        'tel.max' => 'numéro incorrect',
        'tel.min' => 'numéro incorrect',
        'adresse.max' => 'l\'adresse ne doit contenir plus de 35 caractères',
        'adresse.min' => 'l\'adresse doit avoir au moins 2 caractères'

    ];

    protected $listeners=['fournisseur' => '$refresh'];

    public function render()
    {
        //récupération de toutes les commandes
        $this->fournisseurs = fournisseur::all();
        $this->commandes = commande::all();
        return view('livewire.admin.v-commande');
    }

    public function add()
    {
        //validation des données
        $validate = $this->validate([
            'id_pan' => 'required',
            'datec' => 'required',
            'etatcom' => 'required',
            'adresse' => 'required|min:2|max:35',
            'etatliv' => 'required',
            'tel' => 'required|max:14|min:9',
            'dateliv' => 'required',
            'id_lieu' => 'required'
        ]);

        try {
            //insertion dans la bdd
            $insert = commande::create($validate);
            $this->dispatchBrowserEvent('confirm',['message' => 'données enregistrées avec succès']);
            $this->emit('commande');
            $this->clear();
            
        } catch (Exception $e) {
            $this->dispatchBrowserEvent('echec',['message' => $e->getMessage()]);
        }
    }

    public function clear()
    {
        //effacer les données des champs après une action
        $this->id_pan = '';
        $this->datec = '';
        $this->etatcom = '';
        $this->adresse = '';
        $this->etatliv = '';
        $this->tel = '';
        $this->dateliv = '';
        $this->id_lieu = '';
    }

    public function recupere($donne)
    {
        //recupération d'une commande unique
        $this->id_pan = $donne['id_pan'];
        $this->datec = $donne['datec'];
        $this->etatcom = $donne['etatcom'];
        $this->adresse = $donne['adresse'];
        $this->etatliv = $donne['etatliv'];
        $this->tel = $donne['tel'];
        $this->dateliv = $donne['dateliv'];
        $this->id_lieu = $donne['id_lieu'];
        $this->idUnique1 = $donne['id'];
        $this->idUnique2 = $donne['id'];
    }

    public function delete()
    {
        $validate = $this->validate([
            'idUnique1' => 'required'
        ]);
        //recupération et suppression de la commande
        $this->commandes = commande::find($this->idUnique1);
        $this->commandes->delete();
        $this->clear();
    }

    public function update()
    {   //vérifier une commande a été séléctionnée
        $validate = $this->validate([
            'idUnique2' => 'required'
        ]);

        //validation des données
        $validate = $this->validate([
            'id_pan' => 'required',
            'datec' => 'required',
            'etatcom' => 'required',
            'adresse' => 'required|min:2|max:35',
            'etatliv' => 'required',
            'tel' => 'required|max:14|min:9',
            'dateliv' => 'required',
            'id_lieu' => 'required'
        ]);

        try {
            //recupération et mise à jour d'une commande
            $this->commandes = commande::find($this->idUnique2);
            $this->commandes->update([
                'etatcom' => $this->etatcom,
                'etatliv' => $this->etatliv,
                'dateliv' => $this->dateliv,
            ]);
            $this->dispatchBrowserEvent('confirm',['message' => 'données modifiées avec succès']);
            $this->emit('commande');
            $this->clear();
            
        } catch (Exception $e) {
            $this->dispatchBrowserEvent('echec',['message' => $e->getMessage()]);
        }
    }
}


>>>>>>> 662d0f245a662571ce6c2784d275d708e6c36b72
