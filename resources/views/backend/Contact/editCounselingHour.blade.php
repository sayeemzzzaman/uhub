@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <div class="page-content">
        <div class="row profile-body">
            <!-- middle wrapper start -->
            <div class="col-md-12 col-xl-12 middle-wrapper">
                <div class="row">

                    <div class="col-md-7 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Counseling houer of {{ $contacts->name }}</h6>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Day</th>
                                                <th>Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($counseling !== NULL)
                                                @foreach ($counseling as $coun)
                                                    @php
                                                        $coun = explode('_', $coun);
                                                    @endphp

                                                    <tr>
                                                        <th> {{ $coun[0] }} </th>
                                                        <td> {{ $coun[1] }} </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                            <tr>
                                                <th> No dates </th>

                                            </tr>
                                            @endunless


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Edit Contact</h6>

                                <form class="forms-sample" method="POST"
                                    action=" {{ route('admin.contact.updateCounselingHour') }} "
                                    enctype="multipart/form-data">
                                    @csrf

                                    <input name="id" type="text" value="{{ $contacts->id }}" hidden>

                                    <div class="mb-3">
                                        <label for="cday" class="form-label">Day</label>
                                        <select name="cday" class="form-select" id="cday">
                                            <option>Tuesday</option>
                                            <option>Wednesday</option>
                                            <option>Thursday</option>
                                            <option>Friday</option>
                                            <option>Saturday</option>
                                            <option>Sunday</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="ctime" class="form-label">Time</label>
                                        <select name="ctime" class="form-select" id="ctime">
                                            <option>10:00AM - 12:30 PM</option>
                                            <option>2:00 PM - 4:30 PM</option>
                                            <option>11:30 AM - 12:30 PM</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary me-2">Add counseling hour</button>
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
