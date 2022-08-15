<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <input type="text" wire:model="id_catp" placeholder="">
    <input type="text" wire:model="nom" placeholder="nom"><br></br>
    <input type="text" wire:model="prix" placeholder="prix"><br></br>
    <input type="text" wire:model="descrip" placeholder="descrip"><br></br>
    <input type="text" wire:model="type" placeholder="type"><br></br>
    <input type="text" wire:model="poids" placeholder="poids"><br></br>
    <button wire:click="add">Enregistrer</button>
    <button wire:click="update">Modifier</button>
    <button wire:click="delete">Supprimer</button>

    @foreach ($produits as $item)
        <div wire:click="recu({{$item}})">{{$item->nom}}</div><br></br>
    @endforeach
   
</div>
