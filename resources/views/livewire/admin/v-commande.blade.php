<div>
<<<<<<< HEAD
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    {{-- title content --}}
    <div class="flex px-2 text-gray-600" style="">
        <h1 class="text-2xl font-bold p-2">
            Gestion des Commandes
        </h1>
    </div>
    {{-- 1st block --}}
    <div class="flex px-4 gap-5">
        {{-- orders details --}}
        <div class="basis-2/3 rounded border shadow-lg">
            <div class="p-2">
                <h4 class="">Details de la commande</h4>
            </div>
            <hr>
            <div class="flex p-2">
              <div class="basis-1/2">
                <p class="text-gray-500">Date de la commande</p>
                <p class="">14/03/2022</p>
                <p class="text-gray-500">Lieu de livraison</p>
                <p class="">Nsona-nkulu 25, Mbanza-ngungu</p>
              </div>
              <div class="basis-1/2">
                <p class="text-gray-500">Date de livraison</p>
                <p class="">15/03/2022</p>
                <p class="text-gray-500">Coût total</p>
                <p class="">15000 Fc</p>
              </div>
            </div>
            <div class="flex gap-2 items-end justify-end p-2">
                <div class="flex gap-1 border">
                    <label for="" class="text-sm mt-1 px-2">Etat commande</label>
                    <div class="flex-1 relative group">
                        <select id="categorie" class=" text-gray-900 text-xs focus:ring-blue-500 focus:border-blue-500 p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Traite</option>
                            <option>Confirmee</option>
                        </select>
                    </div>
                </div>
                <div class="flex gap-1 border">
                    <label for="" class="text-sm mt-1 px-2">Etat livraison</label>
                    <div class="flex-1 relative group">
                        <select id="categorie" class=" text-gray-900 text-xs focus:ring-blue-500 focus:border-blue-500 p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Traite</option>
                            <option>Confirmee</option>
                        </select>
                    </div>
                </div>
                <div class="transform hover:text-red-800 hover:scale-110 cursor-pointer" style="color:#d91200">
                    <button class="flex gap-2 border px-2">
                        <p class="text-sm">Enregistrer</p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                        </svg>
                    </button>
                </div>
            </div>    
        </div>
        {{-- client infos --}}
        <div class="basis-1/3 rounded border shadow-lg">
            <div class="flex p-2">
                <h4 class="">Coordonnees du client</h4>
            </div>
            <hr>
            <div class="flex p-2">
                <div class="basis-1/2">
                    <p class="text-gray-500">Noms</p>
                    <p class="">Patrick Nsakala</p>
                    <p class="text-gray-500">Contact</p>
                    <p class="">+243810930187</p>
                </div>
                <div class="basis-1/2">
                    <p class="text-gray-500">Adresse</p>
                    <p class="">Nsonankulu 25</p>
                    <p class="text-gray-500">Ville</p>
                    <p class="">Mbanza-ngungu</p>
                </div>
            </div>
        </div>
    </div>
    {{-- content order header --}}
    <div class="flex flex-col px-4">
        <div class="flex justify-between items-center text-gray-600 py-3">
            <h1 class="text-lg">
                Contenu de la commande
            </h1>
        </div>
        {{-- order list --}}
        <div class="bg-gray-100 flex items-center justify-center">
            <div class="w-full h-64 overflow-auto">
              <div class="bg-white">
                <table class="w-full table-auto" style="">
                  <thead class="">
                      <tr class="bg-gray-100 text-gray-600 text-xs leading-normal">
                          <th class="px-2 text-left">Produit</th>
                          <th class="py-2 text-left">Description</th>
                          <th class="py-2 text-center">Qte</th>
                          <th class="py-2 text-center">Prix</th>
                          <th class="py-2 px-5 text-center">Montant</th>
                      </tr>
                  </thead>
                  <tbody class="text-gray-600 text-sm font-light">
                    @foreach ([1,2,2,2] as $item)
                    <tr class="border-b border-gray-200 hover:bg-gray-100 cursor-pointer">
                        <td class="px-2 text-left whitespace-nowrap">
                          <div class="flex items-center">
                            <span class="">Tomate fraiche</span>
                          </div>
                        </td>
                        <td class="py-3 text-center">
                          <div class="flex items-center">
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                          </div>
                        </td>
                        <td class="py-3 px-6 text-center">
                          <div class="flex items-center justify-center">
                            <span>2</span>
                          </div>
                        </td>
                        <td class="py-3 px-6 text-center">
                          <span>2500Fc</span>
                        </td>
                        <td class="py-3 px-6 text-center">
                          <span>5000Fc</span>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
</div>
=======
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


>>>>>>> 662d0f245a662571ce6c2784d275d708e6c36b72
