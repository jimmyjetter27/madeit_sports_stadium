@extends('customer.authenticated.layouts.app')
@section('main')
    <div class="flex row justify-center space-x-1 mt-16 h-screen">

        <div class="w-full max-w-sm bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
{{--            <h3 class="text-center font-bold">Book Now</h3>--}}
            <a href="#">
                <img class="p-8 rounded-t-lg" src="{{ asset('images/'.$game->sport_image) }}" alt="{{ $game->name }}"/>
            </a>
            @if (session('error_message'))
                <h3 class="text-red-500 text-center">{{ session('error_message') }}</h3>
            @elseif (session('success_message'))
                <h3 class="text-green-500 text-center">{{ session('success_message') }}</h3>
            @endif
            <div class="px-5 pb-5">
                <a href="#">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                        Game: {{ $game->name }}</h5>
                </a>
                <form method="POST" action="{{ url('book_now') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                        <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                        <input name="phone_number" type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        @error('phone_number') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-6">
                        <label for="network" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Network</label>
                    <select
                            name="network"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    >
                        <option value="AIR">AirtelTigo</option>
                        <option value="GLO">GLO</option>
                        <option value="MTN">MTN</option>
                        <option value="VOD">Vodafone</option>
                    </select>
                    </div>
                    <div class="mb-6">
                        <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Venue</label>
                        <select
                                name="venue"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        >
                            @foreach($venues as $venue)
                                <option value="{{ $venue->id }}">{{ $venue->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for="start_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start Date</label>
                        <input name="start_date" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        @error('start_date') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-6">
                        <label for="end_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End Date</label>
                        <input name="end_date" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        @error('end_date') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <input type="hidden" name="game_id" value="{{ $game->id }}">
                    <div class="flex">
                        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Book Now</button>
                    </div>
                </form>
{{--                <form method="POST" action="{{ url('book_now', [$game->id]) }}">--}}
{{--                    <div class="flex items-center justify-between">--}}
{{--                        <span class="text-3xl font-bold text-gray-900 dark:text-white">₵{{ $game->amount }}</span>--}}
{{--                        <a href="{{ url('book_now', [$game->id]) }}"--}}
{{--                           class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Book--}}
{{--                            Now</a>--}}
{{--                    </div>--}}
{{--                </form>--}}
            </div>
        </div>
    </div>
@endsection
