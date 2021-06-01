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
    <!--end::heading-->

    <!--filters-->
    <div class="ibox-content m-b-sm border-bottom">
        <form action="">
            <div class="row">
                <!-- name -->
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="text" id="keywords" name="keywords" value="{{ request('keywords') }}" class="form-control" placeholder="Search by Keywords...">
                    </div>
                </div>

                <div class="col-sm-6 ml-20">
                    <label>&nbsp;</label>
                    <button type="submit" class="btn btn-primary" id="submit">
                        <i class="fa fa-filter"></i> Filter
                    </button>
                </div> 
            </div>
        </form>
    </div>
    <!--end::filters-->

    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-content">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $index => $user)
                                <tr>
                                    <td>{{ $users->firstItem() + $index }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <a href="#deleteModal" data-toggle="modal" data-id="{{ $user->id }}" 
                                             class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">There is no data.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <!-- pagination -->
                    {{ $users->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    @include('includes.delete-modal')

@section('styles')
@endsection

@push('scripts')
<script>
    $(function () {
        // Delete modal script.
        $("#deleteModal").on("show.bs.modal", function(e) {
            var id = $(e.relatedTarget).attr('data-id');
            $('#deleteForm').attr('action', `${location.href.split('?')[0]}/${id}`)
        });
    });
</script>
@endpush

</x-app-layout>