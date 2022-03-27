<x-app-layout>
    <div class="news-pic relative">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10">
            <div class="text-center py-8 text-3xl  text-white tracking-wider font-black">
                後台登入
            </div>
            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif 
            <form method="POST" action="{{ route('login') }}">
                @csrf
    
                <div>
                    <x-jet-label for="username" value="{{ __('帳號') }}" />
                    <x-jet-input id="username" class="block mt-1 w-full" type="username" name="username" :value="old('username')" required autofocus />
                </div>
    
                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('密碼') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>
    
                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('記住我的資訊') }}</span>
                    </label>
                </div>
    
                <div class="flex items-center justify-end mt-4">
                    {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900 ml-4" href="{{ route('register') }}">
                        {{ __('註冊帳號') }}
                    </a>
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 ml-4" href="{{ route('password.request') }}">
                            {{ __('忘記密碼?') }}
                        </a>
                    @endif
     --}}
                    <x-jet-button class="ml-4">
                        {{ __('登入') }}
                    </x-jet-button>
                </div>
            </form>




            </form>
        </div>
        <img src="/img/picture/index/bathpic.png" class="opacity-50 object-cover h-96 w-full"/>
    </div>
</x-app-layout>
