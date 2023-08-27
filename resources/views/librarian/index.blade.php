@extends('librarian.librarian_dashboard')
@section('librarian')

<div class="page-content">

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Requisition Request</h6>
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
                                            <form class="forms-sample" method="POST" action=" {{ route('admin.requisition.quickUpdate') }} ">
                                                @csrf
                                                <input name="id" type="text" value="{{ $requisition->id }}" hidden>
                                                <div class="mb-2">

                                                    <select name="status" class="form-select" id="status">
                                                        <option>pending</option>
                                                        <option>accepted</option>
                                                        <option>rejected</option>
                                                    </select>
                                                </div>

                                                <button type="submit" class="btn btn-inverse-warning me-2">Update Requisition</button>
                                            </form>
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
