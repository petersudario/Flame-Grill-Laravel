<!DOCTYPE html>
<html lang="ptBR">
    
    @component('components.navbar')
    
    @endcomponent
    
    <style> @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@100&display=swap'); </style>
    <div class="bg-no-repeat p-4 bg-cover md:bg-center xl:bg-center sm:bg-center w-full shadow-2xl" style="background-image: url('{{asset('/img/pizzaCardapio.jpg')}}')">
        <div class="max-w-4xl min-w-xl grid gap-4 xs:grid-cols-1 xs:w-full md:grid-cols-1 sm:grid-cols-1 lg:grid-cols-0 h-[300px]"></div>
    </div>
<body>
    <section style="background-image: url('{{asset('/img/bege.jpg')}}')" class="h-full w-full">
        <div class="flex"><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /></div>
        <div class="h-[100px]"></div>

        <div class="w-full h-full flex col-1 gap-[80px] justify-center">
            <div class="w-[600px] grid col col-4">
                <div class="grid col-2 gap-6">
                    <div>
                        <h1 class="text-6xl font-['Kanit'] font-bold text-center"> CARDÁPIO </h1>
                    </div>
                    <div class="h-[30px]"></div>
                    <div class="grid sm:grid-cols-3 xs:grid-cols-1 gap-8 text-xl text-center">
                        <div>
                            <h1>MÉDIA | 6 FATIAS</h1>
                        </div>
                        <div >
                            <h1>GRANDE | 12 FATIAS</h1>
                        </div>
                        <div>
                            <h1>GIGANTE | 24 FATIAS</h1>
                        </div>
                    </div>
                    <div class="h-[30px]"></div>
                    <div>
                        <h1 class="font-['Kanit'] text-3xl font-semibold text-center"> PIZZAS TRADICIONAIS </h1>
                    </div>
                </div>
                <div class="h-[30px]"></div>

                
                <div class="flex grid-cols-2 text-lg justify-center">
                    <div class="sm:w-[200px] xs:w-[50px] flex justify-center">
                        <ul>
                            <li class="m-[10px]"><h1 class="font-['Kanit'] font-bold "><h1>Calabresa</h1><p class="mt-10[px] text-gray-600">Lorem ipsum</p></li>
                            <li class="m-[10px]"><h1 class="font-['Kanit'] font-bold "><h1>Frango</h1><p class="mt-10[px] text-gray-600">Lorem ipsum</p></li>
                            <li class="m-[10px]"><h1 class="font-['Kanit'] font-bold "><h1>Napolitana</h1><p class="mt-10[px] text-gray-600">Lorem ipsum</p></li>
                        </ul>
                    </div>
                    <div class="w-[1px] ml-[95px] mr-[95px] bg-black"></div>
                    <div class="sm:w-[200px] xs:w-[50px] flex justify-center">
                        <ul>
                            <li class="m-[10px]"><h1 class="font-['Kanit'] font-bold "><h1>Mussarela</h1><p class="mt-10[px] text-gray-600">Lorem ipsum</p></li>
                            <li class="m-[10px]"><h1 class="font-['Kanit'] font-bold "><h1>Romana</h1><p class="mt-10[px] text-gray-600">Lorem ipsum</p></li>
                            <li class="m-[10px]"><h1 class="font-['Kanit'] font-bold "><h1>Marguerita</h1><p class="mt-10[px] text-gray-600">Lorem ipsum</p></li>
                            <li class="m-[10px]"><h1 class="font-['Kanit'] font-bold "><h1>4 Queijos</h1><p class="mt-10[px] text-gray-600">Lorem ipsum</p></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="h-[100px]"></div>
                <div>
                    <h1 class="font-['Kanit'] text-3xl font-semibold text-center"> PIZZAS ESPECIAIS </h1>
                </div>
                <div class="h-[30px]"></div>
                
                <div class="flex col-3 text-lg justify-center">
                    <div class="sm:w-[200px] xs:w-[50px] flex justify-center">
                        <ul>
                            <li class="m-[10px]"><h1 class="font-['Kanit'] font-bold "><h1>Frango c/ Catupiry</h1><p class="mt-10[px] text-gray-600">Lorem ipsum</p></li>
                            <li class="m-[10px]"><h1 class="font-['Kanit'] font-bold "><h1>5 Queijos</h1><p class="mt-10[px] text-gray-600">Lorem ipsum</p></li>
                            <li class="m-[10px]"><h1 class="font-['Kanit'] font-bold "><h1>Atum</h1><p class="mt-10[px] text-gray-600">Lorem ipsum</p></li>
                            <li class="m-[10px]"><h1 class="font-['Kanit'] font-bold "><h1>Lombo</h1><p class="mt-10[px] text-gray-600">Lorem ipsum</p></li>
                            
                        </ul>
                    </div>
                    <div class="w-[1px] ml-[95px] mr-[95px] bg-black"></div>
                    <div class="sm:w-[200px] xs:w-[50px] flex justify-center">
                        <ul>
                            <li class="m-[10px]"><h1 class="font-['Kanit'] font-bold "><h1>Portuguesa</h1><p class="mt-10[px] text-gray-600">Lorem ipsum</p></li>
                            <li class="m-[10px]"><h1 class="font-['Kanit'] font-bold "><h1>Champignon c/ palmito</h1><p class="mt-10[px] text-gray-600">Lorem ipsum</p></li>
                            <li class="m-[10px]"><h1 class="font-['Kanit'] font-bold "><h1>Pepperoni</h1><p class="mt-10[px] text-gray-600">Lorem ipsum</p></li>
                            <li class="m-[10px]"><h1 class="font-['Kanit'] font-bold "><h1>Bacon</h1><p class="mt-10[px] text-gray-600">Lorem ipsum</p></li>
                        </ul>
                    </div>
                </div>
                <div class="h-[100px]"></div>
                <div>
                    <h1 class="font-['Kanit'] text-3xl font-semibold text-center"> CALZONES </h1>
                </div>
                <div class="h-[30px]"></div>
                
                <div class="flex col-3 text-lg justify-center">
                    <div class="sm:w-[200px] xs:w-[50px] flex justify-center">
                        <ul>
                            <li class="m-[10px]"><h1 class="font-['Kanit'] font-bold "><h1>Frango</h1><p class="mt-10[px] text-gray-600">Lorem ipsum</p></li>
                            <li class="m-[10px]"><h1 class="font-['Kanit'] font-bold "><h1>Frango e Champignon</h1><p class="mt-10[px] text-gray-600">Lorem ipsum</p></li>
                            
                        </ul>
                    </div>
                    <div class="w-[1px] ml-[95px] mr-[95px] bg-black"></div>
                    <div class="sm:w-[200px] xs:w-[50px] flex justify-center">
                        <ul>
                            <li class="m-[10px]"><h1 class="font-['Kanit'] font-bold "><h1>4 Queijos</h1><p class="mt-10[px] text-gray-600">Lorem ipsum</p></li>
                            <li class="m-[10px]"><h1 class="font-['Kanit'] font-bold "><h1>Lombo e Champignon</h1><p class="mt-10[px] text-gray-600">Lorem ipsum</p></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="h-[100px]"></div>
                <div>
                    <h1 class="font-['Kanit'] text-3xl font-semibold text-center"> LASANHAS </h1>
                </div>
                <div class="h-[30px]"></div>
                
                <div class="flex col-3 text-lg justify-center">
                    <div class="sm:w-[200px] xs:w-[50px] flex justify-center">
                        <ul class="w-[197px]">
                            <li class="m-[10px]"><h1 class="font-['Kanit'] font-bold "><h1>Frango</h1><p class="mt-10[px] text-gray-600">Lorem ipsum</p></li>
                            
                        </ul>
                    </div>
                    <div class="w-[1px] ml-[95px] mr-[95px] bg-black"></div>
                    <div class="sm:w-[200px] xs:w-[50px] flex justify-center">
                        <ul class="w-[197px]">
                            <li class="m-[10px]"><h1 class="font-['Kanit'] font-bold "><h1>Bolonhesa</h1><p class="mt-10[px] text-gray-600">Lorem ipsum</p></li>
                            <li class="m-[10px]"><h1 class="font-['Kanit'] font-bold "><h1>Presunto</h1><p class="mt-10[px] text-gray-600">Lorem ipsum</p></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-[100px]"></div>
        <div class="flex"><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /><x-antdesign-line-o style="width: 48px" /></div>
    </section>
</body>
@component('components.footer')
@endcomponent