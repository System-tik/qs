<?php

namespace App\Http\Livewire\Admin;

use App\Models\categorieprod;
use Livewire\Component;
use App\Models\produit;
use Livewire\WithFileUploads;

class VProduit extends Component
{
    use WithFileUploads;
    public $cat_id;
    public $nom;
    public $prix;
    public $descrip;
    public $type;
    public $poids;
    public $photo;
    public $unite;
    public $selectId;
    public $produits;
    public $categories;

    protected $listeners = ['cat'=>'$refresh'];

    public function render()
    {
        $this->produits=produit::join('categorieprods', 'categorieprods.id', '=', 'produits.cat_id')->get(['produits.*', 'categorieprods.nom as cat']);
        $this->categories = categorieprod::all();
        return view('livewire.admin.v-produit');
    }

    public function store(){
        $vv = $this->validate(['photo'=>'required']);
        //dd($vv);
        $validate=$this->validate([
            'cat_id'=>'required',
            'nom'=>'required',
            'prix'=>'required',
            'descrip'=>'required',
            'type'=>'required',
            'poids'=>'required',
            'unite'=>'required',
        ]);
        //dd($validate);

        $record = produit::create($validate);
        $this->photo->storePubliclyAs('public/produits/', $record->id.'.png');
    }

    public function clear()
    {
        $this->cat_id="";
        $this->nom="";
        $this->prix="";
        $this->descrip="";
        $this->type="";
        $this->poids="";
        $this->unite="";
    }

    public function update()
    {
        $validate = $this->validate([
            'cat_id'=>'required',
            'nom'=>'required',
            'prix'=>'required',
            'descrip'=>'required',
            'type'=>'required',
            'poids'=>'required',
            'unite'=>'required',
        ]);
        $record = produit::find($this->selectedId);
        $record->update($validate);
        if(!empty($this->photo)){
            $this->photo->storePubliclyAs('public/produits/', $record->id.'.png');
        }
        $this->clear();
    }


    public function select($data)
    {
        $this->selectedId=$data['id'];
        $this->nom=$data['nom'];
        $this->prix=$data['prix'];
        $this->descrip=$data['descrip'];
        $this->type=$data['type'];
        $this->unite=$data['unite'];
        $this->poids=$data['poids'];
        $this->cat_id=$data['cat_id'];
    }

    public function delete()
    {
        $valider = $this->validate([
            'cat_id'=>'required',
            'nom'=>'required',
            'prix'=>'required',
            'descrip'=>'required',
            'type'=>'required',
            'poids'=>'required',
            'unite'=>'required',
        ]);
        $record = produit::find($this->selectedId);
        $record->delete();
        $this->clear();
    }


}
