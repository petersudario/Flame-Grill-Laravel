<!DOCTYPE html>
<html lang="ptBR">

<head>
    <style> @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@100&display=swap'); </style>

    @component('components.navbar')
        
    @endcomponent

</head>
<body>
    <div class="bg-no-repeat p-4 bg-cover md:bg-center xl:bg-center sm:bg-center w-full shadow-2xl" style="background-image: url('{{asset('/img/restaurant-interior.jpg')}}')" >
        <div class="max-w-4xl min-w-xl grid gap-4 xs:grid-cols-1 xs:w-full md:grid-cols-1 sm:grid-cols-1 lg:grid-cols-0">
            <div class="flex">
                <div class="pt-40 pb-40 pl-[30px] pr-[30px] md:pl-10 md:pr-40 sm:pl-5 sm:pr-40 xs:pl-[30px] xs:pr-[30px]">
                    <div>
                        <h1 style="text-shadow: 1px 1px 7px #151212" class="text-3xl lg:text-4xl xs:text-3xl text-justify tracking-tight text-white font-['Kanit'] font-medium">    Pizzaria, Foccaceria, buffet livre, rodízio, refrigerantes, vinhos e espumantes.</h1>
                            <br>
                        <h2 style="text-shadow: 1px 1px 7px #151212" class="text-white text-justify tracking-tight lg:text-base xs:text-sm ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <div class="flex justify-center relative sm:bottom-[60px] w-full">
        <div class="grid sm:grid-cols-3 xs:grid-cols-1 sm:mx-[100px]">
            <div class="bg-red-600 xl:w-[400px] xl:h-[250px] xl:p-[20px] sm:w-[200px] sm:h-[300px] sm:p-[20px]  xs:p-[20px] text-center shadow-2xl  text-white">
                <a class="flex justify-center"> 
                    <x-iconpark-birthdaycake-o style="width: 48px;"/>
                </a>
                <h1 class="text-xl font-['Kanit'] font-medium">Aniversariante</h1>
                <br>
                <P class="font-mono">Aniversariantes com dois ou mais acompanhantes, não pagam.</P>
            </div>
            <div class="bg-red-800 xl:w-[400px] xl:h-[250px] xl:p-[20px] sm:w-[200px] sm:h-[300px] sm:p-[20px] xs:p-[20px] text-center shadow-2xl text-white">
                <a class="flex justify-center"> 
                    <x-iconpark-babytaste-o style="width: 48px;"/>
                </a>
                <h1 class="text-xl font-['Kanit'] font-medium">Crianças</h1>
                <br>
                <p class="font-mono">Crianças com até 5 anos de idade não pagam.</p>
                <p class="font-mono">Espaço kids liberado até 12 anos de idade.</P>
            </div>
            <div class="bg-red-600 xl:w-[400px] xl:h-[250px] xl:p-[20px] sm:w-[200px] sm:h-[300px] sm:p-[20px] xs:p-[20px] text-center shadow-2xl text-white">
                <a class="flex justify-center"> 
                    <x-iconpark-knifefork-o style="width: 48px"/>
                </a>
                <h1 class="text-xl font-['Kanit'] font-medium">Buffet Livre</h1>
                <br>
                <P class="font-mono">Buffet livre para pizzas, massas e comida de pratos tradicionais.</P>
            </div>
        </div>
    </div>
    <div class="flex justify-center w-full mb-[60px]">
        <div class="p-[20px]">
            <div class="h-full sm:p-[20px] xs:p-[20px] text-center text-xl w-full">
                <h1 class="text-4xl font-['Kanit'] font-medium">Almoço</h1>
                <br>
                <p>Buffet Livre, pratos tradicionais, foccaceria e bebidas.<br>
                    Segunda-Feira a Sexta-Feira: <strong>R$33,90</strong><br>
                    Sábado, Domingo e Feriados: <strong>R$63,90</strong>
                </p>
            </div>
        </div>
    </div>
    <div class="flex justify-center mb-[120px]">
        <div class="grid xl:grid-cols-4 lg:grid-cols-2 xs:grid-cols-2 md:gap-10 xs:gap-4">
            <div style="background-image: url('{{asset('/img/prato1.jpg')}}')" class="bg-center bg-no-repeat bg-cover md:w-[255px] md:h-[333px] xs:w-[140px] xs:h-[233px] 2xs:w-[180px] 2xs:h-[233px] text-center shadow-xl text-white">
            </div>
            <div style="background-image: url('{{asset('/img/prato2.jpg')}}')" class="bg-center bg-no-repeat bg-cover md:w-[255px] md:h-[333px] xs:w-[140px] xs:h-[233px] 2xs:w-[180px] 2xs:h-[233px] text-center shadow-xl text-white">
            </div>
            <div style="background-image: url('{{asset('/img/prato3.jpg')}}')" class="bg-center bg-no-repeat bg-cover md:w-[255px] md:h-[333px] xs:w-[140px] xs:h-[233px] 2xs:w-[180px] 2xs:h-[233px] text-center shadow-xl text-white">
            </div>
            <div style="background-image: url('{{asset('/img/prato4.jpg')}}')" class="bg-center bg-no-repeat bg-cover md:w-[255px] md:h-[333px] xs:w-[140px] xs:h-[233px] 2xs:w-[180px] 2xs:h-[233px] text-center shadow-xl text-white">
            </div>
        </div>
    </div>
    <div class="flex justify-center w-full mt-[30px] pb-[30px] bg-amber-50	">
        <div class="p-[20px]">
            <div class="h-full sm:p-[20px] xs:p-[20px] text-center text-black text-xl w-full">
                <h1 class="text-4xl font-['Kanit'] font-medium">Jantar</h1>
                <br>
                <p>Buffet Livre, pizzas, pratos tradicionais, foccaceria e bebidas.
                    <br>
                    Domingo a Quinta-Feira: <strong>$57,90</strong>
                    <br>
                    Sexta-Feira e Sábado: <strong>R$63,90</strong>
                </p>
            </div>
        </div>
    </div>
    <div class="flex justify-center pb-[120px] bg-amber-50">
        <div class="grid xl:grid-cols-4 lg:grid-cols-2 xs:grid-cols-2 md:gap-10 xs:gap-4">
            <div style="background-image: url('{{asset('/img/pizza.jpg')}}')" class="bg-center bg-no-repeat bg-cover md:w-[255px] md:h-[333px] xs:w-[140px] xs:h-[233px] 2xs:w-[180px] 2xs:h-[233px] text-center shadow-xl text-white">
            </div>
            <div style="background-image: url('{{asset('/img/frango.jpg')}}')" class="bg-center bg-no-repeat bg-cover md:w-[255px] md:h-[333px] xs:w-[140px] xs:h-[233px] 2xs:w-[180px] 2xs:h-[233px] text-center shadow-xl text-white">
            </div>
            <div style="background-image: url('{{asset('/img/macarrao.jpg')}}')" class="bg-center bg-no-repeat bg-cover md:w-[255px] md:h-[333px] xs:w-[140px] xs:h-[233px] 2xs:w-[180px] 2xs:h-[233px] text-center shadow-xl text-white">
            </div>
            <div style="background-image: url('{{asset('/img/sides.jpg')}}')" class="bg-center bg-no-repeat bg-cover md:w-[255px] md:h-[333px] xs:w-[140px] xs:h-[233px] 2xs:w-[180px] 2xs:h-[233px] text-center shadow-xl text-white">
            </div>
        </div>
    </div>
</body>



@component('components.footer')
        
@endcomponent

