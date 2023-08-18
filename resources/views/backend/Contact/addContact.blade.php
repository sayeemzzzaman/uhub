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
                                        <label for="email" class="form-label">Email</label>
                                        <input name="email" type="email" class="form-control @error('email') is-valid @enderror">
                                        @error('email')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
										<label for="designation" class="form-label">Designation</label>
										<select name="designation" class="form-select" id="exampleFormControlSelect1">
											<option selected="" disabled="">Select Designation</option>
											<option>Faculty</option>
											<option>Lab attendent</option>
											<option>TA</option>
										</select>
									</div>

                                    <div class="mb-3">
										<label for="description" class="form-label">Description</label>
										<textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
									</div>

                                    {{-- book image --}}

                                    <div class="mb-3">
                                        <label class="form-label" for="photo">Contact Photo</label>
                                        <input class="form-control" name="contactImageUpload" type="file" id="contactImageUpload">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for=""></label>
                                        <img id="bookImageShow" class="wd-70"
                                            src=" {{ !empty($contact->image) ? url('uploads/contact_images/' . $contact->image) : url('uploads/no_image.jpg') }}"
                                            alt="profile">
                                    </div>

                                    <button type="submit" class="btn btn-primary me-2">Add contact</button>
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
            $('#contactImageUpload').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#bookImageShow').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
