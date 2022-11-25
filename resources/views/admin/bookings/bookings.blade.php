@include('admin.layouts.header')
<div class="flex flex-col md:flex-row">
    @include('admin.layouts.side_nav')
    <main class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
        <div>
            <div class="bg-gray-800 pt-3">
                <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <h1 class="font-bold pl-2">Games</h1>
                </div>
            </div>


            <nav class="flex m-3" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('admin-dashboard') }}"
                           class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                            <i class="fas fa-chart-area mr-1"></i>
                            Dashboard
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Bookings</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <div class="overflow-x-auto relative">
                <table class=" table w-full text-sm text-left text-gray-500 dark:text-gray-400" id="table">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Transaction ID
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Amount
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Customer
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Game
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Venue
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Booked Date
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        @foreach($bookings as $booking)
                            <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $booking->payment->transaction_id }}
                            </td>
                            <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $booking->payment->total_amount }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $booking->user->name }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $booking->game->name }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $booking->venue->name }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $booking->created_at }}
                            </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>
@include('admin.layouts.modals')
@include('admin.layouts.footer')
