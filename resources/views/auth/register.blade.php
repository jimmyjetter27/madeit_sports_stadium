<x-guest-layout>
    <section class="h-screen">
        <div class="px-6 h-full text-gray-800">
            <div
                    class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6"
            >
                <div
                        class="grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0"
                >
                    <img
                            src="https://images8.alphacoders.com/476/476725.jpg"
                            class="w-full"
                            alt="Sample image"
                    />
                </div>
                <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                    <form method="POST" action="{{ route('register') }}">
                        <h1 class="text-center font-bold mt-3 pt-2">Create An Account Today!</h1>
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
                        <div class="flex flex-row items-center justify-center lg:justify-start">
                        </div>

                        <!-- Name input -->
                        <div class="mb-6">
                            <input
                                    name="name"
                                    type="text"
                                    value="{{ old('name') }}"
                                    class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    placeholder="Name"
                            />
                        </div>

                        <!-- Email input -->
                        <div class="mb-6">
                            <input
                                    name="email"
                                    type="email"
                                    value="{{ old('email') }}"
                                    class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    placeholder="Email address"
                            />
                        </div>

                        <!-- Password input -->
                        <div class="mb-6">
                            <input
                                    name="password"
                                    type="password"
                                    class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    placeholder="Password"
                            />
                        </div>

                        <!-- Confirm password input -->
                        <div class="mb-6">
                            <input
                                    name="password_confirmation"
                                    type="password"
                                    class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    placeholder="Confirm Password"
                            />
                        </div>
                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-jet-label for="terms">
                                    <div class="flex items-center">
                                        <x-jet-checkbox name="terms" id="terms"/>

                                        <div class="ml-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-jet-label>
                            </div>
                        @endif
                        <div class="text-center lg:text-left">
                            <button
                                    class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                            >
                                Register
                            </button>
                            <p class="text-sm font-semibold mt-2 pt-1 mb-0">
                                Already have an account?
                                <a
                                        href="/login"
                                        class="text-red-600 hover:text-red-700 focus:text-red-700 transition duration-200 ease-in-out"
                                >Login here</a
                                >
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
