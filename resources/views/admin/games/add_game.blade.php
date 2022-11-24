@include('admin.layouts.header')
<div class="flex flex-col md:flex-row">
    @include('admin.layouts.side_nav')
    <main class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
        <nav class="flex m-3" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('admin-dashboard') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                        <i class="fas fa-chart-area mr-1"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <a href="{{ url('admin/games') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Games</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">New Game</span>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="m-20 w-1/3">
            <h1 class="mb-3 font-bold">Update</h1>
            <p>Fill in the form to create a new user</p>
            @if (session('error_message'))
                <h3 class="text-red-500">{{ session('error_message') }}</h3>
            @elseif (session('success_message'))
                <h3 class="text-green-500">{{ session('success_message') }}</h3>
            @endif
            <form method="POST" action="{{ url('admin/create_game') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="Name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sports</label>
                    <input name="name" type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Eg: Fussball" required>
                    @error('name') <span class="error text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="mb-6">
                    <label for="File Name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                    <input name="sport_image" type="file" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    @error('sport_image') <span class="error text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="mb-6">
                    <label for="Amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Booking Price</label>
                    <input name="amount" type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    @error('amount') <span class="error text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="flex">
                    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </div>
            </form>
        </div>
    </main>
</div>
@include('admin.layouts.footer')
