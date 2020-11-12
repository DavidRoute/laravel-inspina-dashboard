<x-app-layout title="Administrator List">
	<x-slot name="heading">
        <div class="col-lg-10">
            <h2>{{ __('Administrators') }}</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Administrators</strong>
                </li>
            </ol>
        </div>
    </x-slot>


</x-app-layout>