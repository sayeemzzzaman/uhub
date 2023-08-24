@extends('student.student_dashboard')
@section('student')
    {{-- search --}}
    <form action="/student/faculty/faculty">
        <div class="relative border-2 border-gray-100 mx-64 my-6 rounded-lg">
            <div class="absolute top-4 left-4">
                <i class=" fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
            </div>
            <input type="text" name="search" class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
                placeholder="Search Contacts" />
            <div class="absolute top-2 right-3">
                <button type="submit" class="h-10 w-20 text-white rounded-lg bg-orange-400 hover:bg-orange-500">
                    Search
                </button>
            </div>
        </div>
    </form>

    <div class="flex justify-center">
        <div class="grid grid-cols-5 gap-12 m-1">
            {{-- modal --}}
            <!-- Open the modal using ID.showModal() method -->
            @foreach ($contacts as $contact)
                <button class="" onclick="mod{{ $contact->id }}.showModal()">

                    <div class="card card-compact  bg-base-100 hover:shadow-orange-500 shadow-black shadow-sm">
                        <figure>
                            <img class="w-40 h-100"
                                src=" {{ !empty($contact->image) ? url('uploads/contact_images/' . $contact->image) : url('uploads/no_image.jpg') }}"
                                alt="Book">
                        </figure>

                        <div class="card-body">
                            <h2 class="card-title font-me">{{ $contact->name }}</h2>
                            <p class="text-sm font-reguler text-left">{{ $contact->email }}</p>
                        </div>
                    </div>
                </button>
                <dialog id="mod{{ $contact->id }}" class="modal">
                    <form method="dialog" class="modal-box max-w-[50%]">

                        <div class="flex justify-around items-center">
                            <figure>
                                <img class="w-40 h-100"
                                    src=" {{ !empty($contact->image) ? url('uploads/contact_images/' . $contact->image) : url('uploads/no_image.jpg') }}"
                                    alt="Book">
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title font-me">{{ $contact->name }}</h2>
                                <p class="text-sm font-reguler pb-4 text-left">{{ $contact->email }}</p>
                                <p class="text-sm">{{ $contact->description }}</p>
                                <form action="">
                                    <div class="form-control w-full max-w-xs">
                                        <label class="label">
                                            <span class="label-text">Select time for counseling</span>
                                        </label>
                                        <select class="select select-bordered">
                                            <option disabled selected>Select Time</option>
                                            @php
                                                $string = $contact->counseling_hour;
                                                $counseling = explode(',', $string);
                                            @endphp
                                            @foreach ($counseling as $coun)
                                                <option>{{ $coun }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <button class="btn btn-warning text-white bg-orange-500 mt-8 w-[50%]">Request
                                        counseling</button>
                                </form>
                            </div>
                            <div class="modal-action">
                                <!-- if there is a button in form, it will close the modal -->
                                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                            </div>
                    </form>
                </dialog>
            @endforeach



        </div>
    </div>

    {{-- paginate code --}}
    <div class="mt-6 p-4 mx-12">
        {{ $contacts->links() }}
    </div>
@endsection
