<section id="about" class="w-full text-center content-center bg-white/80 dark:bg-slate-950/80 snap-start min-h-[calc(100vh)] bg-[url({{ asset('images/bg-wave-trans-flipped.svg') }})] dark:bg-[url({{ asset('images/bg-wave-dark-trans-flipped.svg') }})] bg-cover bg-no-repeat bg-top pt-75">
    <h2 class="text-4xl text-gray-900 dark:text-gray-100 font-bold mb-5">About Me</h2>
    <div class="max-w-5xl mx-auto flex flex-col sm:flex-row p-5">
        <div class="flex-1 p-5 bg-white/100 shadow shadow-lg mr-5 dark:bg-gray-900 text-gray-900 dark:text-gray-100 text-left rounded-xl outline-blue-500/50 outline-4 outline-offset-5">
            <p class="mb-2">I’m a <strong>Laravel App Developer</strong> with over <strong>5 years of experience</strong> building custom web applications that help businesses run smoother.<p>
            <p class="mb-2">Too many tools force you into a box. I believe your software should fit <i>you</i>. That’s why I design with precision using <strong>TailwindCSS</strong> and <strong>Filament</strong>, keeping UIs clean, intuitive, and performance-driven.</p>
            <p class="mb-2">I deliberately limit third-party dependencies — every feature is built in-house. This means fewer security risks, greater stability, and cleaner, more maintainable code in the long run.</p>
            <p class="mb-2">When we work together, you won’t get a templated site—you’ll get a system built precisely for <i>how you operate</i>.</p>
            <a href="#portfolio" class="text-blue-500 hover:underline">See My Work →</a><br />
            <a href="#contact" 
            class="mt-2 inline-block px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl shadow-lg shadow-blue-600/30 transition">
                <x-heroicon-s-chat-bubble-left-right class=" inline w-4 mr-1" /> Let’s Me Help You Build Your Website
            </a>
        </div>
        <div class="order-first pb-5 md:order-last flex-1 grow">
            <img src="{{asset('images/binary.jpg') }}" 
                    alt="Custom dashboard preview" 
                    class="w-full max-w-md rounded-2xl shadow-2xl border border-slate-200 dark:border-slate-800 transition" />
        </div>
    </div>
</section>