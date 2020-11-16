<x-app-layout title="Administrator List">
	<x-slot name="heading">
        <div class="col-lg-10">
            <h2>{{ __('Edit Administrator') }}</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('users.index') }}">Administrators</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Edit</strong>
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
                    <h5>{{ __('Edit Administrator') }}</h5>
                </div>

                <div class="ibox-content">
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <!-- Name -->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">
                                {{ __('Name') }} <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-10">
                                <x-input type="text" name="name" value="{{ $user->name }}" />
                                <x-input-error for="name" />
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <!-- Email -->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">
                                {{ __('Email Address') }} <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-10">
                                <x-input type="text" name="email" value="{{ $user->email }}" />
                                <x-input-error for="email" />
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group row">
                            <div class="col-sm-4 col-sm-offset-2">
                                <a href="{{ route('users.index') }}" class="btn btn-white btn-sm">Cancel</a>
                                <button class="btn btn-primary btn-sm" type="submit">Save Changes</button>
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