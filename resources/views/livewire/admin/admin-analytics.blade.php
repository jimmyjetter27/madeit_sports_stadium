<div>
    <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
        <div class="bg-gray-800 pt-3">
            <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                <h1 class="font-bold pl-2">Analytics</h1>
            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                <!--Metric Card-->
                <div class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded-full p-5 bg-green-600"><i class="fa fa-wallet fa-2x fa-inverse"></i>
                            </div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h2 class="font-bold uppercase text-gray-600">Total Revenue</h2>
                            <p class="font-bold text-3xl">¢{{ $revenue }} <span class="text-green-500"><i
                                            class="fas fa-caret-up"></i></span></p>
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                <!--Metric Card-->
                <a href="{{ route('admin-users') }}">
                    <div class="bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-500 rounded-lg shadow-xl p-5">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-pink-600"><i class="fas fa-users fa-2x fa-inverse"></i>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="font-bold uppercase text-gray-600">Total Users</h2>
                                <p class="font-bold text-3xl">{{ $total_user_count }} <span class="text-pink-500"><i
                                                class="fas fa-exchange-alt"></i></span></p>
                            </div>
                        </div>
                    </div>
                </a>
                <!--/Metric Card-->
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                <!--Metric Card-->
                <div class="bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-xl p-5">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded-full p-5 bg-yellow-600"><i
                                        class="fas fa-user-plus fa-2x fa-inverse"></i></div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h2 class="font-bold uppercase text-gray-600">New Users</h2>
                            <p class="font-bold text-3xl">{{ $new_user_count }} <span class="text-yellow-600"><i
                                            class="fas fa-caret-up"></i></span></p>
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                <!--Metric Card-->
                <a href="{{ route('admin-games') }}">
                <div class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-500 rounded-lg shadow-xl p-5">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded-full p-5 bg-blue-600"><i class="fas fa-futbol fa-2x fa-inverse"></i>
                            </div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h2 class="font-bold uppercase text-gray-600">Games Added</h2>
                            <p class="font-bold text-3xl">{{ $games_count }}</p>
                        </div>
                    </div>
                </div>
                </a>
                <!--/Metric Card-->
            </div>

            <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                <!--Advert Card-->
                <div class="bg-white border-transparent rounded-lg shadow-xl">
                    <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                        <h2 class="font-bold uppercase text-gray-600">Upcoming</h2>
                    </div>
                    <div class="p-5 text-center">

                        <script async type="text/javascript"
                                src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom"
                                id="_carbonads_js"></script>

                    </div>
                </div>
                <!--/Advert Card-->
            </div>
        </div>
    </div>
</div>
