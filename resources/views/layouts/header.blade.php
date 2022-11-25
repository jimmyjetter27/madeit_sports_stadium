<nav class="bg-gray-900 px-2 sm:px-4 py-2.5 fixed w-full z-20 top-0 left-0 border-b border-gray- text-white">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="{{ url('/') }}" class="flex items-center">
            <img src="{{ asset('images/logo.jpg') }}" class="h-6 mr-3 sm:h-9 rounded-lg" alt="Madeit Sports Logo">
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Madeit Sports</span>
        </a>
        <div class="flex md:order-2">

        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col text-white p-4 mt-4 border border-gray-100 rounded-lg bg-gray-800 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="{{ url('/') }}" class="block py-2 pl-3 pr-4 rounded md:bg-transparent md:text-white md:p-0" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="{{ url('sports') }}" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Sports</a>
                </li>
                <li>
                    <a href="#about_us" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About Us</a>
                </li>
                <li>
                    <a href="#gallery" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Gallery</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
