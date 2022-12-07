<div class="flex flex-col gap-3 ">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="flex items-center gap-5">
        {{-- input --}}
        <div>
            <input type="text" wire:model="nom" placeholder="Le nom de la categorie" class="p-1 border rounded-lg">
        </div>
        <div class="flex flex-1 gap-4">
            <button class="px-5 py-2 text-white bg-gray-700" wire:click="clear">Clear</button>
            <button class="px-5 py-2 text-white bg-green-700" wire:click="store">Enregistrer</button>
            <button class="px-5 py-2 text-white bg-yellow-700" wire:click="update">Modifier</button>
            <button class="px-5 py-2 text-white bg-red-700" wire:click="delete">Supprimer</button>
        </div>
    </div>
    <div class="flex-1">
        <h1>Liste </h1>
        <div class="grid grid-cols-5 gap-5">
            @foreach ($categories as $cat)
                <div class="p-2 text-xl font-bold bg-gray-100 cursor-pointer hover:bg-gray-500 hover:text-white" wire:click="select({{$cat}})">
                    <p>{{$cat->nom}}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
