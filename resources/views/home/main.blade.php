<section id="home" class="snap-start bg-blue-200/95 text-slate-900 dark:bg-slate-900 dark:text-white overflow-hidden transition-colors duration-300">
    <div class="max-w-6xl mx-auto px-6 py-24 md:py-32 flex flex-col md:flex-row items-center gap-12">
        
        <!-- Text -->
        <div class="max-w-5xl mx-auto md:flex">
            <div class="flex-1 space-y-6">
                <h1 class="text-4xl md:text-6xl font-bold leading-tight">
                    Build Software That Works 
                    <span class="text-blue-600 dark:text-blue-400">Like You Do</span>
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-300 max-w-xl">
                    Stop adapting to generic tools — get custom admin and client panels built 
                    around your business workflows, not against them.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#contact" 
                    class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-xl shadow-lg shadow-blue-600/20 transition">
                        <x-heroicon-s-calendar-days class=" inline w-4 mr-1" /> Book a Free Consultation
                    </a>
                    <a href="#portfolio" 
                    class="px-6 py-3 border border-slate-50 hover:border-blue-400 text-slate-700 hover:text-blue-600 dark:border-slate-600 dark:text-slate-300 dark:hover:text-blue-300 rounded-xl transition">
                        View My Work
                    </a>
                    
                    <!-- <button id="theme-toggle" class="p-2 rounded-lg bg-gray-700 text-gray-100 hover:bg-gray-600 transition">
                        <span id="theme-label">Dark</span>
                    </button> -->

                </div>
            </div>

            <!-- Image -->
            <div class="flex-1 hidden md:flex justify-center">
                <img src="{{asset('images/binary.jpg') }}" 
                    alt="Custom dashboard preview" 
                    class="w-full max-w-md rounded-2xl shadow-2xl border border-slate-200 dark:border-slate-800 transition" width="400px" />
            </div>
        </div>
    </div>
</section>