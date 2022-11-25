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



    <section class="overflow-hidden text-gray-700 mb-5" id="gallery">
        <div class="max-w-xl mx-auto text-center py-24 md:py-32" id="about_us">
            <div class="w-24 h-2 bg-yellow-800 mb-4 mx-auto"></div>
            <h2 class="font-display font-bold text-3xl md:text-4xl lg:text-5xl mb-6">Gallery</h2>
{{--            <p class="font-light text-gray-600 mb-6 leading-relaxed">Below is a portfolio of some of the sporting activities we are into</p>--}}
        </div>
        <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
            <div class="flex flex-wrap -m-1 md:-m-2">
                <div class="flex flex-wrap w-1/3">
                    <div class="w-full p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                             src="https://i.pinimg.com/originals/8b/6a/ee/8b6aee2819c87671d6c1008ede201844.jpg">
                    </div>
                </div>
                <div class="flex flex-wrap w-1/3">
                    <div class="w-full p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                             src="https://wallpapers.com/images/high/bouncing-table-tennis-ball-g8dfk8bwbmx0z68n-2.jpg">
                    </div>
                </div>
                <div class="flex flex-wrap w-1/3">
                    <div class="w-full p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                             src="https://images.unsplash.com/photo-1560272564-c83b66b1ad12?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8M3x8fGVufDB8fHx8&w=1000&q=80">
                    </div>
                </div>
                <div class="flex flex-wrap w-1/3">
                    <div class="w-full p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                             src="https://images.pexels.com/photos/4761598/pexels-photo-4761598.jpeg?cs=srgb&dl=pexels-cottonbro-studio-4761598.jpg&fm=jpg">
                    </div>
                </div>
                <div class="flex flex-wrap w-1/3">
                    <div class="w-full p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                             src="https://wallpaperaccess.com/full/128130.jpg">
                    </div>
                </div>
                <div class="flex flex-wrap w-1/3">
                    <div class="w-full p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                             src="https://images2.minutemediacdn.com/image/upload/c_fill,w_912,h_516,f_auto,q_auto,g_auto/shape/cover/sport/manchester-united-s-english-striker-wayn-5ea2d70959521f3c07000001.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
