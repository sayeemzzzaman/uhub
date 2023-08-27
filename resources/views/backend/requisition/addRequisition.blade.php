@extends('librarian.librarian_dashboard')
@section('librarian')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <div class="page-content">
        <div class="row profile-body">
            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title"> Requisition</h6>

                                <form class="forms-sample" method="POST" action=" {{ route('admin.requisition.store') }} "
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="requisitionsId" class="form-label">Requisition Id</label>
                                        <input name="requisitionsId" type="text"
                                            class="form-control @error('requisitionsId') is-valid @enderror">
                                        @error('requisitionsId')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="bookID" class="form-label">book ID</label>
                                        <input name="bookID" type="text"
                                            class="form-control @error('bookID') is-valid @enderror">
                                        @error('studentID')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>


                                    <div class="mb-3">
                                        <label for="studentID" class="form-label">Student ID</label>
                                        <input name="studentID" type="text"
                                            class="form-control @error('studentID') is-valid @enderror">
                                        @error('studentID')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="bookName" class="form-label">Book Name</label>
                                        <input name="bookName" type="text"
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

                                    <button type="submit" class="btn btn-primary me-2">Add Requisitionw</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- middle wrapper end -->
        </div>

    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#bookImageUpload').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#bookImageShow').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
