<!-- Navigation -->
<nav class="bg-slate-900/98 border-gray-200 dark:bg-gray-900 fixed w-full top-0 z-60">
    <div class="max-w-screen-lg flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://www.jeffreyzeller.com" class="flex items-center space-x-3 rtl:space-x-reverse">
            <!-- <img src="#" class="h-8" alt="Jeffrey Zeller Logo" /> -->
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white font-mono text-white">jeffreyzeller.com</span>
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
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M1 1h15M1 7h15M1 13h15" />
        </svg>
        </button>
        <!-- Menu -->
        <div id="navbar-default" 
        class="hidden w-full md:block md:w-auto overflow-hidden transition-all duration-300 ease-in-out opacity-0 max-h-0 md:opacity-100 md:max-h-none">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-slate-700 
            md:flex-row md:space-x-1 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white/10 
            dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li class="px-3 py-2"><a href="#home" class="block text-neutral-50">Home</a></li>
            <li class="px-3 py-2"><a href="#services" class="block text-neutral-50">Services</a></li>
            <li class="px-3 py-2"><a href="#portfolio" class="block text-neutral-50">Portfolio</a></li>
            <li class="px-3 py-2"><a href="#contact" class="block text-neutral-50">Contact</a></li>
        </ul>
        </div>
    </div>
</nav>
<div class="h-[72px] w-full"></div> <!-- Spacing For Navigation bar -->
<script>
const toggleBtn = document.getElementById('nav-toggle');
const menu = document.getElementById('navbar-default');

toggleBtn.addEventListener('click', () => {
  const isOpen = toggleBtn.getAttribute('aria-expanded') === 'true';
  toggleBtn.setAttribute('aria-expanded', String(!isOpen));

  if (!isOpen) {
    menu.classList.remove('hidden');
    menu.style.maxHeight = menu.scrollHeight + 'px';
    menu.classList.add('opacity-100');
    menu.classList.remove('opacity-0');
  } else {
    menu.style.maxHeight = menu.scrollHeight + 'px'; // reset height for smooth close
    requestAnimationFrame(() => {
      menu.style.maxHeight = '0';
      menu.classList.remove('opacity-100');
      menu.classList.add('opacity-0');
    });
    setTimeout(() => menu.classList.add('hidden'), 300);
  }
});

menu.querySelectorAll('a').forEach(link => {
  link.addEventListener('click', () => {
    menu.style.maxHeight = menu.scrollHeight + 'px';
    requestAnimationFrame(() => {
      menu.style.maxHeight = '0';
      menu.classList.remove('opacity-100');
      menu.classList.add('opacity-0');
    });
    setTimeout(() => menu.classList.add('hidden'), 300);
    toggleBtn.setAttribute('aria-expanded', 'false');
  });
});
</script>
