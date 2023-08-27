@extends('student.student_dashboard')
@section('student')
    <div class="grid grid-cols-5 gap-12 mx-32 my-8">
        <div class="col-span-3">

            <div class="overflow-x-auto bg-neutral-100 rounded-md px-4 mb-6 shadow-xl">
                <h2 class="p-4">Requisition History</h2>
                <table class="table">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>Requisitions ID</th>
                            <th>Book ID</th>
                            <th>Book Name</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($requisitions as $requisition)
                            <tr>
                                <td>{{ $requisition->requisitionsId }} </td>
                                <td>{{ $requisition->bookID }} </td>
                                <td>{{ $requisition->bookName }} </td>
                                <td>{{ $requisition->status }} </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            <div class="overflow-x-auto bg-neutral-100 rounded-md px-4 shadow-xl">
                <h2 class="p-4">Counselling History</h2>
                <table class="table">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>Faculty</th>
                            <th>Day</th>
                            <th>Time</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($counsellings as $counselling)
                            <tr>
                                <td>{{ $counselling->faculty }}</td>
                                <td>{{ $counselling->day }}</td>
                                <td>{{ $counselling->time }}</td>
                                <td>{{ $counselling->status }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>

        <div class="col-span-2">
            <div class="overflow-x-auto pb-6 bg-neutral-100 rounded-md px-4 shadow-xl">
                <h2 class="pt-6 px-4">Notification</h2>
                <table class="table">
                    <tbody>
                        <tr class="join join-vertical w-auto">
                            @foreach ($Messages as $msg)
                                <td class="w-auto">
                                    <button onclick="modal{{ $msg->id }}.showModal()">
                                        <div class="card">
                                            <div class="rounded-lg bg-gray-400 h-1 mb-2"></div>
                                            {{ $msg->subject }}
                                        </div>

                                    </button>
                                    <dialog id="modal{{ $msg->id }}" class="modal">
                                        <form method="dialog" class="modal-box">
                                            <h3 class="font-bold text-lg">Subject : {{ $msg->subject }}</h3>
                                            <p class="py-4">{{ $msg->message }}</p>
                                        </form>
                                        <form method="dialog" class="modal-backdrop">
                                            <button>close</button>
                                        </form>
                                    </dialog>
                                </td>
                            @endforeach
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>

    </div>
@endsection
