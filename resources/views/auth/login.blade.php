<x-guest-layout>
        <h2 class="text-center text-white p-2 pt-4">Login</h2>
        <div class="row m-4">
            <div class="col-md-6 col-sm-12 bg-custom none d-flex align-items-center">
                <h1 class="text-center pt-3">Login Form</h1>
            </div>
            <div class="col-md-6 col-sm-12 bg-custom-form">

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="p-3">
                    @csrf
                    <div class="form-group">
                        <x-label for="email" :value="__('Email')" />
                        <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
                    <div class="form-group">
                        <x-label for="password" :value="__('Password')" />
                        <input type="password" name="password" class="form-control" id="password" required autocomplete="current-password" />
                    </div>
                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a style="color: #4ed4b4" class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                            {{ __('Dont have an account?') }}
                        </a>

                        <x-button class="btn btn-custom mb-4 mt-4 ml-4">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>

                <!-- Validation Errors -->
                <x-auth-validation-errors style="top:0;left:0" class="mb-4 text-danger" :errors="$errors" />
            </div>
        </div>
</x-guest-layout>
