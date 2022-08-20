<div class="mx-2 bg-white lg:mx-10">
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="grid-cols-12 gap-4 lg:grid pb-14">
        <div class="col-span-5 ">
            {{-- image en gras du produit --}}
            <div class="border-b-2 border-gray-300">
                <img src="{{asset('images/pomme-de-terre-1.jpg')}}" alt="" srcset="">
            </div>
            {{-- le nom du produit qui ne s'affiche que quand c'est inferieur a lg --}}
            <h1 class="flex justify-center py-2 text-xl text-yellow-500 lg:hidden sm:text-4xl">
                Pomme de terre
            </h1>
            <div class="flex flex-col items-center">
                {{-- description du produit qui ne s'affiche que quand c'est inferieur a lg --}}
                <span class="flex justify-center mx-3 text-gray-500 lg:hidden">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea similique hic ratione sed quos beatae explicabo laudantium fugiat architecto a possimus in, totam nesciunt sunt autem accusamus o autem eius quam voluptates quis rem dolores nostrum similique consectetur totam quidem inventore perspiciatis numquam aliquam sint?
                </span>
                {{-- prix du produit seulement quand c'est inferieur a lg --}}
                <div class="flex p-2 my-4 text-sm font-bold text-white sm:text-xl w-38 lg:hidden " style="background-color:#d91200">
                    <h1>1 kg vaut :</h1>
                    <label for="" class="ml-2">5.000fc</label>
                </div>

            </div>
            {{-- image de meme categorie que le produit --}}
            <div class="grid grid-cols-4 gap-1 mt-1 sm:grid-cols-5 ">
                <img src="{{asset('images/Aubergines.jpg')}}" alt="" class="w-40 border-r-2 border-gray-300 h-28">
                <img src="{{asset('images/poire.jpeg')}}" alt="" class="w-40 border-r-2 border-gray-300 h-28">
                <img src="{{asset('images/Choux.png')}}" alt="" class="w-40 border-r-2 border-gray-300 h-28">
                <img src="{{asset('images/mandarine.jpeg')}}" alt="" class="w-40 border-r-2 border-gray-300 h-28">
                <img src="{{asset('images/Patate-1kg.jpg')}}" alt="" class="hidden w-40 h-28 sm:grid">
            </div>
        </div>
        {{-- nom , description et quantite du produit qui ne sont visible que quand c'est lg ou plus --}}
        <div class="hidden col-span-7 px-5 lg:grid">
            <div class="">
                <h1 class="py-2 text-4xl text-yellow-500">
                    Pomme de terre
                </h1>
                <span class="text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea similique hic ratione sed quos beatae explicabo laudantium fugiat architecto a possimus in, totam nesciunt sunt autem accusamus obcaecati. Modi, deleniti.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae odit distinctio accusantium eligendi, autem eius quam voluptates quis rem dolores nostrum similique consectetur totam quidem inventore perspiciatis numquam aliquam sint?
                </span>
            </div>
            <div class="flex justify-center py-5 my-4 border-b-2 border-gray-300">
                <div class="flex h-12 p-2 text-2xl font-bold text-white w-60" style="background-color:#d91200">
                    <h1>1 kg vaut :</h1>
                    <label for="" class="ml-2">5.000fc</label>
                </div>
            </div>
            <div class="grid grid-cols-12">
                <div class="col-span-3">
                    <h1 class="py-3 text-xl text-gray-500">
                        Categorie :
                    </h1>
                    <h2 class="py-2 text-sm text-gray-500">
                        Nombre produit
                    </h2>
                </div>
                <div class="col-span-9">
                    <div class="py-3 text-xl font-bold text-yellow-500">
                        Legume 
                    </div>
                    <div class="flex justify-between py-2">
                        <div class="grid grid-cols-2 gap-2">
                            <img src="{{asset('images/pomme-de-terre-1.jpg')}}" alt="" class="w-10">
                            <h1 class="text-xl font-bold text-gray-500">1#</h1>
                        </div>
                        <div class="grid grid-cols-3 gap-5">
                            <div class="text-xl font-bold text-gray-500 ">
                                5.000fc
                            </div>
                            <div class="grid grid-cols-4 col-span-2">
                                <div class="flex justify-center text-xl font-bold text-white border-2 border-gray-300" style="background-color:#d91200">
                                    -
                                </div>
                                <div class="flex justify-center text-xl font-bold text-gray-500 border-2 border-gray-300 ">
                                    0
                                </div>
                                <div class="flex justify-center text-xl font-bold text-gray-500 border-2 border-gray-300 ">
                                    +
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-5 gap-5 p-10 border-t-4 border-gray-100">
        <div class="">
            <livewire:client.components.c-produit>
        </div>
        <div class="">
            <livewire:client.components.c-produit>
        </div>
        <div class="">
            <livewire:client.components.c-produit>
        </div>
        <div class="">
            <livewire:client.components.c-produit>
        </div>
        <div class="">
            <livewire:client.components.c-produit>
        </div>
        <div class="">
            <livewire:client.components.c-produit>
        </div>
        <div class="">
            <livewire:client.components.c-produit>
        </div>
        <div class="">
            <livewire:client.components.c-produit>
        </div>
        <div class="">
            <livewire:client.components.c-produit>
        </div>
        <div class="">
            <livewire:client.components.c-produit>
        </div>
    </div>
</div>
