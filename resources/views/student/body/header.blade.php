<header>
    {{-- nav bar --}}
    @php
        $id = Auth::user()->id;
        $profileData = App\Models\User::find($id);
    @endphp
    <div class="navbar bg-neutral">
        <div class="navbar-start ml-12">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </label>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a>Item 1</a></li>
                    <li>
                        <a>Parent</a>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </li>
                    <li><a>Item 3</a></li>
                </ul>
            </div>

            <img class="w-48" src="{{ asset('images/ulogocrop.png') }}" alt="">
        </div>
        <div class="navbar-center hidden text-white lg:flex">
            <ul class="menu menu-horizontal px-4">
                <li class="hover:text-orange-400"><a href="{{ route('student.dashboard') }}">Dashboard</a></li>
                <li class="hover:text-orange-400"><a href="{{ route('student.library.show') }}">Library</a></li>
                <li class="hover:text-orange-400"><a href="{{ route('student.project.show') }}">Scholarly Works</a></li>
                <li class="hover:text-orange-400"><a href="{{ route('student.club.show') }}">Club Archive</a></li>
                <li class="hover:text-orange-400 pr-4" tabindex="0" >
                    <details>
                        <summary>Staff Info</summary>
                        <ul class="p-2 bg-neutral text-white">
                            <li class="hover:text-orange-400"><a href="{{ route('student.staff.faculty') }}">Faculty info</a></li>
                            <li class="hover:text-orange-400"><a href="{{ route('student.staff.staffOther') }}">Other staff</a></li>
                        </ul>
                    </details>
                </li>

            </ul>
        </div>
        <div class="navbar-end mr-12">
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img
                            src="{{ !empty($profileData->photo) ? url('uploads/admin_images/' . $profileData->photo) : url('uploads/no_image.jpg') }}" />
                    </div>
                </label>
                <ul tabindex="0"
                    class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-neutral text-white rounded-box w-52">

                    <li class="pb-2 pt-2 text-center">{{ $profileData->name }}</li>
                    <li class="pb-4 text-center">{{ $profileData->uiuid }}</li>
                    <li class="hover:text-orange-400" ><a>Settings</a></li>
                    <li class="hover:text-orange-400" ><a href="{{ route('student.logout') }}">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

</header>
