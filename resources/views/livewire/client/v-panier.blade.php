<div class=" mx-3 grid grid-cols-12 ">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    
    <div class="col-span-12 p-3 flex justify-center items-center text-xl text-gray-500 ">
        <span class="text-2xl text-red-600  font-bold">B</span>ienvenue dans votre <span class=" text-yellow-500 ml-1">p</span>anier <span class=" text-gray-500 ml-1 text-2xl animate-bounce">!</span>
    </div>
    <div class="col-span-12 lg:col-span-9 gap-5 p-3 bg-white shadow-md">
        {{-- presentation produit --}}
        <div class="grid grid-cols-4 border-b-2 border-gray-100 py-4">
            <div class="col-span-4 md:col-span-2 flex items-center ">
                {{-- image produit --}}
                <div class="shadow-md">
                    <img src="{{asset('images/c.jpg')}}" alt="" class="h-32 sm:h-40 w-48 sm:w-60 hover:scale-110">
                </div>
                <div class="text-gray-500 ml-3">
                    {{-- Nom produit --}}
                    <h1 class="text-xl">Poisson de mer</h1>
                    {{-- Categorie produit --}}
                    <h3 class="text-xs text-yellow-600">Poisson</h3>
                    {{-- prix du produit --}}
                    <div class="text-xs font-bold text-gray-500 py-2">
                        5.000fc
                    </div>
                </div>
            </div>
            <div class="col-span-3 md:col-span-1 flex justify-center items-center mt-2 lg:mt-0">
                <div class="grid grid-cols-3 gap-2">
                    {{-- bouton pour precisé quantité produit --}}
                    <div class="grid grid-cols-4 col-span-2">
                        <div class="flex justify-center text-md font-bold text-white border-2 border-gray-300 cursor-pointer hover:scale-100" style="background-color:#d91200">
                            -
                        </div>
                        <div class="flex justify-center text-md font-bold text-gray-500 border-2 border-gray-300 cursor-pointer hover:bg-gray-100 hover:scale-100">
                            1
                        </div>
                        <div class="flex justify-center text-md font-bold text-gray-500 border-2 border-gray-300 cursor-pointer hover:bg-gray-100 hover:scale-100">
                            +
                        </div>
                    </div>
                    {{-- prix du produit par rapport a la quantité choisie --}}
                    <div class="text-xl font-bold text-gray-500 ">
                        5.000fc
                    </div>
                </div>
            </div>
            {{-- corbeil pour effacer --}}
            <div class="flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500 cursor-pointer hover:text-red-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>
                  
            </div>
        </div>

        {{-- presentation produit --}}
        <div class="grid grid-cols-4 border-b-2 border-gray-100 py-4">
            <div class="col-span-4  md:col-span-2 flex items-center ">
                {{-- image produit --}}
                <div class="shadow-md">
                    <img src="{{asset('images/Aubergines.jpg')}}" alt="" class="h-32 sm:h-40 w-48 sm:w-60 hover:scale-110">
                </div>
                <div class="text-gray-500 ml-3">
                    {{-- Nom produit --}}
                    <h1 class="text-xl">Aubergines</h1>
                    {{-- Categorie produit --}}
                    <h3 class="text-xs text-yellow-600">Legume</h3>
                    {{-- prix du produit --}}
                    <div class="text-xs font-bold text-gray-500 py-2">
                        3.000fc
                    </div>
                </div>
            </div>
            <div class="col-span-3 md:col-span-1 flex justify-center items-center mt-2 lg:mt-0">
                <div class="grid grid-cols-3 gap-2">
                    {{-- bouton pour precisé quantité produit --}}
                    <div class="grid grid-cols-4 col-span-2">
                        <div class="flex justify-center text-md font-bold text-white border-2 border-gray-300 cursor-pointer" style="background-color:#d91200">
                            -
                        </div>
                        <div class="flex justify-center text-md font-bold text-gray-500 border-2 border-gray-300 cursor-pointer hover:bg-gray-100 hover:scale-100">
                            3
                        </div>
                        <div class="flex justify-center text-md font-bold text-gray-500 border-2 border-gray-300 cursor-pointer hover:bg-gray-100 hover:scale-100">
                            +
                        </div>
                    </div>
                    {{-- prix du produit par rapport a la quantité choisie --}}
                    <div class="text-xl font-bold text-gray-500 ">
                        9.000fc
                    </div>
                </div>
            </div>
            {{-- corbeil pour effacer --}}
            <div class="flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500 cursor-pointer hover:text-red-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>
                  
            </div>
        </div>

        {{-- presentation produit --}}
        <div class="grid grid-cols-4  py-4">
            <div class="col-span-4  md:col-span-2 flex items-center ">
                {{-- image produit --}}
                <div class="shadow-md">
                    <img src="{{asset('images/p.jpeg')}}" alt="" class="h-32 sm:h-40 w-48 sm:w-60 hover:scale-110">
                </div>
                <div class="text-gray-500 ml-3">
                    {{-- Nom produit --}}
                    <h1 class="text-xl">Poulet</h1>
                    {{-- Categorie produit --}}
                    <h3 class="text-xs text-yellow-600">Viande</h3>
                    {{-- prix du produit --}}
                    <div class="text-xs font-bold text-gray-500 py-2">
                        6.000fc
                    </div>
                </div>
            </div>
            <div class=" col-span-3 md:col-span-1 flex justify-center items-center mt-2 lg:mt-0">
                <div class="grid grid-cols-3 gap-2">
                    {{-- bouton pour precisé quantité produit --}}
                    <div class="grid grid-cols-4 col-span-2">
                        <div class="flex justify-center text-md font-bold text-white border-2 border-gray-300 cursor-pointer" style="background-color:#d91200">
                            -
                        </div>
                        <div class="flex justify-center text-md font-bold text-gray-500 border-2 border-gray-300 cursor-pointer hover:bg-gray-100 hover:scale-100">
                            2
                        </div>
                        <div class="flex justify-center text-md font-bold text-gray-500 border-2 border-gray-300 cursor-pointer hover:bg-gray-100 hover:scale-100">
                            +
                        </div>
                    </div>
                    {{-- prix du produit par rapport a la quantité choisie --}}
                    <div class="text-xl font-bold text-gray-500 ">
                        12.000fc
                    </div>
                </div>
            </div>
            {{-- corbeil pour effacer --}}
            <div class="flex items-center justify-center ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500 cursor-pointer hover:text-red-500">
                    <path stroke-linecap="round" stroke-linejoin="round" class="" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>
                  
            </div>
        </div>
    </div>

    <div class="col-span-12 lg:col-span-3 lg:ml-2 mt-2 lg:mt-0  shadow-md">
        <div class="shadow-md">
            {{-- nombre total produit --}}
            <div class="flex justify-between bg-white px-5 pt-7">
                <h1 class="text-gray-500">Nombre produits :</h1>
                <span class="text-gray-500 shadow-md px-1">3</span>
            </div>
            {{-- prix total produit --}}
            <div class="flex justify-between bg-white px-5 pt-3">
                <h1 class="text-gray-500">Prix Total :</h1>
                <span class="text-gray-500 shadow-md px-1">26.000FC</span>
            </div>
            {{-- frais livraison --}}
            <div class="flex justify-between bg-white px-5 pt-3">
                <h1 class="text-gray-500">Frais livraison  :</h1>
                <span class="text-gray-500 shadow-md px-1">2.000FC</span>
            </div>
            {{-- bouton pour passer la commande --}}
            <div class="bg-white p-6 flex justify-center">
                <button class="text-white text-sm bg-yellow-400 p-2 pointer font-bold hover:bg-yellow-500">Passer la commande</button>
            </div>

        </div>
    </div>
</div>
