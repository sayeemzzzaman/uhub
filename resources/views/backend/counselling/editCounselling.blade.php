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
                                <h6 class="card-title">Edit Counselling</h6>


                                <form class="forms-sample" method="POST" action=" {{ route('admin.counselling.update') }} ">
                                    @csrf

                                    <input name="id" type="text" value="{{ $counselling->id }}" hidden>

                                    <div class="mb-3">
                                        <label for="studentId" class="form-label">Student Id</label>
                                        <input name="studentId" type="text" value="{{ $counselling->studentId }}"
                                            class="form-control @error('studentId') is-valid @enderror">
                                        @error('studentId')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="day" class="form-label">Day</label>
                                        <input name="day" type="text" value="{{ $counselling->day }}"
                                            class="form-control @error('day') is-valid @enderror">
                                        @error('day')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>


                                    <div class="mb-3">
                                        <label for="time" class="form-label">Time</label>
                                        <input name="time" type="text" value="{{ $counselling->time }}"
                                            class="form-control @error('time') is-valid @enderror">
                                        @error('time')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="faculty" class="form-label">Faculty</label>
                                        <input name="faculty" type="faculty" value="{{ $counselling->faculty }}"
                                            class="form-control @error('faculty') is-valid @enderror">
                                        @error('faculty')
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



                                    <button type="submit" class="btn btn-primary me-2">Update Counselling</button>
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
