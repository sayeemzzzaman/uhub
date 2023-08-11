@extends('student.student_dashboard')
@section('student')
    {{-- cards --}}
    <div class="grid grid-cols-4 gap-12 m-1">
        {{-- card 1 --}}


        {{-- modal --}}
        <!-- Open the modal using ID.showModal() method -->
        <button class="" onclick="my_modal_1.showModal()">
            <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                <figure><img src="storage/images/book1.png" alt="Intro to Algorithms" /></figure>
                <div class="card-body">
                    <h2 class="card-title font-me">Intro to Algorithms</h2>
                    <p class="text-sm font-reguler text-left">Shelf 3 : Row 5</p>
                </div>
            </div>
        </button>
        <dialog id="my_modal_1" class="modal">
            <form method="dialog" class="modal-box max-w-[50%]">
                <div class="flex justify-around items-center">
                    <img class="w-56" src=" {{ storage() }} " alt="Intro to Algorithms" /></figure>
                    <div class="card-body">
                        <h2 class="card-title font-me">Introduction to Algorithms</h2>
                        <p class="text-sm">Introduction to Algorithms is a book on computer programming by
                            Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, and Clifford Stein.
                            The book has been widely used as the textbook for algorithms courses at many
                            universities[1] and is commonly cited as a reference for algorithms in published
                            papers, with over 10,000 citations documented on CiteSeerX.</p>
                        <button class="btn btn-warning text-white bg-orange-500 mt-8 w-[50%]">Requisition</button>
                    </div>
                    <div class="modal-action">
                        <!-- if there is a button in form, it will close the modal -->
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    </div>
            </form>
        </dialog>

        <button class="" onclick="my_modal_2.showModal()">
            <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                <figure><img src="storage/images/book2.png" alt="Core JAVA" /></figure>
                <div class="card-body">
                    <h2 class="card-title font-me">Core JAVA</h2>
                    <p class="text-sm font-reguler text-left">Shelf 3 : Row 6</p>
                </div>
            </div>
        </button>
        <dialog id="my_modal_2" class="modal">
            <form method="dialog" class="modal-box max-w-[50%]">
                <div class="flex justify-around items-center">
                    <img class="w-56" src="storage/images/book2.png" alt="Core JAVA" /></figure>
                    <div class="card-body">
                        <h2 class="card-title font-me">Core JAVA</h2>
                        <p class="text-sm">Introduction to Algorithms is a book on computer programming by
                            Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, and Clifford Stein.
                            The book has been widely used as the textbook for algorithms courses at many
                            universities[1] and is commonly cited as a reference for algorithms in published
                            papers, with over 10,000 citations documented on CiteSeerX.</p>
                        <button class="btn btn-warning text-white bg-orange-500 mt-8 w-[50%]">Requisition</button>
                    </div>
                    <div class="modal-action">
                        <!-- if there is a button in form, it will close the modal -->
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    </div>
            </form>
        </dialog>

        <button class="" onclick="my_modal_3.showModal()">
            <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                <figure><img src="storage/images/book3.png" alt="OOP" /></figure>
                <div class="card-body">
                    <h2 class="card-title font-me">OOP</h2>
                    <p class="text-sm font-reguler text-left">Shelf 3 : Row 4</p>
                </div>
            </div>
        </button>
        <dialog id="my_modal_3" class="modal">
            <form method="dialog" class="modal-box max-w-[50%]">
                <div class="flex justify-around items-center">
                    <img class="w-56" src="storage/images/book3.png" alt="OOP" /></figure>
                    <div class="card-body">
                        <h2 class="card-title font-me">OOP</h2>
                        <p class="text-sm">Introduction to Algorithms is a book on computer programming by
                            Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, and Clifford Stein.
                            The book has been widely used as the textbook for algorithms courses at many
                            universities[1] and is commonly cited as a reference for algorithms in published
                            papers, with over 10,000 citations documented on CiteSeerX.</p>
                        <button class="btn btn-warning text-white bg-orange-500 mt-8 w-[50%]">Requisition</button>
                    </div>
                    <div class="modal-action">
                        <!-- if there is a button in form, it will close the modal -->
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    </div>
            </form>
        </dialog>

        <button class="" onclick="my_modal_4.showModal()">
            <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                <figure><img src="storage/images/book4.png" alt="OOP" /></figure>
                <div class="card-body">
                    <h2 class="card-title font-me">Intro to Algorithms</h2>
                    <p class="text-sm font-reguler text-left">Shelf 3 : Row 5</p>
                </div>
            </div>
        </button>
        <dialog id="my_modal_4" class="modal">
            <form method="dialog" class="modal-box max-w-[50%]">
                <div class="flex justify-around items-center">
                    <img class="w-56" src="storage/images/book4.png" alt="Intro to Algorithms" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title font-me">Introduction to Algorithms</h2>
                        <p class="text-sm">Introduction to Algorithms is a book on computer programming by
                            Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, and Clifford Stein.
                            The book has been widely used as the textbook for algorithms courses at many
                            universities[1] and is commonly cited as a reference for algorithms in published
                            papers, with over 10,000 citations documented on CiteSeerX.</p>
                        <button class="btn btn-warning text-white bg-orange-500 mt-8 w-[50%]">Requisition</button>
                    </div>
                    <div class="modal-action">
                        <!-- if there is a button in form, it will close the modal -->
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    </div>
            </form>
        </dialog>

        <button class="" onclick="my_modal_5.showModal()">
            <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                <figure><img src="storage/images/book1.png" alt="Intro to Algorithms" /></figure>
                <div class="card-body">
                    <h2 class="card-title font-me">Intro to Algorithms</h2>
                    <p class="text-sm font-reguler text-left">Shelf 3 : Row 5</p>
                </div>
            </div>
        </button>
        <dialog id="my_modal_5" class="modal">
            <form method="dialog" class="modal-box max-w-[50%]">
                <div class="flex justify-around items-center">
                    <img class="w-56" src="storage/images/book1.png" alt="Intro to Algorithms" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title font-me">Introduction to Algorithms</h2>
                        <p class="text-sm">Introduction to Algorithms is a book on computer programming by
                            Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, and Clifford Stein.
                            The book has been widely used as the textbook for algorithms courses at many
                            universities[1] and is commonly cited as a reference for algorithms in published
                            papers, with over 10,000 citations documented on CiteSeerX.</p>
                        <button class="btn btn-warning text-white bg-orange-500 mt-8 w-[50%]">Requisition</button>
                    </div>
                    <div class="modal-action">
                        <!-- if there is a button in form, it will close the modal -->
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    </div>
            </form>
        </dialog>
        <button class="" onclick="my_modal_6.showModal()">
            <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                <figure><img src="storage/images/book2.png" alt="Core JAVA" /></figure>
                <div class="card-body">
                    <h2 class="card-title font-me">Core JAVA</h2>
                    <p class="text-sm font-reguler text-left">Shelf 3 : Row 6</p>
                </div>
            </div>
        </button>

        <dialog id="my_modal_6" class="modal">
            <form method="dialog" class="modal-box max-w-[50%]">
                <div class="flex justify-around items-center">
                    <img class="w-56" src="storage/images/book2.png" alt="Core JAVA" /></figure>
                    <div class="card-body">
                        <h2 class="card-title font-me">Core JAVA</h2>
                        <p class="text-sm">Introduction to Algorithms is a book on computer programming by
                            Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, and Clifford Stein.
                            The book has been widely used as the textbook for algorithms courses at many
                            universities[1] and is commonly cited as a reference for algorithms in published
                            papers, with over 10,000 citations documented on CiteSeerX.</p>
                        <button class="btn btn-warning text-white bg-orange-500 mt-8 w-[50%]">Requisition</button>
                    </div>
                    <div class="modal-action">
                        <!-- if there is a button in form, it will close the modal -->
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    </div>
            </form>
        </dialog>

        <button class="" onclick="my_modal_7.showModal()">
            <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                <figure><img src="storage/images/book3.png" alt="OOP" /></figure>
                <div class="card-body">
                    <h2 class="card-title font-me">OOP</h2>
                    <p class="text-sm font-reguler text-left">Shelf 3 : Row 4</p>
                </div>
            </div>
        </button>
        <dialog id="my_modal_7" class="modal">
            <form method="dialog" class="modal-box max-w-[50%]">
                <div class="flex justify-around items-center">
                    <img class="w-56" src="storage/images/book3.png" alt="OOP" /></figure>
                    <div class="card-body">
                        <h2 class="card-title font-me">OOP</h2>
                        <p class="text-sm">Introduction to Algorithms is a book on computer programming by
                            Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, and Clifford Stein.
                            The book has been widely used as the textbook for algorithms courses at many
                            universities[1] and is commonly cited as a reference for algorithms in published
                            papers, with over 10,000 citations documented on CiteSeerX.</p>
                        <button class="btn btn-warning text-white bg-orange-500 mt-8 w-[50%]">Requisition</button>
                    </div>
                    <div class="modal-action">
                        <!-- if there is a button in form, it will close the modal -->
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    </div>
            </form>
        </dialog>

        <button class="" onclick="my_modal_8.showModal()">
            <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                <figure><img src="storage/images/book4.png" alt="OOP" /></figure>
                <div class="card-body">
                    <h2 class="card-title font-me">Intro to Algorithms</h2>
                    <p class="text-sm font-reguler text-left">Shelf 3 : Row 5</p>
                </div>
            </div>
        </button>
        <dialog id="my_modal_8" class="modal">
            <form method="dialog" class="modal-box max-w-[50%]">
                <div class="flex justify-around items-center">
                    <img class="w-56" src="storage/images/book4.png" alt="Intro to Algorithms" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title font-me">Introduction to Algorithms</h2>
                        <p class="text-sm">Introduction to Algorithms is a book on computer programming by
                            Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, and Clifford Stein.
                            The book has been widely used as the textbook for algorithms courses at many
                            universities[1] and is commonly cited as a reference for algorithms in published
                            papers, with over 10,000 citations documented on CiteSeerX.</p>
                        <button class="btn btn-warning text-white bg-orange-500 mt-8 w-[50%]">Requisition</button>
                    </div>
                    <div class="modal-action">
                        <!-- if there is a button in form, it will close the modal -->
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    </div>
            </form>
        </dialog>
    </div>
    </div>
    </section>
    </main>
@endsection
