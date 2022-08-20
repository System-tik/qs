<div>
    <h2 class="text-3xl px-5">Dashboard</h2>
    <div class="flex text-white">
        <livewire:admin.components.c-dashcard color="red" title="Cmd en attente" number="36" icon="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z">
        <livewire:admin.components.c-dashcard color="green" title="Cmd livres" number="520" icon="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0">
        <livewire:admin.components.c-dashcard color="blue" title="Tous les produits" number="36" icon="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
        <livewire:admin.components.c-dashcard color="yellow" title="Clients" number="411" icon="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
    </div>

    <div class="flex gap-4 px-5">
      <div class="basis-3/4 shadow-lg">
        <div class="flex justify-between bg-red-700 text-white">
            <div class="flex">
                <h2 class="text-lg font-bold p-3">
                  Liste des commandes
                </h2>
            </div>
            <div class="flex p-3 justify-center">
              <div class="bg-white w-8 flex justify-center items-center rounded-full">
                <p class="text-red-800 font-bold text-lg">36</p>
              </div>
            </div>
        </div>
        <div class="flex">
          <form class="mt-3 px-2">
            <h2>Recherche commande</h2>
            <div class="grid gap-6 sm:grid-cols-3 mt-1">
              <div class="relative z-0">
                <input type="text" name="" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-red-600 focus:outline-none focus:ring-0" placeholder=" " />
                <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-red-700 peer-focus:dark:text-red-700">Reference</label>
              </div>
              <div class="relative z-0">
                <input type="text" name="" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-red-600 focus:outline-none focus:ring-0" placeholder=" " />
                <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-red-700 peer-focus:dark:text-red-700">Client</label>
              </div>
              <div class="relative">
                <button type="submit" class="rounded-md bg-green-700 px-5 py-2 text-white">Valider</button>
              </div>
            </div>    
          </form>
        </div>
        {{-- command table --}}
        <div class="flex mt-1 px-2">
          <div class="bg-gray-100 flex items-center justify-center mt-2">
            <div class="w-full">
              <div class="bg-white">
                <table class="w-full table-auto">
                  <thead>
                      <tr class="bg-gray-200 text-gray-600 text-sm leading-normal">
                          <th class="px-2 text-left">Client</th>
                          <th class="py-2 text-center">Reference</th>
                          <th class="py-2 text-center">Date</th>
                          <th class="py-2 text-center">Etat</th>
                          <th class="py-2 px-5 text-center">Adresse</th>
                          <th class="py-2 px-5 text-center">Phone</th>
                          <th class="py-2 px-5 text-center">Montant</th>
                          <th class="py-2 text-left">Actions</th>
                      </tr>
                  </thead>
                  <tbody class="text-gray-600 text-sm font-light">
                    <tr class="border-b border-gray-200 hover:bg-gray-100 cursor-pointer">
                      <td class="px-2 text-left whitespace-nowrap">
                        <div class="flex items-center">
                          <span class="font-medium">Patrick</span>
                        </div>
                      </td>
                      <td class="px-6 text-left">
                        <div class="flex items-center">
                          <span>refco2022</span>
                        </div>  
                      </td>
                      <td class="py-3 px-6 text-center">
                        <div class="flex items-center justify-center">
                          <span>20/04/2022</span>
                        </div>
                      </td>
                      <td class="py-3 px-6 text-center">
                        <span class="bg-green-700 text-white py-1 px-3 rounded-full text-xs">Livree</span>
                      </td>
                      <td class="py-3 px-6 text-center">
                        <div class="flex items-center justify-center">
                          <span>Kin</span>
                        </div>
                      </td>
                      <td>
                        <div class="flex items-center justify-center">
                          <span>+24387521456</span>
                        </div>
                      </td>
                      <td>
                        <div class="flex items-center justify-center">
                          <span>2500Fc</span>
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
                    <tr class="border-b border-gray-200 hover:bg-gray-100 cursor-pointer">
                      <td class="px-2 text-left whitespace-nowrap">
                        <div class="flex items-center">
                          <span class="font-medium">Patrick</span>
                        </div>
                      </td>
                      <td class="px-6 text-left">
                        <div class="flex items-center">
                          <span>refco2022</span>
                        </div>  
                      </td>
                      <td class="py-3 px-6 text-center">
                        <div class="flex items-center justify-center">
                          <span>20/04/2022</span>
                        </div>
                      </td>
                      <td class="py-3 px-6 text-center">
                        <span class="bg-green-700 text-white py-1 px-3 rounded-full text-xs">Livree</span>
                      </td>
                      <td class="py-3 px-6 text-center">
                        <div class="flex items-center justify-center">
                          <span>Kin</span>
                        </div>
                      </td>
                      <td>
                        <div class="flex items-center justify-center">
                          <span>+24387521456</span>
                        </div>
                      </td>
                      <td>
                        <div class="flex items-center justify-center">
                          <span>2500Fc</span>
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
      <div class="basis-1/4 shadow-lg">
        <div class="flex flex-row items-center justify-center bg-green-700 text-white">
          <div class="flex">
              <h2 class="text-lg font-bold p-3">
                  Meilleures ventes
              </h2>
          </div>
          <div class="p-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
              </svg>
          </div>
        </div>     
        {{-- top selling items --}}
        <div class="p-3 py-1 px-2 bg-white hover:bg-gray-100 cursor-pointer">
          <div class="flex justify-between items-center">
            <div>
              <h6 class="font-semibold">Tomate fraiche</h6>
              <p>Ventes : <span class="text-green-700 font-bold">120</span></p>
            </div>
            <div class="">
              <img src="{{ asset('images/tomate.jpg') }}" alt="" srcset="" class="w-18 h-14">
            </div>
          </div>
          <div class="text-left flex justify-start">
            <p>Prix : <span class="font-semi-bold">2000 FC</span></p>
          </div>
        </div>
        <div class="p-3 py-1 px-2 bg-white hover:bg-gray-100 cursor-pointer">
          <div class="flex justify-between items-center">
            <div>
              <h6 class="font-semibold">Tomate fraiche</h6>
              <p>Ventes : <span class="text-green-700 font-bold">120</span></p>
            </div>
            <div class="">
              <img src="{{ asset('images/tomate.jpg') }}" alt="" srcset="" class="w-18 h-14">
            </div>
          </div>
          <div class="text-left flex justify-start">
            <p>Prix : <span class="font-semi-bold">2000 FC</span></p>
          </div>
        </div>        
      </div>
    </div>
</div>