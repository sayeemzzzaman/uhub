@extends('student.student_dashboard')
@section('student')
    <div class="grid grid-cols-4 h-screen ml-3">
        <div class="px-2 mt-6">
            <div class="card w-auto bg-base-200 shadow-xl">
                <div class="card-body">

                    <img class="py-4" src="{{ !empty($project->logo) ? url('uploads/admin_images/' . $project->logo) : url('uploads/no_image.jpg') }}" />

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
                        <p class="text-gray-600 px-3 py-3"> Liked By {{ $project->like }}</p>
                    </div>
                </div>
            </div>

            @php
                $profileData = App\Models\User::find(Auth::user()->id);
            @endphp
            @if ($profileData->uiuid === $project->owner)
                <div class="card w-auto bg-base-200 shadow-xl mt-6">
                    <div class="card-body">

                        <div class="flex justify-center">
                            <a href="{{ route('student.Projects.edit', $project->id) }}"
                                class="btn px-8 py-2 mr-2  text-white rounded-lg bg-yellow-600 hover:bg-yellow-700">Edit</a>
                            <a href="{{ route('student.Projects.delete', $project->id) }}"
                                class="btn px-8 py-2  text-white rounded-lg bg-red-400 hover:bg-red-500">Delete</a>
                        </div>
                    </div>
                </div>
            @endif

        </div>

        <div class="col-span-3 px-4">
            <div class="card w-auto bg-base-200 shadow-xl mt-6 ">
                <div class="card-body pb-8">
                    <h2 class="text-2xl text-gray-500">Uploaded Files</h2>
                    <div class="grid grid-cols-6 gap-1">
                        <!-- first card -->
                        @foreach ($files as $file)
                            <a href="{{ url('uploads/files/' . $file->link) }}">
                                <div class="mt-2">
                                    <figure><img src="{{ asset('images/file.png') }}" alt="file"></figure>
                                    <h4 class="text-center pt-2">{{ $file->name }}</h4>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card w-auto bg-base-200 shadow-xl mt-6">
                <div class="card-body">
                    <div class="flex">
                        <div class="w-20 rounded-full mr-8">
                            @php
                                $photo = Auth::user()->photo;
                            @endphp
                            <img src="{{ !empty($photo) ? url('uploads/admin_images/' . $photo) : url('uploads/no_image.jpg') }}"
                                class="rounded-full" />
                        </div>
                        <div class="form-control w-full max-w-2xl flex py-4">
                            <form action="{{ route('student.Projects.comment.store') }}" method="post">
                                @csrf
                                <div class="flex">
                                    <input type="text" name="id" value="{{ $project->id }}" hidden>
                                    <input name="message" type="text" placeholder="Type here"
                                        class="input input-bordered w-full mr-2" />
                                    <button type="submit"
                                        class="bg-orange-500 hover:bg-orange-600 px-7 py-2 rounded-lg ml-1 text-white">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="join join-vertical ml-12">
                    @foreach ($comments as $comment)
                        <div class="flex mb-3">
                            <div class="w-16 rounded-full mr-8">
                                <img src="{{ !empty($comment->photo) ? url('uploads/admin_images/' . $comment->photo) : url('images/user.png') }}"
                                    class="rounded-full" />
                            </div>
                            <div class="">
                                <h4 class="text-gray-600 text-xl">{{ $comment->name }}</h4>
                                <p class="">{{ $comment->message }}</p>

                            </div>
                        </div>
                    @endforeach
                </div>
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
