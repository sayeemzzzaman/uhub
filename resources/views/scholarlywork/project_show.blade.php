@extends('student.student_dashboard')
@section('student')
    <div class="grid grid-cols-4 h-screen">
        <div class="px-2 mt-8">
            <div class="card w-auto bg-base-200 shadow-xl">
                <div class="card-body">
                    <h2 class="card-title">{{ $project->name }}</h2>

                    <div class="card-actions my-1">
                        @php
                            $string = $project->contributors;
                            $contri = explode(',', $string);
                        @endphp
                        @foreach ($contri as $con)
                            <div class="badge badge-outline">{{ $con }}</div>
                        @endforeach
                    </div>
                    <h4 class="pt-2">Projects Links</h4>

                    <div class="flex">

                        <a href="{{ $project->github }}"
                            class="btn px-8 py-2 mr-2  text-white rounded-lg bg-orange-400 hover:bg-orange-500">Github</a>
                        <a href="{{ $project->scholar }}"
                            class="btn px-8 py-2  text-white rounded-lg bg-orange-400 hover:bg-orange-500">Scholar</a>
                    </div>

                    <h3 class="text-gray-600 mt-2">BIO</h3>
                    <p class="">{{ $project->bio }}</p>

                    <div class="flex mt-2">

                        <a href="#" class="btn bg-orange-400 text-white">Like</a>
                        <p class="text-gray-600 px-3 py-3"> Liked By {{ $project->like}}</p>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="col-span-3 p-5">
        <div class="navbar bg-base-100 shadow-md rounded-md">
            <div class="flex-1">
                <a href="/student/projects/index?dept=cse" class="btn px-8 py-0 mr-2 hover:bg-orange-500 hover:text-white">
                    CSE </a>
                <a href="/student/projects/index?dept=eee" class="btn px-8 py-0 mr-2 hover:bg-orange-500 hover:text-white">
                    EEE </a>
                <a href="/student/projects/index?dept=civil"
                    class="btn px-8 py-0 mr-2 hover:bg-orange-500 hover:text-white"> Civil </a>
            </div>

            <form action="/student/projects/index" class="flex-none gap-2">
                <div class="form-control w-64">
                    <input name="search" type="text" placeholder="Search"
                        class="input input-bordered h-10 w-64 md:w-auto" />
                </div>
                <button type="submit" class="px-10 py-2  text-white rounded-lg bg-orange-400 hover:bg-orange-500">
                    Search
                </button>
            </form>
        </div>
        <div class="grid grid-cols-3 gap-4 px-4 py-6">
            <!-- first card -->



        </div>
    </div>
    <!-- cards -->
    {{-- <div class="grid grid-cols-3 gap-4">
        <!-- first card -->
        <div class="card w-52 bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Shoes!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
            </div>
        </div>
    </div> --}}
    </div>
    </div>
@endsection
