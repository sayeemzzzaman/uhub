@extends('student.student_dashboard')
@section('student')
    <div class="grid grid-cols-4 h-screen ml-3">
        <div class="px-2 mt-6">
            <div class="card w-auto bg-base-200 shadow-xl">
                <div class="card-body">
                    <form action="{{ route('student.Projects.update') }}" method="POST">
                        @csrf
                        <input type="text " name="id" value="{{ $project->id }}" hidden>
                        <label for="day" class="form-label">name</label>
                        <div class="card-actions my-1">
                            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                                value="{{ $project->name }}" />

                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <label for="contributors" class="form-label">contributors</label>
                        <div class="card-actions my-1">
                            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="contributors"
                                value="{{ $project->contributors }}" placeholder="contributors" />

                            @error('contributors')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <h4 class="pt-2">Projects Links</h4>
                        <div class="card-actions my-1">
                            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="github"
                                value="{{ $project->github }}" placeholder="github Link" />

                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="card-actions my-1">
                            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="scholar"
                                value="{{ $project->scholar }}" placeholder="scholar link" />

                            @error('scholar')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <h3 class="text-gray-600 mt-2">BIO</h3>
                        <div class="card-actions my-1">
                            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="bio"
                                value="{{ $project->bio }}" />

                            @error('bio')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit"
                            class="bg-orange-400 hover:bg-orange500 text-white py-2 px-10 mt-4 roundedlg">Save</button>


                    </form>

                </div>
            </div>


        </div>

        <div class="col-span-3 px-4">
            <div class="card w-auto bg-base-200 shadow-xl mt-6 ">
                <div class="card-body pb-8">
                    <div class="flex">
                        <h2 class="text-2xl flex-1 text-gray-500">Uploaded Files</h2>

                        <button class="btn bg-orange-400 hover:bg-orange-500 text-white"
                            onclick="my_modal_3.showModal()">Add File</button>
                        <dialog id="my_modal_3" class="modal">
                            <div class="modal-box">
                                <h3 class="mb-2 ">Chose your File</h3>
                                <form action="{{ route('student.Projects.file.add') }}" method="post"  enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" name="id" value="{{$project->id}}" hidden>
                                    <input type="text" class="p-1 my-2" name="name" placeholder="File name">
                                    <input type="file" name="file">
                                    <button type='submit'
                                        class="btn mt-4 px-10 bg-orange-400 hover:bg-orange-500 text-white">upload
                                        file</button>
                                </form>
                            </div>

                        </dialog>
                    </div>

                    <div class="overflow-x-auto col-span-2 bg-neutral-100 rounded-md px-4 shadow-xl pb-4">

                        <table class="table">
                            <!-- head -->
                            <thead>
                                <tr>
                                    <th class="text-xl">name</th>
                                    <th class="text-xl">action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($files as $file)
                                    <tr class="mb-3">
                                        <td>{{ $file->name }}</td>
                                        <td>
                                            <a href="{{ route('student.Projects.file.delete', $file->id) }}"
                                                class="bg-red-400 px-12 py-2 rounded-lg hover:bg-red-500 text-white">Delete</a>

                                        <td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
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
