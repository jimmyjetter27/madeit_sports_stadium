@extends('layouts.app')
@section('main')

    <div class="-mt-24 relative w-full py-12 px-12 bg-yellow-900 bg-opacity-20 backdrop-blur-lg rounded drop-shadow-lg">
        <div class="relative z-10 text-center py-24 md:py-48">
            <h1 class="text-white text-center text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-display font-bold mb-12">We give you nothing but the best!</h1>
            <a href="{{ route('register') }}" class="inline-block bg-yellow-800 text-white uppercase text-sm tracking-widest font-heading px-8 py-4">Register Today!</a>
        </div>

        <div class="relative z-10 mx-auto max-w-4xl flex justify-between uppercase text-white font-heading tracking-widest text-sm">
            <a href="" class="border-b border-white"></a>
            <a href="" class="border-b border-white"></a>
        </div>

        <img src="https://wallup.net/wp-content/uploads/2016/05/02/88636-Neymar-FC_Barcelona-748x421.png" class="w-full h-full absolute inset-0 object-cover opacity-70" />
    </div>


    <div class="max-w-xl mx-auto text-center py-24 md:py-32" id="about_us">
        <div class="w-24 h-2 bg-yellow-800 mb-4 mx-auto"></div>
        <h2 class="font-display font-bold text-3xl md:text-4xl lg:text-5xl mb-6">About Us</h2>
        <p class="font-light text-gray-600 mb-6 leading-relaxed">Madeit Sports is basically a sports event booking platform.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2">

        <div class="bg-white p-12 md:p-24 flex justify-end items-center">
            <a href="#">
                <img src="https://images8.alphacoders.com/476/476725.jpg" class="w-full max-w-md"/>
            </a>
        </div>

        <div class="bg-gray-100 p-12 md:p-24 flex justify-start items-center mb-3">
            <div class="max-w-md">
                <div class="w-24 h-2 bg-yellow-800 mb-4"></div>
                <h2 class="font-display font-bold text-2xl md:text-3xl lg:text-4xl mb-6">Sports</h2>
                <p class="font-light text-gray-600 text-sm md:text-base mb-6 leading-relaxed">We have a whole lot of
                    sporting activities...</p>
                <a href="{{ url('sports') }}"
                   class="inline-block border-2 border-yellow-800 font-light text-yellow-800 text-sm uppercase tracking-widest py-3 px-8 hover:bg-yellow-800 hover:text-white">Click
                    here</a>
            </div>
        </div>

    </div>

    <img src="https://cdn.wallpapersafari.com/36/30/Uubslq.jpg" class="w-full h-screen object-cover"/>
@endsection
