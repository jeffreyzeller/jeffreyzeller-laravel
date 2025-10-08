<section id="contact" class="w-full text-center place-content-center bg-blue-700 dark:bg-gray-800 snap-start min-h-[calc(100vh-72px)]">
    
    <h2 class="text-4xl text-white font-bold mb-5">CONTACT</h2>
    
    <div class="max-w-lg mx-auto text-left">
        <div class="p-5">
            <div class="mb-4 border-b-1 border-blue-500 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-blue-600 dark:text-white bg-white dark:bg-gray-900 hover:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500" data-tabs-inactive-classes="dark:border-transparent text-white hover:text-gray-300 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-5 rounded-t-lg" id="message-styled-tab" data-tabs-target="#styled-message" type="button" role="tab" aria-controls="message" aria-selected="false">
                            <x-heroicon-o-envelope class=" inline w-6 h-6 mr-1" /> Message Me
                        </button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-5 rounded-t-lg" id="appointment-styled-tab" data-tabs-target="#styled-appointment" type="button" role="tab" aria-controls="appointment" aria-selected="false">
                           <x-heroicon-o-calendar-days class=" inline w-6 h-6 mr-1" /> Book Appointment
                        </button>
                    </li>
                </ul>
            </div>
            
            <div id="default-styled-tab-content">
                <div class="hidden rounded-lg" id="styled-message" role="tabpanel" aria-labelledby="message-tab">
                    
                    @if (session('status'))
                    <div id="alert-1" class="flex items-center p-4 mb-4 text-blue-700 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                        <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="sr-only">Info</span>
                        <div class="ms-3 text-sm font-medium">
                            {{ session('status') }}
                        </div>
                            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-700 rounded-lg focus:ring-2 focus:ring-blue-700 p-1.5 hover:bg-blue-700 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-700 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                        </button>
                    </div>
                    @endif
                    
                    <form id="contact-form" action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div>
                            <input type="text" name="name" type="text" class="w-full rounded-t-lg mb-3 @error('name') is-invalid @enderror" placeholder="Name" class="">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <input type="text" name="email" type="email" class="w-full mb-3 @error('email') is-invalid @enderror" placeholder="email@addr.ess">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <textarea type="text" name="message" class="w-full @error('message') is-invalid @enderror" placeholder="Message" rows="5"></textarea>
                            @error('message')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button class="bg-orange-500 dark:bg-orange-600 text-white text-xl font-bold rounded-b-lg p-3 w-full" type="submit">
                            Send Message
                        </button>
                    </form>
                </div>
                
                <div class="hidden" id="styled-appointment" role="tabpanel" aria-labelledby="appointment-tab">
                        <div class="bg-white dark:bg-gray-600 rounded-t-lg text-gray-800 p-5 dark:text-gray-100 mb-2">                
                        <p class="mb-2">Got an idea you’re excited about? Let’s bring it to life — click below to see my schedule and book a chat. I’d love to help you turn your vision into a website that stands out.</p>
                        </div>
                        <!-- Calendly link widget begin -->
                        <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
                        <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
                        <a href="" class="block bg-orange-500 dark:bg-orange-600 text-white text-center text-xl font-bold rounded-b-lg p-3 w-full" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/accounts-jeffreyzeller'});return false;">Schedule a Meeting</a>
                        <!-- Calendly link widget end -->

                </div>
            </div>
        </div>
    </div>
    
</section>