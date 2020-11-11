<x-guest-layout title="Login">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name text-center">GP</h1>
            </div>
            <h3>Welcome to <strong>GAME PROJECT</strong></h3>
            <p>Before getting started, can you please enter your email and password.</p>

            <form action="{{ route('login') }}" method="POST" class="m-t" role="form">
                @csrf

                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" autofocus />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary block full-width m-b">{{ __('Login') }}</button>

            </form>
            <p class="m-t"> <small>Copyright Nexidea &copy; {{ date('Y')}}</small> </p>
        </div>
    </div>

</x-guest-layout>
