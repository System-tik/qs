<div class="mx-2 bg-white lg:mx-32">
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="grid-cols-12 gap-4 lg:grid pb-3 sm:pb-14 ">
        <div class="col-span-5  ">
            <div class="px-10 sm:px-16 md:px-32 lg:px-0">
                {{-- image en gras du produit --}}
                <div class="border-b-2 border-gray-300 px-10 lg:px-0 sm:mx-4">
                    <img src="{{asset('images/pomme-de-terre-1.jpg')}}" alt="" srcset="" class=" ">
                </div>
                {{-- le nom du produit qui ne s'affiche que quand c'est inferieur a lg --}}
                <h1 class="flex justify-center py-2 text-xl text-yellow-500 lg:hidden sm:text-4xl">
                    Pomme de terre
                </h1>
                <div class="flex flex-col items-center ">
                    {{-- description du produit qui ne s'affiche que quand c'est inferieur a lg --}}
                    <span class="flex justify-center  text-xs mx-3 text-gray-500 lg:hidden">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea similique hic ratione sed quos beatae explicabo laudantium fugiat architecto a possimus in, totam nesciunt sunt autem accusamus o autem eius quam voluptates quis rem dolores nostrum similique consectetur totam quidem inventore perspiciatis numquam aliquam sint?
                    </span>
                    {{-- prix du produit seulement quand c'est inferieur a lg --}}
                    <div class="flex p-2 my-4 text-xs h-5 sm:h-6 items-center font-bold text-white sm:text-xl w-38 lg:hidden " style="background-color:#d91200">
                        <h1>1 kg vaut :</h1>
                        <label for="" class="ml-2">5.000fc</label>
                    </div>
                </div>
                
            </div>
                
                {{--categorie et nombre produit visible seulement quand c'est inferieur a lg--}}     
                <div class="grid grid-cols-12 pl-3 lg:hidden sm:px-10 md:px-24">
                    <div class="col-span-3">
                        <h1 class="py-3 text-xs sm:text-sm text-gray-500">
                            Categorie :
                        </h1>
                        <h2 class="py-2 text-xs text-gray-500">
                            Nombre produit
                        </h2>
                    </div>
                    <div class="col-span-9">
                        <div class="py-3 text-xs sm:text-sm font-bold text-yellow-500">
                            Legume 
                        </div>
                        <div class="flex justify-between py-2">
                            <div class="grid grid-cols-2 gap-2">
                                <img src="{{asset('images/pomme-de-terre-1.jpg')}}" alt="" class="w-10">
                                <h1 class="text-sm font-bold text-gray-500">1#</h1>
                            </div>
                            <div class="grid grid-cols-3 gap-5">
                                <div class="text-sm font-bold text-gray-500 ">
                                    5.000fc
                                </div>
                                <div class="grid grid-cols-4 col-span-2">
                                    <div class="flex justify-center text-sm font-bold text-white border-2 border-gray-300 cursor-pointer " style="background-color:#d91200">
                                        -
                                    </div>
                                    <div class="flex justify-center text-sm font-bold text-gray-500 border-2 border-gray-300 cursor-pointer hover:scale-100 hover:bg-gray-100">
                                        0
                                    </div>
                                    <div class="flex justify-center text-sm font-bold text-gray-500 border-2 border-gray-300 cursor-pointer hover:scale-100 hover:bg-gray-100 ">
                                        +
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            {{-- image de meme categorie que le produit --}}
            <div class="grid grid-cols-4 gap-1 m-1  m:m-3 lg:mt-1 sm:grid-cols-5 md:px-24 lg:px-0 ">
                <img src="{{asset('images/Aubergines.jpg')}}" alt="" class="w-40 border-r-2 border-gray-300 h-20 sm:h-24 cursor-pointer hover:scale-110">
                <img src="{{asset('images/poire.jpeg')}}" alt="" class="w-40 border-r-2 border-gray-300 h-20 sm:h-24 cursor-pointer hover:scale-110">
                <img src="{{asset('images/Choux.png')}}" alt="" class="w-40 border-r-2 border-gray-300 h-20 sm:h-24 cursor-pointer hover:scale-110">
                <img src="{{asset('images/mandarine.jpeg')}}" alt="" class="w-40 border-r-2 border-gray-300 h-20 sm:h-24 cursor-pointer hover:scale-110">
                <img src="{{asset('images/Patate-1kg.jpg')}}" alt="" class="hidden w-40 h-24 sm:grid cursor-pointer hover:scale-110">
            </div>
        </div>
        {{-- nom , description et quantite du produit qui ne sont visible que quand c'est lg ou plus --}}
        <div class="hidden col-span-7 px-16 lg:grid">
            <div class="">
                <h1 class="py-2 text-2xl text-yellow-500">
                    Pomme de terre
                </h1>
                <span class="text-gray-500 text-md ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea similique hic ratione sed quos beatae explicabo laudantium fugiat architecto a possimus in, totam nesciunt sunt autem accusamus obcaecati. Modi, deleniti.
                    Lorem ipsum dolor, sit amet conse elit. Vitae odit distinctio accusantium eligendi, autem eius quam voluptates quis rem dolores nostrum similique consectetur totam quidem inventore perspiciatis numquam aliquam sint?
                </span>
            </div>
            <div class="flex justify-center py-3 my-4 border-b-2 border-gray-300">
                <div class="flex h-6 p-2 text-md font-bold text-white  items-center" style="background-color:#d91200">
                    <h1>1 kg vaut :</h1>
                    <label for="" class="ml-2">5.000fc</label>
                </div>
            </div>
            <div class="grid grid-cols-12">
                <div class="col-span-3">
                    <h1 class="py-3 text-md text-gray-500">
                        Categorie :
                    </h1>
                    <h2 class="py-2 text-sm text-gray-500">
                        Nombre produit
                    </h2>
                </div>
                <div class="col-span-9">
                    <div class="py-3 text-md font-bold text-yellow-500">
                        Legume 
                    </div>
                    <div class="flex justify-between py-2">
                        <div class="grid grid-cols-2 gap-2">
                            <img src="{{asset('images/pomme-de-terre-1.jpg')}}" alt="" class="w-10 ">
                            <h1 class="text-md font-bold text-gray-500">1#</h1>
                        </div>
                        <div class="grid grid-cols-3 gap-5">
                            <div class="text-md font-bold text-gray-500 ">
                                5.000fc
                            </div>
                            <div class="grid grid-cols-4 col-span-2">
                                <div class="flex justify-center text-md font-bold text-white border-2 border-gray-300 cursor-pointer " style="background-color:#d91200">
                                    -
                                </div>
                                <div class="flex justify-center text-md font-bold text-gray-500 border-2 border-gray-300 cursor-pointer hover:scale-100 hover:bg-gray-100 ">
                                    0
                                </div>
                                <div class="flex justify-center text-md font-bold text-gray-500 border-2 border-gray-300 cursor-pointer hover:scale-100 hover:bg-gray-100 ">
                                    +
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 lg:gap-5 lg:p-10 border-t-4 border-gray-100">
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
        <div class="hidden sm:grid ">
            <livewire:client.components.c-produit>
        </div>
        <div class="hidden sm:grid">
            <livewire:client.components.c-produit>
        </div>
        <div class="hidden md:grid">
            <livewire:client.components.c-produit>
        </div>
        <div class="hidden md:grid">
            <livewire:client.components.c-produit>
        </div>
        <div class="hidden lg:grid">
            <livewire:client.components.c-produit>
        </div>
        <div class="hidden lg:grid">
            <livewire:client.components.c-produit>
        </div>
    </div>
</div>
