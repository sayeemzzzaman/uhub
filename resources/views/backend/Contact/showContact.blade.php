@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">All Contacts</h6>
                        <a href="{{ route('admin.contact.add') }}" class="btn btn-inverse-info mb-3 px-4">Add Book</a>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>designation</th>
                                        <th>email</th>
                                        <th>description</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books as $book)
                                        <tr>
                                            <td><img class="wd-50"
                                                    src=" {{ !empty($book->photo) ? url('uploads/book_images/' . $book->photo) : url('uploads/no_image.jpg') }}"
                                                    alt="Book">
                                            </td>
                                            <td>{{ $book->name }}</td>
                                            <td>{{ $book->auther }}</td>
                                            <td>{{ $book->shelf }}</td>
                                            <td>
                                                <a href="{{ route('admin.book.edit', $book->id) }}"
                                                    class="btn btn-inverse-warning px-4">Edit</a>
                                                <a href="{{ route('admin.book.delete', $book->id) }}"
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
