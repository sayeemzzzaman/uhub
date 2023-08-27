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
                                <h6 class="card-title">Add Message</h6>

                                <form class="forms-sample" method="POST" action=" {{ route('admin.message.store') }} ">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="subject" class="form-label">subject </label>
                                        <input name="subject" type="text" class="form-control @error('subject') is-valid @enderror">
                                        @error('subject')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="msg" class="form-label">Message</label>
                                        <input name="msg" type="text" class="form-control @error('msg') is-valid @enderror">
                                        @error('msg')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary me-2">Publish Messege</button>
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
