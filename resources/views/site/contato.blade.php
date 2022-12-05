<!DOCTYPE html>
<html lang="ptBR">
    @component('components.navbar')
    
    @endcomponent
    <div class="bg-no-repeat p-4 bg-cover md:bg-center xl:bg-center sm:bg-center h-[800px] flex justify-center" style="background-image: url('{{asset('/img/pizzaWall.jpg')}}')" >
        <div class="max-w-4xl min-w-xl grid gap-4 xs:grid-cols-1 xs:w-full md:grid-cols-1 sm:grid-cols-1 lg:grid-cols-0">
            <div class="flex">
                <div class="pt-40 pb-40 pl-[30px] pr-[30px] md:pl-10 md:pr-40 sm:pl-5 sm:pr-40 xs:pl-[30px] xs:pr-[30px]">
                    <div>
                        <h1 style="text-shadow: 1px 1px 7px #151212" class="text-3xl lg:text-4xl xs:text-3xl text-justify tracking-tight text-white font-serif">    FORMULÁRIO</h1>
                            <br>
                        <h2 style="text-shadow: 1px 1px 7px #151212" class="text-white text-justify tracking-tight lg:text-xl xs:text-sm ">Favor entrar em contato para qualquer dúvida, reclamação ou sugestão, preenchendo o formulário abaixo.</h2>
                        <br><br>
                        <form>
                            <input class="w-[600px]" type="text" name="nome" placeholder="Nome completo">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @component('components.footer')
    @endcomponent