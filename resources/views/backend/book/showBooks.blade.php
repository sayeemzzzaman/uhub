@extends('admin.admin_dashboard')
@section('admin')

    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">All Books</h6>
                        <button type="button" class="btn btn-inverse-info mb-3 px-4">Add Book</button>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>auther</th>
                                        <th>shelf</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($books as $book)
                                            <td><img class="wd-50"
                                                    src=" {{ !empty($book->photo) ? url('uploads/book_images/data' . $book->photo) : url('uploads/no_image.jpg') }}"
                                                    alt="Book">
                                            </td>
                                            <td>{{ $book->name }}</td>
                                            <td>{{ $book->auther }}</td>
                                            <td>{{ $book->shelf }}</td>
                                            <td>
                                                <button type="button" class="btn btn-inverse-warning px-4">Edit</button>
                                                <button type="button" class="btn btn-inverse-danger px-4">Delete</button>
                                            </td>
                                        @endforeach

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
