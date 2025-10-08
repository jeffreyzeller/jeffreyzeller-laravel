<section id="portfolio" class="w-full text-center content-center bg-white/80 dark:bg-gray-900/80 snap-start min-h-[calc(100vh)]">
    
    <h2 id="portfolio" class="text-4xl text-gray-900 dark:text-gray-100 font-bold leading-[5rem]">PORTFOLIO</h2>    
    <span class="md:hidden text-gray-900 dark:text-white">Scroll Right to view more.</span>            
    
    <div class="lg:max-w-5xl mx-5 sm:mx-auto">    
        <div class="flex sm:grid sm:grid-cols-3 md:gap-3 snap-x overflow-x-scroll md:overflow-hidden snap-mandatory w-full mx:auto md:p-3">
            
            @foreach($portfolio as $result)
            <div data-modal-target="portfolio-{{ $result->id }}" data-modal-toggle="portfolio-{{ $result->id }}" class="shrink-0 bg-slate-100 dark:bg-gray-800 text-gray-900 dark:text-gray-100 grid w-full lg:w-auto snap-center my-3 duration-100 rounded-xl shadow hover:cursor-pointer hover:outline-blue-200 hover:outline-2 hover:outline-offset-4">
                <div class="w-full aspect-16/12 bg-black bg-[url({{ asset('storage/' . $result->image) }})] bg-center bg-cover bg-no-repeat bg-top rounded-t-xl">
                    
                </div>
                <div class="p-5 font-bold rounded-b text-left">
                    {{ $result->title }}<br />
                    
                    @foreach($result->tags as $tag)
                    <span class="bg-blue-600 text-xs text-white px-2 py-1 rounded-full">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>