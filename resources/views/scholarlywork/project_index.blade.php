@extends('student.student_dashboard')
@section('student')
    <div class="grid grid-cols-4 h-screen m-3">
        <div class="bg-base-100 shadow-xl rounded-md">
            <div class="card w-auto bg-base-10 mt-1">
                <div class="py-2 flex justify-center">
                    <div class="tabs">
                        <a href="{{ route('student.Projects.index') }}" class="tab tab-bordered tab-active">Projects</a>
                        <a href="{{ route('student.paper.index') }}" class="tab tab-bordered">Papers</a>
                    </div>
                </div>
                <div class="card-body py-2 px-5">
                    <div class="flex justify-between mb-2">
                        <h2 class="card-title">My Projects</h2>
                        <a href="{{ route('student.Projects.add') }}"
                            class="px-4 py-1  text-white rounded-lg bg-orange-400 hover:bg-orange-500">Add Project</a>
                    </div>

                    <ul class="menu bg-base-200 w-auto rounded-md">
                        @foreach ($my_projects as $mp)
                            <li><a href="{{ route('student.Projects.show' , $mp->id)}}">{{ $mp->name }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="card-body rounded py-2 px-5">
                    <h2 class="card-title">Contribution</h2>
                    <ul class="menu bg-base-200 w-auto rounded-md">
                        @foreach ($Contribs as $cb)
                            @php
                                $string = $cb->contributors;
                                $contri = explode(',', $string);
                                $flag = 0;
                            @endphp
                            @foreach ($contri as $con)
                                @if ($con === Auth::user()->name)
                                    @php
                                        $flag = 1;
                                    @endphp
                                @endif
                            @endforeach
                            @if ($flag === 1)
                                <li><a href="{{ route('student.Projects.show' , $cb->id)}}">{{ $cb->name }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>

        <div class="col-span-3 px-5">
            <div class="navbar bg-base-100 rounded-md shadow-xl">
                <div class="flex-1">
                    <a href="/student/projects/index?dept=cse" class="btn px-8 py-0 mr-2 hover:bg-orange-500 hover:text-white"> CSE </a>
                    <a href="/student/projects/index?dept=eee" class="btn px-8 py-0 mr-2 hover:bg-orange-500 hover:text-white"> EEE </a>
                    <a href="/student/projects/index?dept=civil" class="btn px-8 py-0 mr-2 hover:bg-orange-500 hover:text-white"> Civil </a>
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
                @foreach ($projects as $project)
                <a href="{{ route('student.Projects.show' , $project->id)}}">
                    <div class="card w-auto bg-base-100 shadow-xl">
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
                            <p>{{ $project->bio }}</p>
                        </div>
                    </div>
                </a>

                @endforeach


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
