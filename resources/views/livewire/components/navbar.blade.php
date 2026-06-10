<nav class="w-full">
    <div class="max-w-screen-2xl mx-auto px-2 lg:px-16 py-5 flex flex-col justify-center items-center border-b border-zinc-800 bg-zinc-950">
        <div
            class="w-full px-6 py-2 flex flex-col md:flex-row items-center justify-between">
            <div class="flex justify-between items-center gap-3 mt-2 md:mt-0">
                <a href="/" class="flex text-white font-bold justify-center items-center gap-5 text-xl">
                    <img src="{{ asset('images/pixel.gif') }}" alt="GIF Kaique-Gm" draggable="false" class="max-h-16">

                    <p>Projeto Base</p>
                </a>

                <div class="md:hidden border-2 border-zinc-300 text-zinc-300 rounded-[10px] p-1">
                    <button id="mobile-menu-btn" aria-label="Abrir menu" aria-expanded="false" class="text-3xl">
                        <i class="fas fa-bars text-3xl cursor-pointer" aria-hidden="true"></i>
                    </button>
                </div>
            </div>

            <div id="mobile-menu"
                class="md:hidden overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-in-out w-full mt-4">
                <div class="flex flex-col gap-4 text-lg">
                    <a href="#sobre" class="hover:text-zinc-500">Sobre</a>
                    <a href="#produtos" class="hover:text-zinc-500">Produtos</a>
                    <a href="#diferenciais" class="hover:text-zinc-500">Diferenciais</a>
                    <a href="#contato" class="hover:text-zinc-500">Contato</a>
                </div>
            </div>

            <div class="hidden md:block">
                <div class="flex gap-6 text-lg text-zinc-300 justify-center items-center">
                    <a href="#sobre" class="hover:text-zinc-500 transition">Sobre</a>
                    <a href="#produtos" class="hover:text-zinc-500 transition">Produtos</a>
                    <a href="#diferenciais" class="hover:text-zinc-500 transition">Diferenciais</a>
                    <a href="#contato" class="hover:text-zinc-500 transition">Contato</a>
                </div>
            </div>
        </div>
    </div>
</nav>
