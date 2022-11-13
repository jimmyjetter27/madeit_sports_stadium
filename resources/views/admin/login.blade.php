<x-guest-layout>
    <section class="h-full gradient-form bg-gray-200 md:h-screen">
        <div class="container py-12 px-6 h-full">
            <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
                <div class="xl:w-10/12">
                    <div class="block bg-white shadow-lg rounded-lg">
                        <div class="lg:flex lg:flex-wrap g-0">
                            <div class="lg:w-6/12 px-4 md:px-0">
                                <div class="md:p-12 md:mx-6">
                                    <div class="text-center">
                                        <img
                                                class="mx-auto w-48"
                                                src="{{ asset('images/football.jpg') }}"
                                                alt="logo"
                                        />
                                    </div>
                                    <form method="POST" action="{{ route('admin-login') }}" class="mt-5">
                                        @csrf
                                        @if (session('error_message'))
                                            <h3 class="text-red-500">{{ session('error_message') }}</h3>
                                        @endif
                                        @if ($errors->any())
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li class="text-red-500">{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                        @endif
{{--                                        <h5 class="text-center text-red-500">H</h5>--}}
                                        <div class="mb-4">
                                            <input
                                                    type="text"
                                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error('email') is-invalid @enderror"
                                                    id="exampleFormControlInput1"
                                                    placeholder="Email"
                                                    name="email"
                                                    :value="old('email')"
                                                    required
                                                    autofocus
                                            />
                                        </div>
                                        <div class="mb-4">
                                            <input
                                                    type="password"
                                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error('password') is-invalid @enderror"
                                                    name="password"
                                                    placeholder="Password"
                                                    required
                                                    autocomplete="current-password"
                                            />
                                        </div>
                                        <div class="text-center pt-1 mb-12 pb-1">
                                            <button
                                                    class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                                                    data-mdb-ripple="true"
                                                    data-mdb-ripple-color="light"
                                                    style="
                        background: linear-gradient(
                          to right,
                          #ee7724,
                          #d8363a,
                          #dd3675,
                          #b44593
                        );
                      "
                                            >
                                                {{ __('Log in') }}
                                            </button>
                                            @if (Route::has('password.request'))
                                                <a class="underline text-gray-500 hover:text-gray-900"
                                                   href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div
                                    class="lg:w-6/12 flex items-center lg:rounded-r-lg rounded-b-lg lg:rounded-bl-none"
                                    style="
                background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
              "
                            >
                                <div class="text-white px-4 py-6 md:p-12 md:mx-6">
                                    <h4 class="text-xl font-bold mt-1 mb-12 pb-1">Made It Sports - Admin</h4>
                                    <p class="text-sm">

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
