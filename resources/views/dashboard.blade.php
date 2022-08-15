<x-app-layout>
   {{--  <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="flex flex-col">
        {{-- @livewire('navigation-menu') --}}
        <b class="bg-green-700"></b>
        <b class="bg-blue-700"></b>
        <b class="bg-yellow-700"></b>
        <div class="flex flex-row h-16 bg-red-700">
            <div class="basis-4/5 text-white p-4">
                <h3 class="font-bold text-lg">Quisine</h3>
            </div>
            <div class="basis-1/5 flex flex-row p-2">
                <div class="text-white p-2 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                </div>
                <div class="text-white p-2 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </div>
                <img src="{{ asset('images/profil1.jpeg') }}" alt="" class="rounded-full w-12 h-18 border-white border-solid border-2 cursor-pointer">
            </div>
        </div>
        <div class="flex flex-1">
            {{-- side nav --}}
            <div class="basis-1/5 bg-white px-24 p-5">
                {{--  --}}
                <div class="flex flex-col justify-center items-center">
                    <img src="{{ asset('images/profil1.jpeg') }}" alt="" class=" rounded-full w-14 h-14 border-white border-solid border-2">
                    <span class="text-sm">John Doe</span>
                    <span class="text-xs">Administrateur</span>
                </div>
                {{-- menu --}}
                <div class="flex flex-col py-10 text-sm">
                    <div class="flex px-4 cursor-pointer h-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span class="px-3">Dashboard</span>
                    </div>
                    <div class="flex px-4 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                        <span class="px-3">Produits</span>
                    </div>
                </div>
                
            </div>
            {{-- Dash space --}}
            <div class="basis-4/5 bg">
                <h2 class="text-3xl p-3">Dashboard</h2>
                <div class="flex text-white">
                    <livewire:admin.components.c-dashcard color="red">
                    <livewire:admin.components.c-dashcard color="green">
                    <livewire:admin.components.c-dashcard color="blue">
                    <livewire:admin.components.c-dashcard color="yellow">
                </div>

                {{-- crud produit --}}
                <div class="flex justify-between p-3 m-5 shadow-lg border-slate-600 rounded text-sm cursor-pointer hover:bg-slate-200">
                    <div class="basis-1/10">
                        Nom produit {{-- nom produit --}}
                    </div>
                    <div class="basis-1/10">
                        description {{-- nom produit --}}
                    </div>
                    <div class="basis-1/10">
                        Categorie {{-- nom produit --}}
                    </div>
                    <div class="basis-1/10">
                        0.5kg {{-- nom produit --}}
                    </div>
                    <div class="basis-1/10">
                        500 Fc {{-- nom produit --}}
                    </div>
                    <div class="basis-1/10">
                        Type produit {{-- nom produit --}}
                    </div>
                    <div class="basis-1/10">
                        <button type="submit" class="w-full flex justify-center px-4 text-sm rounded text-blue-700 border-solid border-2 border-blue-700  hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2">
                            Voir
                        </button>
                    </div>
                    <div class="basis-1/10">
                        <button type="submit" class="w-full flex justify-center px-4 text-sm rounded text-green-700 border-solid border-2 border-green-700  hover:bg-green-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2">
                            Creer
                        </button>
                    </div>
                    <div class="basis-1/10">
                        <button type="submit" class="w-full flex justify-center px-4 text-sm rounded text-yellow-700 border-solid border-2 border-yellow-700  hover:bg-yellow-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2">
                            Modifier
                        </button>
                    </div>
                    <div class="basis-1/10">
                        <button type="submit" class="w-full flex justify-center px-4 text-sm rounded text-red-700 border-solid border-2 border-red-700  hover:bg-red-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2">
                            Supprimer
                        </button>
                    </div>
                </div>
                <div class="text-center">
                    <a href="http://" class="hover:text-red-700">Afficher tout</a>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
