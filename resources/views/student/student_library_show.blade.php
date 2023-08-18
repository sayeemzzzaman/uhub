@extends('student.student_dashboard')
@section('student')
    {{-- search --}}
    <form action="/student/library/show">
        <div class="relative border-2 border-gray-100 mx-64 my-6 rounded-lg">
            <div class="absolute top-4 left-4">
                <i class=" fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
            </div>
            <input type="text" name="search" class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
                placeholder="Search Projects" />
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
            @foreach ($books as $book)
                <button class="" onclick="mod{{ $book->id }}.showModal()">

                    <div class="card card-compact  bg-base-100 hover:shadow-orange-500 shadow-black shadow-sm">
                        <figure>
                            <img class="w-40 h-100"
                                src=" {{ !empty($book->photo) ? url('uploads/book_images/' . $book->photo) : url('uploads/no_image.jpg') }}"
                                alt="Book">
                        </figure>

                        <div class="card-body">
                            <h2 class="card-title font-me">{{ $book->name }}</h2>
                            <p class="text-sm font-reguler text-left">{{ $book->shelf }}</p>
                        </div>
                    </div>
                </button>
                <dialog id="mod{{ $book->id }}" class="modal">
                    <form method="dialog" class="modal-box max-w-[50%]">
                        <div class="flex justify-around items-center">
                            <figure>
                                <img class="w-40 h-100"
                                    src=" {{ !empty($book->photo) ? url('uploads/book_images/' . $book->photo) : url('uploads/no_image.jpg') }}"
                                    alt="Book">
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title font-me">{{ $book->name }}</h2>
                                <p class="text-sm">{{ $book->description }}</p>
                                <p class="text-sm font-reguler text-left">{{ $book->shelf }}</p>
                                <button class="btn btn-warning text-white bg-orange-500 mt-8 w-[50%]">Requisition</button>
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
        {{ $books->links() }}
    </div>
@endsection
