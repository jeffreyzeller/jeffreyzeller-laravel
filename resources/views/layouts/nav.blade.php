<nav class="bg-blue-500 dark:bg-gray-800  fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="{{ env('APP_URL') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="/images/logo.svg" class="h-8" alt="Flowbite Logo">
      <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Jeffrey Zeller</span>
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <a href="#contact" type="button" class="hidden lg:inline text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</a>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5 fill-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="font-medium flex flex-col p-2 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-200 shadow-inner shadow-gray-300 dark:shadow-gray-900 md:flex-row md:space-x-1 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-gray-200/10 dark:bg-gray-800 dark:border-gray-700">
            <li class="px-3 py-2">
            <a href="/#home"  class="block text-neutral-700 rounded-sm md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-300 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"><x-heroicon-o-home class=" inline w-4 mr-1" /> Home</a>
            </li>
            <li class="px-3 py-2">
            <a href="/#services" class="block text-neutral-700 rounded-sm md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-300 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"><x-heroicon-o-wrench-screwdriver class=" inline w-4 mr-1" /> Services</a>
            </li>
            <li class="px-3 py-2">
            <a href="/#portfolio" class="block text-neutral-700 rounded-sm  md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-300 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"><x-heroicon-o-photo class=" inline w-4 mr-1" /> Portfolio</a>
            </li>
            <li class="px-3 py-2">
            <a href="/#about" class="block text-neutral-700 rounded-sm md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-300 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"><x-heroicon-o-user class=" inline w-4 mr-1" /> About</a>
            </li>
            <li class="px-3 py-2">
            <a href="/#contact" class="block text-neutral-700 rounded-sm md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-300 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"><x-heroicon-o-envelope class=" inline w-4 mr-1" /> Contact</a>
            </li>
        </ul>
  </div>
  </div>
</nav>

<div class="hidden sm:visible h-[72px]"></div>