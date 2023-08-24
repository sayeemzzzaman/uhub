@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="row profile-body">
            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Edit Requisition</h6>


                                <form class="forms-sample" method="POST" action=" {{ route('admin.requisition.update') }} ">
                                    @csrf

                                    <input name="id" type="text" value="{{ $requisition->id }}" hidden>

                                    <div class="mb-3">
                                        <label for="requisitionsId" class="form-label">Requisitions Id</label>
                                        <input name="requisitionsId" type="text"
                                            value="{{ $requisition->requisitionsId }}"
                                            class="form-control @error('requisitionsId') is-valid @enderror">
                                        @error('requisitionsId')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="studentID" class="form-label">Student ID </label>
                                        <input name="studentID" type="text"
                                            value="{{ $requisition->studentID }}"
                                            class="form-control @error('studentID') is-valid @enderror">
                                        @error('studentID')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="bookID" class="form-label">Book ID</label>
                                        <input name="bookID" type="text" value="{{ $requisition->bookID }}"
                                            class="form-control @error('bookID') is-valid @enderror">
                                        @error('bookID')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="bookName" class="form-label">Book Name</label>
                                        <input name="bookName" type="text" value="{{ $requisition->bookName }}"
                                            class="form-control @error('bookName') is-valid @enderror">
                                        @error('bookName')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        <select name="status" class="form-select" id="status">
                                            <option>pending</option>
                                            <option>accepted</option>
                                            <option>rejected</option>
                                        </select>
                                        @error('status')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>

                

                                    <button type="submit" class="btn btn-primary me-2">Update Requisition</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- middle wrapper end -->
        </div>

    </div>
@endsection
