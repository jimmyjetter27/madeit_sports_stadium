@include('admin.layouts.header')
<div class="flex flex-col md:flex-row">
    @include('admin.layouts.side_nav')
    <main class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
        <nav class="flex m-3" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('admin-dashboard') }}"
                       class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                        <i class="fas fa-chart-area mr-1"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <a href="{{ url('admin/venues') }}"
                           class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Venues</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Update Venue</span>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="flex justify-center">
            <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
                @if (session('error_message'))
                    <h3 class="text-red-500">{{ session('error_message') }}</h3>
                @elseif(session('success_message'))
                    <h2 class="text-green-500 text-center font-bold">{{ session('success_message') }}</h2>
                @endif
                <form class="space-y-6" method="POST" action="{{ url('admin/update_venue', [$venue->id]) }}">
                    @method('PUT')
                    @csrf
                    <h5 class="text-xl font-medium text-gray-900 dark:text-white">Update Details</h5>
                    <div>
                        <label for="game"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Venue Name</label>
                        <input type="text" name="name"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                               value="{{ $venue->name }}" required>
                        @error('name') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="amount"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
                        <input type="text" name="location"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                               value="{{ $venue->location }}" required>
                        @error('location') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="amount"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea name="description" id="description" rows="4"
                                  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                  placeholder="Description..."></textarea>
                    </div>
                    <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </main>
</div>
@include('admin.layouts.footer')
