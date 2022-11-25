<div>
    {{-- The whole world belongs to you. --}}
    <div>
        <div class="bg-gray-800 pt-3">
            <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                <h1 class="font-bold pl-2">Venues</h1>
            </div>
        </div>


        <nav class="flex m-3" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('admin-dashboard') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                        <i class="fas fa-chart-area mr-1"></i>
                        Dashboard
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Venues</span>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="overflow-x-auto relative">
            <a href="{{ route('admin-new-venue') }}">
                <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded m-5">
                    Add New Venue <i class="fas fa-plus"></i>
                </button>
            </a>

            @if (session('success_message'))
                <h2 class="text-green-500 text-center font-bold">{{ session('success_message') }}</h2>
            @endif
            <table class=" table w-full text-sm text-left text-gray-500 dark:text-gray-400" id="table">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Location
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Description
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Date Created
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    @foreach($venues as $venue)
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $venue->name }}
                        </td>
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $venue->location }}
                        </td>
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $venue->description ? : 'N/A' }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $venue->created_at }}
                        </td>
                        <td class="row flex items-center px-3 space-x-2">
                            <a href="{{ url('admin/edit_venue', [$venue->id])}}">
                                <button class=""><i class="fas fa-pen text-yellow-400"></i></button>
                            </a>
                            <form method="post" action="{{ url('admin/delete_venue', [$venue->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger ml-1"
                                        onclick="return confirm('Proceed to delete venue?');"><i
                                            class="fas fa-trash text-red-900"></i></button>
                            </form>
                        </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
