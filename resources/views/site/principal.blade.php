<!DOCTYPE html>
<html lang="ptBR">

<head>
    @component('components.navbar')
        
    @endcomponent

</head>
<body>
    <section>
        <div class="bg-no-repeat p-4 bg-cover md:bg-center xl:bg-center sm:bg-center w-full" style="background-image: url('{{asset('/img/restaurant-interior.jpg')}}')" >
            <div class="max-w-4xl min-w-xl grid gap-4 xs:grid-cols-1 xs:w-full md:grid-cols-1 sm:grid-cols-1 lg:grid-cols-0">
                <div class="flex">
                    <div class="pt-40 pb-40 pl-[30px] pr-[30px] md:pl-10 md:pr-40 sm:pl-5 sm:pr-40 xs:pl-[30px] xs:pr-[30px]">
                        <div>
                            <h1 style="text-shadow: 1px 1px 7px #151212" class="text-3xl lg:text-4xl xs:text-3xl text-justify tracking-tight text-white font-serif">    Churrascaria, Pizzaria, Buffet livre, rodízio, refrigerantes, vinhos e espumantes.</h1>
                                <br>
                            <h2 style="text-shadow: 1px 1px 7px #151212" class="text-white text-justify tracking-tight lg:text-base xs:text-sm ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <div class="flex justify-center relative bottom-[60px] w-full">
        <div class="flex mx-[100px]">
            <div class="bg-red-600 xl:w-[400px] xl:h-[250px] xl:p-[20px] lg:w-[200px] lg:h-[300px] lg:p-[20px] text-center text-white">
                <a class="flex justify-center"> 
                    <x-iconpark-birthdaycake-o style="width: 48px;"/>
                </a>
                <h1 class="text-xl font-serif">Aniversariante</h1>
                <br>
                <P class="font-mono">Aniversariantes com dois ou mais acompanhantes, não pagam.</P>
            </div>
            <div class="bg-red-800 xl:w-[400px] xl:h-[250px] xl:p-[20px] lg:w-[200px] lg:h-[300px] lg:p-[20px] text-center text-white">
                <a class="flex justify-center"> 
                    <x-iconpark-babytaste-o style="width: 48px;"/>
                </a>
                <h1 class="text-xl font-serif">Crianças</h1>
                <br>
                <p class="font-mono">Crianças com até 5 anos de idade não pagam.</p>
                <p class="font-mono">Espaço kids liberado até 12 anos de idade.</P>
            </div>
            <div class="bg-red-600 xl:w-[400px] xl:h-[250px] xl:p-[20px] lg:w-[200px] lg:h-[300px] lg:p-[20px] text-center text-white">
                <a class="flex justify-center"> 
                    <x-iconpark-knifefork-o style="width: 48px"/>
                </a>
                <h1 class="text-xl font-serif">Buffet Livre</h1>
                <br>
                <P class="font-mono">Buffet livre para pizzas, massas e comida de pratos tradicionais.</P>
            </div>

        </div>
    </div>
</body>





