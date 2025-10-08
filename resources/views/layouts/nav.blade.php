<!-- Navigation -->
<nav class="bg-blue-700 border-gray-200 dark:bg-gray-800 fixed w-full top-0 z-50">
    <div class="max-w-screen-lg flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://www.jeffreyzeller.com" class="flex items-center space-x-3 rtl:space-x-reverse">
            <!-- <img src="#" class="h-8" alt="Jeffrey Zeller Logo" /> -->
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-gray-300 font-mono text-white">jeffreyzeller.com</span>
        </a>
        <!-- Toggle Button -->
        <button id="nav-toggle" type="button"
          class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden 
          hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 
          dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
          aria-controls="navbar-default"
          aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M1 1h15M1 7h15M1 13h15" />
          </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-2 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-200 shadow-inner shadow-gray-400 dark:shadow-gray-900/75 md:flex-row md:space-x-1 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-gray200/10 dark:bg-gray-800 dark:border-gray-700">
            <li class="px-3 py-2">
            <a href="#home"  class="block text-neutral-700 rounded-sm md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-300 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
            </li>
            <li class="px-3 py-2">
            <a href="#services" class="block text-neutral-700 rounded-sm md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-300 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
            </li>
            <li class="px-3 py-2">
            <a href="#portfolio" class="block text-neutral-700 rounded-sm  md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-300 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Portfolio</a>
            </li>
            <li class="px-3 py-2">
            <a href="#contact" class="block text-neutral-700 rounded-sm md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-300 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
            </li>
        </ul>
        </div>
    </div>
</nav>
<div class="hidden sm:visible h-[72px]"></div>
<script>
const toggleBtn = document.getElementById('nav-toggle');
const menu = document.getElementById('navbar-default');

// handle toggle click
toggleBtn.addEventListener('click', () => {
  const isOpen = toggleBtn.getAttribute('aria-expanded') === 'true';
  toggleBtn.setAttribute('aria-expanded', String(!isOpen));
  menu.classList.toggle('hidden', isOpen);
});

// close menu when a nav link is clicked
menu.querySelectorAll('a').forEach(link => {
  link.addEventListener('click', () => {
    menu.classList.add('hidden');
    toggleBtn.setAttribute('aria-expanded', 'false');
  });
});
</script>