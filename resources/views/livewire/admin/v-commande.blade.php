<div>
<input type="text" wire:model="id_pan">
@error('id_pan') <span class="error">{{ $message }}</span><br> @enderror
<input type="text" wire:model="datec">
@error('datec') <span class="error">{{ $message }}</span><br> @enderror
<input type="text" wire:model="etatcom">
@error('etatcom') <span class="error">{{ $message }}</span><br> @enderror
<input type="text" wire:model="adresse">
@error('adresse') <span class="error">{{ $message }}</span><br> @enderror
<input type="text" wire:model="etatliv">
@error('etatliv') <span class="error">{{ $message }}</span><br> @enderror
<input type="text" wire:model="tel">
@error('tel') <span class="error">{{ $message }}</span><br> @enderror
<input type="text" wire:model="dateliv">
@error('dateliv') <span class="error">{{ $message }}</span><br> @enderror
<input type="text" wire:model="id_lieu">
@error('id_lieu') <span class="error">{{ $message }}</span><br> @enderror

<button wire:click="add">add</button>
<button wire:click="delete">Supprimer</button>
@error('idUnique1') <span class="error">{{ $message }}</span><br> @enderror
<button wire:click="update">Modifier</button>
@error('idUnique2') <span class="error">{{ $message }}</span><br> @enderror

@foreach ($commandes as $commande)
    <p wire:click="recupere({{ $commande }})">{{ $commande->etatliv }} {{ $commande->etatcom }}</p>
@endforeach

<h1>liste des fournisseurs</h1>
@foreach ($fournisseurs as $fournisseur)
    <p>{{ $fournisseur->nom }}</p>
@endforeach
</div>


