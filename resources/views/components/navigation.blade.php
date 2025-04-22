<nav x-data="{ open: false }" class="">
    <div class="container mx-auto flex items-center relative">
        <!-- Hamburger button (mobile only) -->
        <button @click="open = !open" class="sm:hidden focus:outline-none z-20" aria-label="Toggle menu">
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Nav links -->
        <div 
            :class="open ? 'block bg-white p-4 rounded-md absolute top-full left-0 w-full z-10' : 'hidden'" 
            class="sm:flex sm:items-center sm:gap-10 sm:bg-transparent sm:p-0 text-lg"
        >
            <a href="#about-us" class="block py-2 sm:py-0 cursor-pointer text-gray-900 md:text-white"
                @click.prevent="document.querySelector('#about-us').scrollIntoView({ behavior: 'smooth' }); open = false">
                About Us
            </a>
            <a href="#book-schedule" class="block py-2 sm:py-0 cursor-pointer text-gray-900 md:text-white"
                @click.prevent="document.querySelector('#book-schedule').scrollIntoView({ behavior: 'smooth' }); open = false">
                Schedule a Visit
            </a>
        </div>
    </div>
</nav>
