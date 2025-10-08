<section id="about" class="w-full text-center content-center bg-white/80 dark:bg-slate-950/80 snap-start min-h-[calc(100vh)] bg-[url({{ asset('images/bg-wave-trans-flipped.svg') }})] dark:bg-[url({{ asset('images/bg-wave-dark-trans-flipped.svg') }})] bg-cover bg-no-repeat bg-top pt-75">
    <h2 class="text-4xl text-gray-900 dark:text-gray-100 font-bold mb-5">About Me</h2>
    <div class="max-w-5xl mx-auto flex p-5">
        <div class="flex-1 p-5 bg-white/80 text-left ">
            <p class="mb-2">I’m a Laravel App Developer with over 5 years of experience crafting custom web applications for clients.<p>
            <p class="mb-2">I focus on clean, functional UI design using TailwindCSS and Filament, following meticulous design and usability principles.</p>
            <p class="mb-2">By keeping third-party dependencies to a minimum, I ensure each application is secure, stable, and built entirely in-house for long-term reliability.</p>
            
            <a href="#contact" 
            class="inline-block px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl shadow-lg shadow-blue-600/30 transition">
                <x-heroicon-s-chat-bubble-left-right class=" inline w-4 mr-1" /> Let’s Me Help You Build Your Website
            </a>
        </div>
        <div class="flex-1 grow">
            <img src="{{asset('images/binary.jpg') }}" 
                    alt="Custom dashboard preview" 
                    class="w-full max-w-md rounded-2xl shadow-2xl border border-slate-200 dark:border-slate-800 transition" />
        </div>
    </div>
</section>