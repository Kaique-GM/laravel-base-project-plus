<footer class="w-full border-t border-zinc-800 bg-zinc-950">
    <div class="max-w-screen-2xl mx-auto px-5 md:px-16 lg:px-5 xl:px-16 pb-6 pt-10 flex flex-col justify-center items-center">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-full pb-6 gap-6">
            <div class="flex flex-col justify-center md:items-start gap-5">
                <img src="{{ asset('images/pixel.gif') }}" alt="GIF Kaique-Gm" loading="lazy" decoding="async" draggable="false" class="max-w-16">
                <p class="text-zinc-300 leading-5 text-lg">
                    Este é o projeto base que será <br> usado como template para criar <br> novos projetos.
                </p>
            </div>
            <div
                class="font-bold text-zinc-300  text-2xl flex justify-start md:justify-center items-start md:items-center">
                <a href="#" class="flex justify-center items-center gap-2 hover:text-zinc-500 duration-300">
                    <div class="hidden md:block">
                        <i class="fas fa-chevron-up"></i>
                    </div>
                    <span>
                        Retornar ao topo
                    </span>
                    <div class="block md:hidden">
                        <i class="fas fa-chevron-up"></i>
                    </div>
                </a>
            </div>
            <div class="flex flex-col md:flex-row gap-5 md:gap-16 justify-end md:justify-between lg:justify-end items-start md:col-span-2 lg:col-span-1">
                <div class="text-white flex flex-col gap-4">
                    <h6 class="text-2xl font-bold">Redes Sociais</h6>
                    <div class="flex gap-2">
                        <a href="" rel="noopener noreferrer" target="_blank"
                            class="text-3xl rounded-full flex justify-center items-center w-12 h-12 p-2 bg-zinc-500 hover:scale-110 duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="" rel="noopener noreferrer" target="_blank"
                            class="text-3xl rounded-full flex justify-center items-center w-12 h-12 p-2 bg-zinc-500 hover:scale-110 duration-300">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="" rel="noopener noreferrer" target="_blank"
                            class="text-3xl rounded-full flex justify-center items-center w-12 h-12 p-2 bg-zinc-500 hover:scale-110 duration-300">
                            <i class="far fa-envelope"></i>
                        </a>
                    </div>
                </div>
                <div class="text-white flex flex-col gap-4">
                    <h6 class="text-2xl font-bold">Navegação</h6>
                    <ul class="text-zinc-300 flex flex-col gap-2 text-lg">
                        <li><a href="#sobre" class="hover:text-white duration-300">Sobre</a></li>
                        <li><a href="#produtos" class="hover:text-white duration-300">Produtos</a></li>
                        <li><a href="#diferenciais" class="hover:text-white duration-300">Diferenciais</a></li>
                        <li><a href="#contato" class="hover:text-white duration-300">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-full pt-6 text-center text-brand-gray_1 text-lg flex flex-col lg:flex-row gap-3 justify-center items-center border-t-2 border-[#464646]">
            <span>© {{ date('Y') }} Todos os direitos reservados Projeto Base. Desenvolvido por <a
                    href="https://kaique-gm.github.io/" rel="noopener noreferrer" target="_blank"
                    class="inline-block font-bold hover:scale-95 duration-300 hover:text-white">Kaique
                    Mattos</a>.
            </span>
            <img src="{{ asset('images/pixel.gif') }}" alt="PixelArt" loading="lazy" decoding="async" draggable="false" class="max-w-8">
        </div>
    </div>
</footer>