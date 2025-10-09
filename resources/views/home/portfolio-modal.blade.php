@foreach($portfolio as $result)
<div id="portfolio-{{ $result->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-75 justify-center items-center max-w-full md:inset-0 h-[calc(100%)] bg-black/75">
    <div class="relative p-4 w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-gray-200 rounded-lg  dark:bg-gray-700 shadow-lg shadow-slate-950">
            <!-- Modal body -->
            <div class="md:p-5 text-gray-900 dark:text-white">
                <div>
                    <img class="w-full rounded-t-lg sm:rounded-lg" src="{{ asset('storage/' . $result->image) }}">
                </div>
                <div class="p-5">
                    <button type="button" class="absolute right-3 top-3 text-gray-400 bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="portfolio-{{ $result->id }}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">{{ $result->title }}</h3>
                    <span class="text-sm font-light">{{ $result->url }}</span><br />
                    <div>
                        {!! str($result->description)->sanitizeHtml() !!}
                    </div>

                    <!-- Modal footer -->
                    <div class="font-bold rounded-b text-left sm:absolute bottom-5">
                        @foreach($result->tags as $tag)
                        <span class="bg-blue-500 text-xs text-white px-2 py-1 rounded-full">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach