<div>
<<<<<<< HEAD
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="flex flex-col px-5 text-gray-600" style="">
        <h1 class="text-2xl font-bold p-2">
            Gestion des Produits
        </h1>
    </div>
    <div class="flex">
        {{-- Recherche fournisseur --}}
        <div class="flex px-7">
            <form class="border p-2 mt-5">
                <h2 class="">Recherche fournisseur</h2>
                <div class="flex gap-6 mt-5">
                    <div class="relative z-0">
                    <input type="text" name="" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-red-600 focus:outline-none focus:ring-0" placeholder=" " />
                    <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-red-700 peer-focus:dark:text-red-700">Nom</label>
                    </div>
                </div>
                <div class="flex gap-6 mt-5">
                    <div class="relative">
                        <button type="submit" class="rounded-md bg-green-700 px-5 py-2 text-white">Valider</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="flex px-7 mb-16">
            <div class="flex items-center justify-center">
              <div class="w-full">
                <div class="bg-white">
                  <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 text-sm leading-normal">
                            <th class="px-2 text-left">Nom</th>
                            <th class="px-2 text-left">Marchandise</th>
                            <th class="py-2 text-center">Telephone</th>
                            <th class="py-2 text-center">Adresse</th>
                            <th class="py-2 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                      <tr class="border-b border-gray-200 hover:bg-gray-100 cursor-pointer">
                        <td class="px-2 text-left whitespace-nowrap">
                            <div class="flex items-center">
                                <span class="font-medium">Agro-congo</span>
                            </div>
                        </td>
                        <td class="px-2 text-left whitespace-nowrap">
                            <div class="flex items-center">
                                <span class="font-medium">Tomate fraiche</span>
                            </div>
                        </td>
                        <td class="px-6 text-left">
                            <div class="flex items-center">
                                <span>+24385254684</span>
                            </div>  
                        </td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex items-center justify-center">
                                <span>Gombe matadi</span>
                            </div>
                        </td>
                        <td class="py-3 text-center">
                          <div class="flex item-center justify-center">
                            <div class="w-4 mr-2 transform hover:text-green-500 hover:scale-110 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </div>
                            <div class="w-4 mr-2 transform hover:text-green-500 hover:scale-110 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </div>
                            <div class="w-4 mr-2 transform hover:text-green-500 hover:scale-110 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </div>
                          </div>    
                        </td> 
                      </tr>
                    </tbody>
                </table>   
                </div>
              </div>
        </div>
    </div>
</div>
=======
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
>>>>>>> 662d0f245a662571ce6c2784d275d708e6c36b72
