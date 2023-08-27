@extends('student.student_dashboard')
@section('student')
    <div class="grid grid-cols-4 h-screen m-3">
        <div class="bg-base-100 shadow-xl">
            <div class="card w-auto bg-base-10 mt-1">
                <div class="py-2 flex justify-center">
                    <div class="tabs">
                        <a href="{{ route('student.Projects.index') }}" class="tab tab-bordered ">Projects</a>
                        <a href="{{ route('student.paper.index') }}" class="tab tab-bordered tab-active">Papers</a>
                    </div>
                </div>
                <div class="card-body py-2 px-5">
                    <div class="flex justify-between">
                        <h2 class="card-title">My Papers</h2>
                        <a href="{{ route('student.paper.add') }}"
                            class="px-4 py-1  text-white rounded-lg bg-orange-400 hover:bg-orange-500">Add Project</a>
                    </div>

                    <ul class="menu bg-base-200 w-auto">
                        @foreach ($my_papers as $mp)
                            <li><a href="{{ route('student.paper.show', $mp->id) }}">{{ $mp->name }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="card-body rounded py-2 px-5">
                    <h2 class="card-title">Contribution</h2>
                    <ul class="menu bg-base-200 w-auto">
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
                                <li><a href="{{ route('student.paper.show', $cb->id) }}">{{ $cb->name }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>

        <div class="col-span-3 px-5">
            <div class="navbar bg-base-100 rounded-md shadow-xl">
                <div class="flex-1">
                    <a href="/student/paper/index?dept=cse"
                        class="btn px-8 py-0 mr-2 hover:bg-orange-500 hover:text-white"> CSE </a>
                    <a href="/student/paper/index?dept=eee"
                        class="btn px-8 py-0 mr-2 hover:bg-orange-500 hover:text-white"> EEE </a>
                    <a href="/student/paper/index?dept=civil"
                        class="btn px-8 py-0 mr-2 hover:bg-orange-500 hover:text-white"> Civil </a>
                </div>

                <form action="/student/paper/index" class="flex-none gap-2">
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
                @foreach ($papers as $paper)
                <a href="{{ route('student.paper.show', $paper->id) }}">
                    <div class="card w-auto bg-base-100 shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title">{{ $paper->name }}</h2>

                            <div class="card-actions my-1">
                                @php
                                    $string = $paper->contributors;
                                    $contri = explode(',', $string);
                                @endphp
                                @foreach ($contri as $con)
                                    <div class="badge badge-outline">{{ $con }}</div>
                                @endforeach
                            </div>
                            <p>{{ $paper->bio }}</p>
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
