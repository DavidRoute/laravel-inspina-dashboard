<x-app-layout title="Profile">
	<x-slot name="heading">
        <div class="col-lg-10">
            <h2>{{ __('Profile') }}</h2>
        </div>
    </x-slot>
    <!--end::heading-->

    <!--content-->
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content">
                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <!-- Username -->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">
                                {{ __('Username') }}
                            </label>
                            <div class="col-sm-5">
                                <x-input type="text" name="username" value="{{ $login_user->username }}" readonly />
                                <x-input-error for="username" />
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                    
                        <!-- Name -->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">
                                {{ __('Name') }} <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-5">
                                <x-input type="text" name="name" value="{{ $login_user->name }}" />
                                <x-input-error for="name" />
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">
                                {{ __('Last Login Time') }} 
                            </label>
                            <div class="col-sm-5">
                                <x-input type="text" name="last_login_at" value="{{ $login_user->last_login_at }}" 
                                    readonly />
                                <x-input-error for="last_login_at" />
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">
                                {{ __('Created Time') }} 
                            </label>
                            <div class="col-sm-5">
                                <x-input type="text" name="created_at" value="{{ $login_user->created_at }}" 
                                    readonly />
                                <x-input-error for="created_at" />
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">
                                {{ __('Login IP') }} 
                            </label>
                            <div class="col-sm-5">
                                <x-input type="text" name="last_login_ip" value="{{ $login_user->last_login_ip }}" 
                                    readonly />
                                <x-input-error for="last_login_ip" />
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                    
                        <div class="form-group row">
                            <div class="col-sm-6 col-sm-offset-2">
                                <button class="btn btn-primary btn-sm" type="submit">Update Profile</button>

                                <a class="btn btn-outline btn-primary btn-sm" href="{{ route('change-password.show') }}">Reset Password</a>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.ibox-content -->
            </div>
            <!-- /.ibox-->
        </div>
    </div>
    <!--end content-->

@section('styles')

@endsection

@push('scripts')

@endpush
</x-app-layout>