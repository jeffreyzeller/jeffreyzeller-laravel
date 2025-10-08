<section id="portfolio" class="w-full text-center content-center bg-blue-700 dark:bg-gray-800 snap-start min-h-[calc(100vh-300px)] pt-28">
    <h2 class="text-4xl text-white dark:text-gray-100 font-bold mb-5">My Recent Work</h2>         
    
    <div class="lg:max-w-5xl mx-5 sm:mx-auto">    
        <div class="sm:grid sm:grid-cols-3 mb-3 md:gap-3 snap-x overflow-x-scroll md:overflow-hidden snap-mandatory w-full mx:auto md:p-3">
            
            @foreach($portfolio as $result)

            <div class="relative bg-white dark:bg-gray-900 rounded-2xl overflow-hidden 
                border border-slate-200 dark:border-gray-700 h-100
                hover:outline-blue-200 dark:hover:outline-gray-700 hover:outline-2 hover:outline-offset-4
                shadow-sm hover:shadow-white/20 dark:hover:shadow-gray-500/20 transition-all duration-300 hover:-translate-y-1">
                <img src="{{ asset('storage/' . $result->image) }}" alt="Project Screenshot" 
                    class="w-full h-56 object-cover group-hover:scale-105 group-hover:brightness-90 transition-transform duration-500" />
                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 via-blue-900/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <div class="absolute bottom-0 p-6 w-full">
                    <h3 class="text-xl font-semibold text-white">{{ $result->title }}</h3>
                    
                    <p class="text-slate-300 text-sm mt-1">
                        @foreach($result->tags as $tag)
                            <span class="px-2 py-1 bg-slate-200 dark:bg-slate-800 text-xs text-slate-700 dark:text-slate-300 rounded">{{ $tag }}</span>
                        @endforeach
                    </p>
                    <a data-modal-target="portfolio-{{ $result->id }}" data-modal-toggle="portfolio-{{ $result->id }}"  
                    class="inline-block mt-3 px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded-lg text-white text-sm font-medium cursor-pointer">
                    <x-heroicon-s-viewfinder-circle class=" inline w-4 mr-1" />  View Project
                    </a>
                </div>
            </div>
            <br class="sm-hidden" />
            @endforeach
            
        </div>
    </div>
</section>