<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf


            <div class="grid md:grid-cols-2 gap-6">
                <x-jet-label class="md:col-span-1 mt-1" for="first_name" value="{{ __('First Name') }}" />
                <x-jet-label class="md:col-span-1 mt-1" for="last_name" value="{{ __('Last Name') }}" />
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <x-jet-input id="first_name" class="md:col-span-1 mt-1" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name" />
                <x-jet-input id="last_name" class="md:col-span-1 mt-1" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" />
            </div>

            <div class="mt-4 grid md:grid-cols-2 gap-6">
                <x-jet-label class="md:col-span-1 mt-1" for="national_code" value="{{ __('National Code') }}" />
                <x-jet-label class="md:col-span-1 mt-1" for="phone_number" value="{{ __('Phone Number') }}" />
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <x-jet-input id="national_code" class="md:col-span-1 mt-1" type="text" name="national_code" :value="old('national_code')" required autofocus autocomplete="national_code" />
                <x-jet-input id="phone_number" class="md:col-span-1 mt-1" type="text" name="phone_number" :value="old('phone_number')" required autofocus autocomplete="phone_number" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
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

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
