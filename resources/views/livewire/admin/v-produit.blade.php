<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    {{-- <input type="text" wire:model="id_catp" placeholder="">
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
    @endforeach --}}

    
   
    <div class="flex flex-col px-2 text-gray-600" style="">
        <h1 class="px-2 text-2xl font-bold">
            Gestion des Produits
        </h1>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{$error}}
            @endforeach
        @endif
    </div>
    <div class="flex">
        <div class="p-2 border basis-1/6">
            {{-- Formulaire --}}
            <div class="">
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" wire:model='nom' class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 dark:border-gray-600 appearance-none dark:focus:border-red-600 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required="">
                        <label class="peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-red-600 peer-focus:dark:text-red-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nom du produit</label>
                    </div>
                    <div class="relative z-0 w-full mb-2 group">
                        <input wire:model='prix' class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-red-600 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required="">
                        <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-red-600 peer-focus:dark:text-red-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Prix</label>
                    </div>
                </div>
                <div class="relative z-0 w-full mb-3 group">
                    <textarea wire:model='descrip' class="block py-2.5 px-0 w-full bg-transparent border-0 border-b-2 border-gray-300 appearance-none" name="" id="" cols="10" rows="3"></textarea>
                    <label class="font-bold text-gray-500 absolute text-lg duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-red-600 peer-focus:dark:text-red-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
                </div>
                <div class="flex">
                    <div class="relative z-0 flex-1 w-full mb-2 group">
                        <label for="categorie" class="block mb-2 text-sm font-medium text-gray-500">Categorie</label>
                        <select id="categorie" wire:model='cat_id' class=" text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                            <option>Faire un choix</option>
                            @foreach ($categories as $cat)
                            <option value="{{$cat->id}}">{{$cat->nom}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="relative z-0 mb-2 group">
                        <button type="button" class="justify-center text-xl transition duration-500 mt-9">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 flex-1 mb-2 group">
                        <label for="categorie" class="block mb-2 text-sm font-medium text-gray-500">Type</label>
                        <select id="categorie" wire:model='type' class=" text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="cosmetible">Comestible</option>
                            <option value="ustenseil de cuisine">Ustensil de cuisine</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>
                    <div class="flex gap-5 mt-6">
                        <div class="basis-1/2">
                            <div class="relative z-0 mb-2 group">
                                <input wire:model='poids' class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-red-600 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required="">
                                <label class="peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-red-600 peer-focus:dark:text-red-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Poids</label>
                            </div>
                        </div>
                        <div class="basis-1/2">
                            <div class="relative z-0 mb-6 group">
                                <input wire:model='unite' class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-red-600 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required="">
                                <label class="peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-red-600 peer-focus:dark:text-red-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Unite</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file" class="flex flex-col items-center justify-center h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer w-72 bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Cliquer pour selectionner l'image</span></p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG or JPEG</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" wire:model='photo' />
                    </label>
                </div> 
            </div>

            {{-- btn crud product --}}
            <div class="flex justify-between gap-2 p-5 text-sm rounded border-slate-600">
                <div class="flex">
                    <button type="button" wire:click='store' class="flex justify-center w-full px-4 text-sm text-green-700 transition duration-500 border-2 border-green-700 border-solid rounded hover:bg-green-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2">
                        Creer
                    </button>
                </div>
                <div class="flex">
                    <button type="button" wire:click='update' class="flex justify-center w-full px-4 text-sm text-blue-700 transition duration-500 border-2 border-blue-700 border-solid rounded hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2">
                        Modifier
                    </button>
                </div>
                <div class="flex">
                    <button type="button" wire:click='delete' class="flex justify-center w-full px-4 text-sm text-red-700 transition duration-500 border-2 border-red-700 border-solid rounded hover:bg-red-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2">
                        Supprimer
                    </button>
                </div>
            </div>        
        </div>
        {{-- products list --}}
        <div class="basis-5/6">
            <div class="flex flex-col px-5">
                <div class="flex gap-2">
                    <input class="block py-2.5 px-0 text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-red-600 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder="Rechercher" required="">
                    <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="grid grid-cols-4 gap-4 p-5">
                @foreach ($produits as $pro)    
                <div class="cursor-pointer basis-2/8 " wire:click='select({{$pro}})'>
                    <div class="w-full bg-white rounded-lg shadow-md dark:border-gray-700">
                        <a href="#">
                            <img class="w-full h-40" src="{{ asset('storage/produits/'.$pro->id.'.png') }}" alt="product image">
                        </a>
                        <div class="p-2 px-2">
                            <a href="#">
                                <h5 class="font-semibold text-md">{{$pro->nom}}</h5>
                            </a>
                            <div class="flex mt-3 mb-2 items-justify">
                                <p class="text-sm">Prix</p>
                                <span class="text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">{{$pro->prix}} FC</span>
                            </div>
                            <div class="flex mt-2 items-justify">
                                <p class="text-sm">{{$pro->descrip}}</p>
                            </div>
                        </div>
                    </div> 
                </div>
                @endforeach
                
            </div>
        </div>
    </div>

</div>
