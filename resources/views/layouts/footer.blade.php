
<footer class="p-4 bg-gray-900 rounded-sm shadow md:px-6 md:py-8 text-white">
    <div class="sm:flex sm:items-center sm:justify-between">
        <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0">
            <img src="{{ asset('images/logo.jpg') }}" class="mr-3 h-8" alt="Madeit Sports Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Madeit Sports</span>
        </a>
        <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-400 sm:mb-0">
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6 ">Licensing</a>
            </li>
            <li>
                <a href="#" class="hover:underline">Contact</a>
            </li>
        </ul>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
    <span class="block text-sm text-gray-400 sm:text-center">© {{ \Carbon\Carbon::now()->format('Y') }} <a href="{{ url('/') }}" class="hover:underline">Madeit Sports™</a>. All Rights Reserved.
    </span>
</footer>
