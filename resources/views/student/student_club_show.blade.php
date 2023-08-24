@extends('student.student_dashboard')
@section('student')
    {{-- search --}}
    <form action="/student/club/show">
        <div class="relative border-2 border-gray-100 mx-64 my-6 rounded-lg">
            <div class="absolute top-4 left-4">
                <i class=" fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
            </div>
            <input type="text" name="search" class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
                placeholder="Search Clubs" />
            <div class="absolute top-2 right-3">
                <button type="submit" class="h-10 w-20 text-white rounded-lg bg-orange-400 hover:bg-orange-500">
                    Search
                </button>
            </div>
        </div>
    </form>

    <div class="flex justify-center">
        <div class="grid grid-cols-3 gap-12 mx-24">
            {{-- modal --}}
            <!-- Open the modal using ID.showModal() method -->
            @foreach ($clubs as $club)
                <button class="" onclick="mod{{ $club->id }}.showModal()">
                    <div class="card card-compact  bg-base-100 hover:shadow-orange-500 shadow-black shadow-sm">
                        <div class="card w-96 bg-base-100 shadow-xl image-full">
                            <figure><img class="w-40 h-100"
                                    src=" {{ !empty($club->logo) ? url('uploads/club_images/' . $club->logo) : url('uploads/no_image.jpg') }}"
                                    alt="club">
                            </figure>
                            <div class="card-body ">
                                <h2 class="card-title font-me">{{ $club->name }}</h2>
                            </div>
                        </div>
                    </div>

                </button>
                <dialog id="mod{{ $club->id }}" class="modal">
                    {{-- <form method="dialog" class="modal-box max-w-[50%]"> --}}
                    <div class="modal-box max-w-[50%]">
                        <div class="flex justify-around items-center">
                            <figure>
                                <img class="w-40 h-100"
                                    src=" {{ !empty($club->logo) ? url('uploads/club_images/' . $club->logo) : url('uploads/no_image.jpg') }}"
                                    alt="club">
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title font-me">{{ $club->name }}</h2>
                                <p class="text-sm">{{ $club->description }}</p>
                                <button class="btn btn-warning text-white bg-orange-500 mt-8 w-[50%]">
                                    <a href="{{ $club->formLink }}">Join Club</a>
                                </button>
                            </div>
                            <div class="modal-action">
                                <!-- if there is a button in form, it will close the modal -->
                                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                            </div>
                        </div>
                    </div>
                </dialog>
            @endforeach



        </div>
    </div>

    {{-- paginate code --}}
    <div class="mt-6 p-4 mx-12">
        {{ $clubs->links() }}
    </div>
@endsection
