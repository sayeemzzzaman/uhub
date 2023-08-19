@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">All Requisition</h6>
                        <a href="{{ route('admin.requisition.add') }}" class="btn btn-inverse-info mb-3 px-4">Add
                            Requisition</a>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>requisitionsId</th>
                                        <th>bookID</th>
                                        <th>studentID</th>
                                        <th>bookName</th>
                                        <th>status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($requisitions as $requisition)
                                        <tr>
                                            <td>{{ $requisition->requisitionsId }}</td>
                                            <td>{{ $requisition->bookID }}</td>
                                            <td>{{ $requisition->studentID }}</td>
                                            <td>{{ $requisition->bookName }}</td>
                                            <td>{{ $requisition->status }}</td>
                                            <td>
                                                <a href="{{ route('admin.requisition.edit', $requisition->id) }}"
                                                    class="btn btn-inverse-warning px-4">Edit</a>
                                                <a href="{{ route('admin.requisition.delete', $requisition->id) }}"
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
