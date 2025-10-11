<section id="portfolio" class="w-full relative isolate text-center content-center bg-blue-700 dark:bg-gray-800 snap-start min-h-[calc(100vh-300px)] pt-28">
    <h2 class="text-4xl text-white dark:text-gray-100 font-bold mb-5">My Recent Work</h2>         
    <p class="text-white dark:text-gray-100">Here’s what I build — custom web apps, dashboards & client portals. Below are my most recent and strongest projects.</p>
    <div class="lg:max-w-5xl mx-5 mt-10 sm:mx-auto">    
        <div class="grid sm:grid-cols-3 mb-3 gap-5 md:overflow-hidden snap-mandatory w-full mx:auto md:p-5">
            
            @foreach($portfolio as $result)

            <div class="relative group bg-white dark:bg-gray-900 rounded-2xl overflow-hidden 
                border border-slate-200 dark:border-gray-700 h-100
                hover:outline-blue-200 dark:hover:outline-gray-700 hover:outline-2 hover:outline-offset-4
                shadow-sm hover:shadow-white/20 dark:hover:shadow-gray-500/20 transition-all duration-300 hover:-translate-y-2">
                <img src="{{ asset('storage/' . $result->image) }}" alt="Project Screenshot" 
                    class="w-full h-56 object-cover group-hover:scale-110 group-hover:brightness-90 transition-transform duration-500" />
                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 via-blue-900/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500" width="300px"></div>
                
                <div class="absolute bottom-0 p-6 w-full">
                    <p class="text-slate-300 text-sm mt-1">
                        @foreach($result->tags as $tag)
                            <span class="inline-block px-2 py-1 mb-1 bg-slate-200 dark:bg-slate-700 text-xs text-slate-700 dark:text-slate-300 rounded">{{ $tag }}</span>
                        @endforeach
                    </p>
                    <h3 class="text-xl font-semibold text-gray-700 dark:text-gray-200">{{ $result->title }}</h3>
                    <a href="/portfolio/{{ $result->id }}"  
                    class="inline-block mt-3 px-4 py-2 bg-blue-600 dark:bg-slate-950 hover:bg-blue-700 rounded-lg text-white text-sm font-medium cursor-pointer">
                    <x-heroicon-s-viewfinder-circle class=" inline w-4 mr-1" />  View Project
                    </a>
                </div>
            </div>

            @endforeach
            
        </div>
        
        @if(!Route::is('portfolio.index'))
            <a href="/portfolio" 
            class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-xl shadow-lg shadow-blue-600/20 transition">
                View All My Work
            </a>
        @endif     
    </div>
</section>