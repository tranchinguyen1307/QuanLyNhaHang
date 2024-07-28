<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 39cfba0bfea50a4ea553bd50de55c6de9645135b
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
<<<<<<< HEAD
=======
        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession
>>>>>>> origin/minhToan
=======
>>>>>>> 39cfba0bfea50a4ea553bd50de55c6de9645135b

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 39cfba0bfea50a4ea553bd50de55c6de9645135b
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                    autofocus />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Mật khẩu') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
<<<<<<< HEAD
=======
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
>>>>>>> origin/minhToan
=======
>>>>>>> 39cfba0bfea50a4ea553bd50de55c6de9645135b
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
<<<<<<< HEAD
<<<<<<< HEAD
                    <span class="ms-2 text-sm text-gray-600">{{ __('Ghi nhớ đăng nhập') }}</span>
=======
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
>>>>>>> origin/minhToan
=======
                    <span class="ms-2 text-sm text-gray-600">{{ __('Ghi nhớ đăng nhập') }}</span>
>>>>>>> 39cfba0bfea50a4ea553bd50de55c6de9645135b
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 39cfba0bfea50a4ea553bd50de55c6de9645135b
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        {{ __('Bạn quên mật khẩu nhỉ?') }}
                    </a>
                @endif

                <x-button class="ms-4" style="background-color: #d26e4b; border-color: #d26e4b;">
                    {{ __('Đăng nhập') }}
<<<<<<< HEAD
=======
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
>>>>>>> origin/minhToan
=======
>>>>>>> 39cfba0bfea50a4ea553bd50de55c6de9645135b
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
