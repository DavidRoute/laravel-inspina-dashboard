<x-app-layout title="Change Password">
    <x-slot name="heading">
        <div class="col-lg-8">
            <h2>{{ __('Change Password') }}</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Change Password</strong>
                </li>
            </ol>
        </div>
    </x-slot>
    <!--end::heading-->

      <!--content-->
      <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>{{ __('Change Password') }}</h5>
                </div>

                <div class="ibox-content">
                    <form action="{{ route('change-password') }}" method="POST">
                        @csrf

                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">
                                {{ __('Old Password') }} <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-5">
                                <x-input type="password" name="old_password" />
                                <x-input-error for="old_password" />
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">
                                {{ __('New Password') }} <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-5">
                                <x-input type="password" name="new_password" />
                                <x-input-error for="new_password" />
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">
                                {{ __('Confirm Password') }} <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-5">
                                <x-input type="password" name="confirm_password" />
                                <x-input-error for="confirm_password" />
                            </div>  
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group row">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary btn-sm" type="submit">Update Password</button>
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


                