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
                                <h6 class="card-title">Add club</h6>

                                <form class="forms-sample" method="POST" action=" {{ route('admin.club.update') }} "
                                    enctype="multipart/form-data">
                                    @csrf

                                    <input name="id" type="text" value="{{ $club->id }}" hidden>

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input name="name" type="text" value="{{ $club->name }}"
                                            class="form-control @error('name') is-valid @enderror">
                                        @error('name')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="formLink" class="form-label">Form Link</label>
                                        <input name="formLink" type="text" value="{{ $club->formLink }}"
                                            class="form-control @error('auther') is-valid @enderror">
                                        @error('formLink')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <input name="description" type="text" value="{{ $club->Description }}"
                                            class="form-control @error('description') is-valid @enderror">
                                        @error('description')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>

                                    {{-- club image --}}

                                    <div class="mb-3">
                                        <label class="form-label" for="photo">club photo</label>
                                        <input class="form-control" name="clubImageUpload" type="file"
                                            id="clubImageUpload">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for=""></label>
                                        <img id="clubImageShow" class="wd-70"
                                            src=" {{ !empty($club->logo) ? url('uploads/club_images/' . $club->logo) : url('uploads/no_image.jpg') }}"
                                            alt="profile">
                                    </div>

                                    <button type="submit" class="btn btn-primary me-2">Update club</button>
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
            $('#clubImageUpload').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#clubImageShow').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
