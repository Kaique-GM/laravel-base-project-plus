<div id="privacyModal" class="hidden fixed inset-0 z-50 bg-black/70 justify-center items-end pb-5 px-2">
    <div id="privacyModalContent"
        class="relative bg-zinc-950 rounded-[50px] px-6 pt-14 pb-5 flex flex-col justify-center items-center gap-4 border-zinc-800 border-x-8 border-b-12 border-t-5">

        <span class="absolute left-5 top-4 text-zinc-300 text-xl md:text-2xl">//</span>

        <span class="absolute right-5 bottom-4 text-zinc-300 text-xl md:text-2xl">//</span>

        <div class="absolute right-8 top-3">
            <img src="{{ asset('images/pixel.gif') }}" alt="LOGO" draggable="false"
                class="max-h-7 md:max-h-10">
        </div>

        <div class="flex flex-col gap-2 justify-center items-start border-b border-b-zinc-300 w-full pb-2">
            <h6 class="text-2xl md:text-[20px] text-zinc-300 font-bold">
                Uso de cookies
            </h6>
        </div>

        <div class="flex flex-col text-sm">
            <p class="text-zinc-300">
                USAMOS COOKIES PARA APRIMORAR SUA NAVEGAÇÃO. <br class="hidden md:block"> AO PERMANECER NO SITE,  VOCÊ ACEITA NOSSA POLÍTICA DE PRIVACIDADE. </p>
        </div>

        <button id="privacyButton"
            class="group h-10 flex justify-center items-center gap-2 text-zinc-300 font-semibold text-base lg:text-lg bg-zinc-900 hover:bg-zinc-800 rounded-[112px] border-zinc-800 hover:border-zinc-900 border-x-7 border-b-7 border-t-3 px-18 cursor-pointer hover:scale-110 transition duration-500">
            <span>ACEITAR</span>
        </button>
    </div>
</div>