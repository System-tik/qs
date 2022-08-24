<div>
    <div>
        <input type="text" wire:model="nom"><br>
        @error('nom') <span class="error">{{ $message }}</span><br> @enderror
        <input type="text" wire:model="tel"><br>
        @error('tel') <span class="error">{{ $message }}</span><br>@enderror
        <input type="text" wire:model="adresse"><br>
        @error('adresse') <span class="error">{{ $message }}</span><br>@enderror
        <input type="text" wire:model="marchandise" placeholder="marchandise"><br>
        <button wire:click="addmarch">add marchandise</button><br>
        @error('marchandise') <span class="error">{{ $message }}</span><br>@enderror
        @foreach ($marchandises as $march)
            <p>{{ $march }}</p>
        @endforeach

        <button wire:click="add">add</button><br>
        
        <button wire:click="delete">Supprimer</button><br>
        @error('idUnique1') <span class="error">{{ $message }}</span>@enderror
        <button wire:click="update">Modifier</button><br>
        @error('idUnique2') <span class="error">{{ $message }}</span>@enderror
        
        @foreach ($fournisseurs as $fournisseur)
            <p wire:click="recupere({{ $fournisseur }})">{{ $fournisseur->nom }}</p>
            @foreach ($fournisseur->marchandises as $m)
                {{ $m }}
            @endforeach
        @endforeach
        </div>
</div>

        <script>
            window.addEventListener('confirm',event => {
                console.log(event.detail.message);
            })
            window.addEventListener('echec',event => {
                console.log(event.detail.message);
            })

        </script>
