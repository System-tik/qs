<div>
    {{-- The whole world belongs to you. --}}
<input type="text" wire:model="nom">
<button wire:click="add">Enregistrer</button>
@foreach ($categories as $item)
    <div wire:click="recu({{$item}})">{{$item->nom}}</div>
@endforeach


    <button wire:click="delete">supprimer</button>
    <button wire:click="update">Modifier</button>   


</div>
