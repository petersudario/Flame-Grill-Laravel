<!DOCTYPE html>
<html lang="ptBR">
    @component('components.navbar')
    
    @endcomponent
    <style> @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@100&display=swap'); </style>

    <div class="bg-no-repeat p-4 bg-cover md:bg-center xl:bg-center sm:bg-center h-full] flex justify-center" style="background-image: url('{{asset('/img/pizzaWall.jpg')}}')" >
        <div class="max-w-4xl min-w-xl grid gap-4 xs:grid-cols-1 xs:w-full md:grid-cols-1 sm:grid-cols-1 lg:grid-cols-1">
            <div class="flex">
                <div class="pt-40 pb-40 pl-[30px] pr-[30px] md:pl-10 md:pr-40 sm:pl-5 sm:pr-40 xs:pl-[30px] xs:pr-[30px]">
                    <div>
                        <h1 style="text-shadow: 1px 1px 7px #151212" class="text-3xl lg:text-4xl xs:text-3xl text-justify tracking-tight text-white font-['Kanit'] font-medium">Formulário</h1>
                        <br>
                        <p style="text-shadow: 1px 1px 7px #151212" class="text-white text-justify tracking-tight lg:text-xl xs:text-sm font-['Kanit'] font-medium">Favor entrar em contato para qualquer dúvida, reclamação ou sugestão, preenchendo o formulário abaixo com suas informações de contato e o assunto abordado.</p>
                        <form class="text-white px-4 my-10 max-w-3xl mx-auto space-y-6" action={{ route('site.contato') }} method="POST">
                            <div class="grid 2xs:grid-cols-2 gap-4">
                                <div>
                                    <label class="text-xl font-['Kanit'] font-medium" for="nome" style="text-shadow: 1px 1px 7px #151212 ">Nome completo *</label>
                                    <input class="border border-gray-400 py-2  px-4 w-full rounded focus:outline-none text-black" type="text" name="nome" required>
                                </div>
                                <div>
                                    <label class="text-xl font-['Kanit'] font-medium" for="telefone" style="text-shadow: 1px 1px 7px #151212">Telefone *</label>
                                    <input class="border border-gray-400 py-2  px-4 w-full rounded focus:outline-none text-black" type="text" name="telefone" placeholder="Ex: +55 (41) 90000-0000" required>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 gap-4">
                                <div>
                                    <label class="text-xl font-['Kanit'] font-medium" for="email" style="text-shadow: 1px 1px 7px #151212">E-mail *</label>
                                    <input class="border border-gray-400 py-2  px-4 w-full rounded focus:outline-none text-black" type="text" name="email" placeholder="Ex: comida@gmail.com" required>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 gap-4">
                                <div>
                                    <label class="text-xl font-['Kanit'] font-medium" for="mensagem" style="text-shadow: 1px 1px 7px #151212">Escreva abaixo sua mensagem</label>
                                    <textarea class="border border-gray-400 py-2  px-4 w-full rounded focus:outline-none text-black" type="text" name="mensagem" required></textarea>
                                </div>
                            </div>
                            <input type="submit" class="bg-black text-white p-4 rounded-lg" style="cursor: pointer">	
                        </form>
                        <div class="flex justify-center gap-2 text-white">
                            <x-fab-whatsapp style="width: 20px" />
                            <p style="text-shadow: 1px 1px 7px #151212" class=" text-justify tracking-tight lg:text-xl xs:text-sm font-['Kanit'] font-medium">Entre em contato pelo WhatsApp: <a class="underline" href="#">+55 (00) 90000-0000  </a></p>
                        </div>
                        <br>
                        <div class="flex justify-center gap-2 text-white">
                            <x-fas-location-dot style="width: 20px" />
                            <p style="text-shadow: 1px 1px 7px #151212" class=" text-justify tracking-tight lg:text-xl xs:text-sm font-['Kanit'] font-medium">Endereço: <a class="underline" href="#">R. Lorem ipsum, nº0000 - Bairro, Cidade</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @component('components.footer')
    @endcomponent