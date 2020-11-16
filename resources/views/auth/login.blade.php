<x-guest-layout title="Login">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name text-center">SKM</h1>
            </div>
            <h3>Welcome to <strong>SKM</strong></h3>
            <p>Before getting started, can you please enter your email and password.</p>

            <form action="{{ route('login') }}" method="POST" class="m-t" role="form">
                @csrf

                <div class="form-group">
                    <x-input type="email" name="email" placeholder="Email" autofocus />
                    <x-input-error for="email" />
                </div>

                <div class="form-group">
                    <x-input type="password" name="password" placeholder="Password" />
                    <x-input-error for="password" />
                </div>

                <button type="submit" class="btn btn-primary block full-width m-b">{{ __('Login') }}</button>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="forget_link btn btn-link">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif

            </form>
            <p class="m-t"> <small>Copyright SKM &copy; {{ date('Y')}}</small> </p>
        </div>
    </div>

</x-guest-layout>
