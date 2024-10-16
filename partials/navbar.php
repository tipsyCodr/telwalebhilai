<div :class="{ 'bg-yellow-400 transition duration-150 ease-in-out': open }"
    class="absolute top-0 inset-x-0 z-20 bg-transparent" x-data="{ open: false }">
    <nav class="relative flex items-center justify-between sm:h-10 md:justify-center p-2 md:py-6 md:px-4 mt-2">
        <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
            <div class="flex items-center justify-between w-full md:w-auto">
                <a class="px-4" href="/" aria-label="Home">
                    <img src="./assets/img/logo-name.png" height="90" width="100" />
                </a>
                <div class="-mr-2 flex items-center md:hidden px-5">
                    <button @click="open = !open" type="button" id="main-menu" aria-label="Main menu"
                        aria-haspopup="true"
                        class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-gray-500 hover:bg-yellow-500 focus:outline-none focus:bg-yellow-100 focus:text-black transition duration-150 ease-in-out">
                        <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="hidden md:flex  text-white">
            <a href="/"
                class="w-full font-bold text-white px-4 py-6 uppercase text-lg hover:text-gray-900 hover:bg-yellow-500 transition duration-150 ease-in-out">Home</a>
            <a href="about.php"
                class="w-full font-bold text-white px-4 py-6 uppercase text-lg hover:text-gray-900 hover:bg-yellow-500 transition duration-150 ease-in-out">About</a>

            <a href="products.php"
                class="w-full font-bold text-white px-4 py-6 uppercase text-lg hover:text-gray-900 hover:bg-yellow-500 transition duration-150 ease-in-out">Products</a>
            <!-- <a href="https://docs.pingping.io" target="_blank"
                class="w-full text-white px-4 py-6 uppercase text-lg hover:text-gray-900 hover:bg-yellow-500 transition duration-150 ease-in-out text-nowrap">Contact
                Us</a> -->
        </div>
        <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">

            <span class="inline-flex shadow mx-6 ">
                <a href="contact.php"
                    class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium text-white bg-yellow-500 hover:bg-yellow-600 focus:outline-none focus:border-yellow-700 transition duration-150 ease-in-out">
                    Contact Us
                </a>
            </span>
        </div>
    </nav>

    <div x-show="open" x-transition:enter="transition transform ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-20" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition transform ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-20"
        class="shadow flex flex-col justify-center items-center mobile-nav gap-1 py-4 bg-yellow-400 w-full z-10">
        <a href="/"
            class="w-full py-2 px-4 font-medium text-black hover:text-gray-900 hover:bg-yellow-500 transition duration-150 ease-in-out">Home</a>
        <a href="#pricing"
            class="w-full py-2 px-4 font-medium text-black hover:text-gray-900 hover:bg-yellow-500 transition duration-150 ease-in-out">About</a>

        <a href="https://docs.pingping.io" target="_blank"
            class="w-full py-2 px-4 font-medium text-black hover:text-gray-900 hover:bg-yellow-500 transition duration-150 ease-in-out">Products</a>
        <a href="https://docs.pingping.io" target="_blank"
            class="w-full py-2 px-4 font-medium text-black hover:text-gray-900 hover:bg-yellow-500 transition duration-150 ease-in-out">Contact
            Us</a>
    </div>

</div>