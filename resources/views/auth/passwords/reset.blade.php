<x-guest-layout title="Reset Password">
    <div class="container">
        <div class="passwordBox text-center animated fadeInDown">
            <div class="row">
                <div class="col-md-12">
                    <div class="ibox-content">
                        <h3 class="font-bold">{{ __('Reset Password') }}</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="m-t" role="form" method="POST" action="{{ route('password.update') }}">
                                    @csrf
                                    <x-input type="hidden" name="token" value="{{ $token }}" />
                                    <div class="form-group">
                                        <x-input type="email" name="email" value="{{ $email ?? old('email') }}" autofocus />
                                        <x-input-error for="email" />
                                    </div>
                                    
                                    <div class="form-group">
                                        <x-input type="password" name="password" placeholder="New Password" />
                                        <x-input-error for="password" />
                                    </div>
    
                                    <div class="form-group">
                                        <x-input type="password" name="password_confirmation" placeholder="Confirm Password" />
                                    </div>
    
                                    <button type="submit" class="btn btn-primary block full-width m-b">
                                        {{ __('Reset Password') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="m-t"> <small>Copyright SKM &copy; {{ date('Y')}}</small> </p>
        </div>
    </div>
</x-guest-layout>