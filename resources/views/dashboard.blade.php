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
        <b class="bg-amber-700"></b>
        
        <div class="flex w-full">
            
            <!-- component -->
            <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
            <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />

            <!-- page -->
            <main class="flex flex-col w-full bg-white text-gray-700" x-data="layout">
                <!-- header page -->
                <header class="flex w-full items-center justify-between border-b-2 border-gray-200 p-2">
                    <!-- logo -->
                    <div class="flex items-center space-x-2">
                        <button type="button" class="text-3xl" @click="asideOpen = !asideOpen" style="color:#d91200"><i class="bx bx-menu"></i></button>
                        <div class="text-2xl font-bold" style="color:#d91200">Quisine</div>
                    </div>

                    <!-- other side header -->
                    <div class="flex flex-row">
                        <!-- notification icone -->
                        <div class="flex mr-4 mt-1 cursor-pointer" style="color: #d91200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </div>
                        <!-- btn profile -->
                        <button type="button" @click="profileOpen = !profileOpen" @click.outside="profileOpen = false"
                            class="h-9 w-9 overflow-hidden rounded-full">
                            <img src="{{ asset('images/profil1.jpeg') }}" alt="plchldr.co" />
                        </button>

                        <!-- dropdown profile -->
                        <div class="absolute right-2 mt-1 w-48 divide-y divide-gray-200 rounded-md border border-gray-200 bg-white shadow-md"
                            x-show="profileOpen" x-transition>
                            <div class="flex items-center space-x-2 p-2">
                                <img src="{{ asset('images/profil1.jpeg') }}" alt="plchldr.co" class="h-9 w-9 rounded-full" />
                                <div class="font-medium">Joel Kan</div>
                            </div>

                            <div class="flex flex-col space-y-3 p-2">
                                <a href="#" class="transition hover:text-red-700">Profil</a>
                                <a href="#" class="transition hover:text-red-700">Parametres</a>
                            </div>

                            <div class="p-2">
                                <button class="flex items-center space-x-2 transition hover:text-red-700">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                        </path>
                                    </svg>
                                    <div>Se deconnecter</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="flex">
                    <!-- sidenav -->
                    <aside class="text-white flex w-72 flex-col space-y-2 border-r-2 border-gray-200 bg-white p-2" style="height: 90.5vh;background-color:#d91200"
                        x-show="asideOpen">
                        <div class="flex flex-col items-center space-x-2 py-10">
                            <img src="{{ asset('images/profil1.jpeg') }}" alt="" class="h-9 w-9 rounded-full" />
                            <div class="font-medium">Joel Kan</div>
                        </div>
                        <a href="#" class="flex items-center space-x-1 rounded-md px-2 hover:bg-gray-100 hover:text-red-800">
                            <span class="text-2xl"><i class="bx bx-home"></i></span>
                            <span>Dashboard</span>
                        </a>
                        <a href="#" class="flex items-center space-x-1 rounded-md px-2 hover:bg-gray-100 hover:text-red-800">
                            <span class="text-2xl"><i class="bx bx-cart"></i></span>
                            <span>Produit</span>
                        </a>
                        <a href="#" class="flex items-center space-x-1 rounded-md px-2 hover:bg-gray-100 hover:text-red-800">
                            <span class="text-2xl"><i class="bx bx-shopping-bag"></i></span>
                            <span>Commande</span>
                        </a>
                        <a href="#" class="flex items-center space-x-1 rounded-md px-2 hover:bg-gray-100 hover:text-red-800">
                            <span class="text-2xl"><i class="bx bx-shopping-bag"></i></span>
                            <span>Shopping</span>
                        </a>
                        <a href="#" class="flex items-center space-x-1 rounded-md px-2 hover:bg-gray-100 hover:text-red-800">
                            <span class="text-2xl"><i class="bx bx-shopping-bag"></i></span>
                            <span>Fournisseur</span>
                        </a>
                    </aside>

                    <!-- main content page -->
                    <div class="w-full p-4 bg-white">
                        {{-- Dash space --}}
                        <div class="basis-4/5">
                            {{-- <livewire:admin.v-produit> --}}
                            {{-- <livewire:admin.v-dash> --}}
                            {{-- <livewire:admin.v-fournisseur> --}}
                            {{-- <livewire:admin.v-commande> --}}
                                <livewire:admin.v-shopping>
                        </div>
                    </div>
                </div>
            </main>

            <script>
                document.addEventListener("alpine:init", () => {
                    Alpine.data("layout", () => ({
                        profileOpen: false,
                        asideOpen: true,
                    }));
                });
            </script>
            
        </div>

    </div>
</x-app-layout>
