@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Notification Manager</h6>
                        <a href="{{ route('admin.message.add') }}" class="btn btn-inverse-info mb-3 px-4">Add Message</a>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>subject</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($messages as $message)
                                        <tr>
                                            <td>{{ $message->subject }}</td>
                                           
                                            <td>
                                                <a href="{{ route('admin.message.edit', $message->id) }}"
                                                    class="btn btn-inverse-warning px-4">Edit</a>
                                                <a href="{{ route('admin.message.delete', $message->id) }}"
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
