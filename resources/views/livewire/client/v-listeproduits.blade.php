<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    {{-- les differentes categories --}}
    <div class="grid grid-cols-2 gap-1 p-2 md:p-5 md:gap-2 lg:gap-5 lg:mx-10 lg:grid-cols-4">
        <livewire:client.components.c-catpro>
        <livewire:client.components.c-catpro>
        <livewire:client.components.c-catpro>
        <livewire:client.components.c-catpro>
    </div>

    {{-- premiere categorie et ses differents produits --}}
   <div class="bg-white rounded-lg lg:mx-14">
        <div class="flex justify-between p-1 mx-1 border-b-2 border-gray-200 lg:mx-5 lg:p-3">
            <div class="">
                <h1 class="text-sm text-gray-400 lg:text-2xl">
                    Poisson et fruits de mer
                </h1>
            </div>
            <div class="flex items-center justify-center ">
                <div class="hidden pr-2 ml-64 text-sm text-yellow-500 md:grid">
                    <h3>Poisson et fruits de mer</h3>
                </div>
                <a href="#" class="pl-2 text-sm text-gray-600 border-l-2 border-gray-300 animate-pulse">Voir plus >></a>
            </div>
        </div>
       <div class="gap-1 p-2 md:p-4 md:grid md:grid-cols-6 md:w-full ">
            <div class="h-full col-span-2 bg-cover " >
                <livewire:client.components.c-catpro>
            </div>
            <div class="col-span-4">
                    <div class="flex flex-col grid-cols-3 gap-1 lg:grid-cols-4 items md:grid">
                        <div class="">
                            <livewire:client.components.c-produit>
                        </div>
                        <div class="">
                            <livewire:client.components.c-produit>
                        </div>
                        <div class="">
                            <livewire:client.components.c-produit>
                        </div>
                        <div class="hidden lg:grid">
                            <livewire:client.components.c-produit>
                        </div>
                        
                    </div>
            </div>
       </div>
   </div>

   {{-- deuxieme categorie et ses differents produits --}} 
   <div class="mt-4 bg-white rounded-lg lg:mx-14">
        
    </div> 
   
</div>
