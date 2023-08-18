@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">All Clubs</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Form link</th>
                                        <th>description</th>
                                        <th></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clubs as $club)
                                        <tr>
                                            <td><img class="wd-50"
                                                    src=" {{ !empty($club->logo) ? url('uploads/club_images/' . $club->logo) : url('uploads/no_image.jpg') }}"
                                                    alt="club">
                                            </td>
                                            <td>{{ $club->name }}</td>
                                            <td>{{ $club->formLink }}</td>
                                            <td>{{ $club->description }}</td>
                                            <td>
                                                <a href="{{ route('admin.club.edit', $club->id) }}"
                                                    class="btn btn-inverse-warning px-4">Edit</a>
                                                <a href="{{ route('admin.club.delete', $club->id) }}"
                                                    class="btn btn-inverse-danger px-4" id="delete">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
