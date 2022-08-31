<div class="w-full">
        {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="flex flex-col p-8 bg-white lg:flex-row lg:justify-between ">
        <div class="flex flex-col md:flex-row ">
            {{-- image logo --}}
            <div class="flex justify-center">
                <img src="{{asset('images/a.png')}}" alt="">
            </div>
            {{-- barre de recherche --}}
            <div class="pl-6 mt-6">
                <input type="search" name="" id="" class="w-11/12 h-8 text-xs border-gray-300 rounded-lg md:w-96 lg:w-60 bg-gray-50" placeholder="Recherche des produits">
            </div>
        </div>
        <div class="">
            <div class="hidden grid-cols-2 lg:gap-3 lg:grid">
                <div class="w-8 p-1 bg-teal-200 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" class="text-gray-600" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
                
                <div class="w-8 p-1 bg-red-200 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" class="text-gray-600" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                      </svg>
                </div>
            </div>
        </div>
    </div>

    
    <div class="hidden w-full p-2 lg:flex" style="background-color: #d91200 ">
        <div class="flex p-2 ml-12 rounded-full ">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" class="text-white" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <span class="pl-2 text-white">Nos catégories</span>
        </div>
        <div class="flex items-center ml-32 ">
            <div class="mr-12 text-white">
                <a href="#" class="">Accueil</a>
            </div>
            <div class="mr-12 text-white">
                <a href="#">Creation compte</a>
            </div>
            <div class="mr-12 text-white">
                <a href="#">Connexion</a>
            </div>
            <div class="mr-12 text-white">
                <a href="#">Panier</a>
            </div>
            <div class="mr-12 text-white">
                <a href="#">Profil</a>
            </div>
        </div>
    </div>

</div>