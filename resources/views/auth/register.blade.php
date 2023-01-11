<x-guest-layout>
        <h2 class="text-center text-white p-2 pt-4">Register</h2>
        <div class="row m-4">
            <div class="col-md-6 col-sm-12 bg-custom none d-flex align-items-center">
                <h1 class="text-center pt-3">Register Form</h1>
            </div>
            <div class="col-md-6 col-sm-12 bg-custom-form">
                <p class="text-center mb-0 pt-4">Complately Free</p>

                <form method="POST" action="{{ route('register') }}" class="p-3">
                    @csrf
                    <div class="form-group">
                        <x-label for="name" :value="__('Name')" />
                        <x-input id="name" class="form-control block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                    </div>
                    <div class="form-group mt-4">
                        <x-label for="email" :value="__('Email')" />
                        <x-input id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    </div>
                    <div class="form-group mt-4">
                        <x-label for="password" :value="__('Password')" />
                        <x-input id="password" class="form-control block mt-1 w-full"
                                 type="password"
                                 name="password"
                                 required autocomplete="new-password" />
                    </div>
                    <div class="form-group mt-4">
                        <x-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-input id="password_confirmation" class="form-control block mt-1 w-full"
                                 type="password"
                                 name="password_confirmation" required />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a style="color: #4ed4b4" class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-button class="btn btn-custom mb-4 mt-4 ml-4">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                </form>
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />
            </div>
        </div>
</x-guest-layout>

