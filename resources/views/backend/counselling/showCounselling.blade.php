@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">All Counselling Requests</h6>
                        <a href="{{ route('admin.counselling.add') }}" class="btn btn-inverse-info mb-3 px-4">Add
                            Counselling</a>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Student Id</th>
                                        <th>Day</th>
                                        <th>Time</th>
                                        <th>Faculty</th>
                                        <th>status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($counsellings as $counselling)
                                        <tr>
                                            <td>{{ $counselling->studentId }}</td>
                                            <td>{{ $counselling->day }}</td>
                                            <td>{{ $counselling->time }}</td>
                                            <td>{{ $counselling->faculty }}</td>
                                            <td>{{ $counselling->status }}</td>
                                            <td>
                                                <a href="{{ route('admin.counselling.edit', $counselling->id) }}"
                                                    class="btn btn-inverse-warning px-4">Edit</a>
                                                <a href="{{ route('admin.counselling.delete', $counselling->id) }}"
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
