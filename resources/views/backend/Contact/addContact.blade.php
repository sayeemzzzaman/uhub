@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <div class="page-content">
        <div class="row profile-body">
            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Add Contact</h6>

                                <form class="forms-sample" method="POST" action=" {{ route('admin.contact.store') }} " enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input name="name" type="text" class="form-control @error('name') is-valid @enderror">
                                        @error('name')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="auther" class="form-label">Auther</label>
                                        <input name="auther" type="text" class="form-control @error('auther') is-valid @enderror">
                                        @error('auther')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <input name="description" type="text" class="form-control @error('description') is-valid @enderror">
                                        @error('description')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="shelf" class="form-label">Shelf</label>
                                        <input name="shelf" type="text" class="form-control @error('shelf') is-valid @enderror">
                                        @error('description')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>

                                    {{-- book image --}}

                                    <div class="mb-3">
                                        <label class="form-label" for="photo">Book photo</label>
                                        <input class="form-control" name="bookImageUpload" type="file" id="bookImageUpload">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for=""></label>
                                        <img id="bookImageShow" class="wd-70"
                                            src=" {{ !empty($bookData->photo) ? url('uploads/book_images/' . $bookData->photo) : url('uploads/no_image.jpg') }}"
                                            alt="profile">
                                    </div>

                                    <button type="submit" class="btn btn-primary me-2">Add Book</button>
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
