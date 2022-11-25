@foreach($games as $game)
    <div class="flex">
        <div class="rounded-lg shadow-lg bg-white max-w-sm">
            <a href="{{ url('book') }}">
                <img height="440" class="rounded-t-lg" src="{{ asset('images/'.$game->sport_image) }}" alt="{{ $game->name }}"/>
            </a>
            <div class="p-6">
                <h5 class="text-gray-900 text-xl font-medium mb-2">{{ $game->name }}</h5>
                <p>Prices: ₵{{ $game->amount }}</p>
                <a href="{{ url('book', [$game->id]) }}" >
                    <button class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                        Click here to book
                    </button>
                </a>
            </div>
        </div>
    </div>
@endforeach
