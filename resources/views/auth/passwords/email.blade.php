<x-guest-layout title="Forgot Password">
    <div class="container">
        <div class="passwordBox text-center animated fadeInDown">
            <div class="row">
                <div class="col-md-12">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                
                    <div class="ibox-content">
                        <h2 class="font-bold">Forgot password</h2>
                        <p>Enter your email address and your password will be reset and emailed to you.</p>
                        <div class="row">
                            <div class="col-md-12">
                                <form class="m-t" role="form" method="POST" action="{{ route('password.email') }}">
                                @csrf
                                    <div class="form-group">
                                        <x-input type="email" name="email" placeholder="Email" autofocus />
                                        <x-input-error for="email" />
                                    </div>

                                    <button type="submit" class="btn btn-primary block full-width m-b">
                                        {{ __('Send Password Reset Link') }}
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