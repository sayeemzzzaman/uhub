@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Faculty Contacts</h6>
                        <a href="{{ route('admin.contact.add') }}" class="btn btn-inverse-info mb-3 px-4">Add Contact</a>
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
                                    @foreach ($contacts as $contact)
                                        <tr>
                                            <td><img class="wd-50"
                                                    src=" {{ !empty($contact->image) ? url('uploads/contact_images/' . $contact->image) : url('uploads/no_image.jpg') }}"
                                                    alt="contact">
                                            </td>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->designation }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>
                                                <a href="{{ route('admin.contact.edit', $contact->id) }}"
                                                    class="btn btn-inverse-warning px-3">Edit</a>
                                                <a href="{{ route('admin.contact.delete', $contact->id) }}"
                                                    class="btn btn-inverse-danger px-3" id="delete">Delete</a>
                                                <a href="{{ route('admin.contact.counselingHour', $contact->id) }}"
                                                    class="btn btn-inverse-info px-3" >Counseling Hour</a>
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
