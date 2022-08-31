<div>
<input type="text" wire:model="id_fourn">
<input type="text" wire:model="nom">
@error('nom') <span class="error">{{ 'veuillez saisir le nom' }}</span>@enderror
<input type="text" wire:model="qte">
@error('qte') <span class="error">{{ 'ce champs est requis' }}</span>@enderror

<button wire:click="add">add</button>
<button wire:click="delete">Supprimer</button>
<button wire:click="update">Modifier</button>

@foreach ($marchandises as $marchandise)
    <p wire:click="recupere({{ $marchandise }})">{{ $marchandise->nom }}</p>
@endforeach
</div>
