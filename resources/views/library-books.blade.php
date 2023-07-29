<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UHUB</title>
    <link rel="shortcut icon" href="storage/images/uhub-logo.png" type="image/x-icon">
    {{-- tailwind --}}
    @vite('resources/css/app.css')

    {{-- Lato font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <style>
        .font-lato {
            font-family: 'Lato', sans-serif;
        }

    </style>

</head>
<body class="font-lato">
    <header>
        {{-- nav bar --}}
        <nav class="">
            <div class="navbar bg-gray-800 text-white font-medium">
                <div class="flex-1">
                    <a class="btn btn-ghost normal-case text-4xl font-bold text-orange-500">UHUB</a>
                </div>
                <div class="list-none">
                    <li class="pr-4"><a href="">Dashboard</a></li>
                    <li class="pr-4"><a href="">Library</a></li>
                    <li class="pr-4"><a href="">Staff Info</a></li>
                    <li class="pr-4"><a href="">Scholarly Works</a></li>
                    <li class="pr-4"><a href="">Counselling</a></li>
                    <li class="pr-4"><a href="">Club Archive</a></li>
                </div>
                <div class="flex-none gap-2">
                    {{-- search bar --}}
                    {{-- <div class="form-control">
                        <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
                    </div> --}}

                    <div class="dropdown dropdown-end">
                        <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                            <div class="w-10 rounded-full">
                                <img src="storage/images/profile-pic.jpg" />
                            </div>
                        </label>
                        <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                            <li>
                                <a class="justify-between">
                                    Profile
                                    <span class="badge">New</span>
                                </a>
                            </li>
                            <li><a>Settings</a></li>
                            <li><a>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        {{-- available books --}}
        <section>
            <div>
                {{-- title --}}
                <h1 class="text-4xl font-bold mt-12 ml-8">Computer Science & Engineering</h1>
            </div>
            {{-- cards --}}
            <div class="grid grid-cols-4 gap-12 m-12">
                {{-- card 1 --}}
                <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                    <figure><img src="storage/images/book1.png" alt="Intro to Algorithms" /></figure>
                    <div class="card-body">
                        <h2 class="card-title font-me">Intro to Algorithms</h2>
                        <p class="text-sm font-reguler">Shelf 3 : Row 5</p>
                    </div>
                </div>
                <div class="card card-compact bg-base-100 shadow-orange-500 shadow-sm">
                    <figure><img src="storage/images/book2.png" alt="Intro to Algorithms" /></figure>
                    <div class="card-body">
                        <h2 class="card-title font-me">Intro to Algorithms</h2>
                        <p class="text-sm font-reguler">Shelf 3 : Row 5</p>
                    </div>
                </div>
                <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                    <figure><img src="storage/images/book3.png" alt="Intro to Algorithms" /></figure>
                    <div class="card-body">
                        <h2 class="card-title font-me">Intro to Algorithms</h2>
                        <p class="text-sm font-reguler">Shelf 3 : Row 5</p>
                    </div>
                </div>
                <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                    <figure><img src="storage/images/book4.png" alt="Intro to Algorithms" /></figure>
                    <div class="card-body">
                        <h2 class="card-title font-me">Intro to Algorithms</h2>
                        <p class="text-sm font-reguler">Shelf 3 : Row 5</p>
                    </div>
                </div>
                <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                    <figure><img src="storage/images/book1.png" alt="Intro to Algorithms" /></figure>
                    <div class="card-body">
                        <h2 class="card-title font-me">Intro to Algorithms</h2>
                        <p class="text-sm font-reguler">Shelf 3 : Row 5</p>
                    </div>
                </div>
                <div class="card card-compact bg-base-100 shadow-orange-500 shadow-sm">
                    <figure><img src="storage/images/book2.png" alt="Intro to Algorithms" /></figure>
                    <div class="card-body">
                        <h2 class="card-title font-me">Intro to Algorithms</h2>
                        <p class="text-sm font-reguler">Shelf 3 : Row 5</p>
                    </div>
                </div>
                <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                    <figure><img src="storage/images/book3.png" alt="Intro to Algorithms" /></figure>
                    <div class="card-body">
                        <h2 class="card-title font-me">Intro to Algorithms</h2>
                        <p class="text-sm font-reguler">Shelf 3 : Row 5</p>
                    </div>
                </div>
                <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                    <figure><img src="storage/images/book4.png" alt="Intro to Algorithms" /></figure>
                    <div class="card-body">
                        <h2 class="card-title font-me">Intro to Algorithms</h2>
                        <p class="text-sm font-reguler">Shelf 3 : Row 5</p>
                    </div>
                </div>
            </div>
            <div>
                {{-- title --}}
                <h1 class="text-4xl font-bold mt-12 ml-8">Electrical and Electronic Engineering</h1>
            </div>
            {{-- cards --}}
            <div class="grid grid-cols-4 gap-12 m-12">
                {{-- card 1 --}}
                <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                    <figure><img src="storage/images/book1.png" alt="Intro to Algorithms" /></figure>
                    <div class="card-body">
                        <h2 class="card-title font-me">Intro to Algorithms</h2>
                        <p class="text-sm font-reguler">Shelf 3 : Row 5</p>
                    </div>
                </div>
                <div class="card card-compact bg-base-100 shadow-orange-500 shadow-sm">
                    <figure><img src="storage/images/book2.png" alt="Intro to Algorithms" /></figure>
                    <div class="card-body">
                        <h2 class="card-title font-me">Intro to Algorithms</h2>
                        <p class="text-sm font-reguler">Shelf 3 : Row 5</p>
                    </div>
                </div>
                <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                    <figure><img src="storage/images/book3.png" alt="Intro to Algorithms" /></figure>
                    <div class="card-body">
                        <h2 class="card-title font-me">Intro to Algorithms</h2>
                        <p class="text-sm font-reguler">Shelf 3 : Row 5</p>
                    </div>
                </div>
                <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                    <figure><img src="storage/images/book4.png" alt="Intro to Algorithms" /></figure>
                    <div class="card-body">
                        <h2 class="card-title font-me">Intro to Algorithms</h2>
                        <p class="text-sm font-reguler">Shelf 3 : Row 5</p>
                    </div>
                </div>
                <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                    <figure><img src="storage/images/book1.png" alt="Intro to Algorithms" /></figure>
                    <div class="card-body">
                        <h2 class="card-title font-me">Intro to Algorithms</h2>
                        <p class="text-sm font-reguler">Shelf 3 : Row 5</p>
                    </div>
                </div>
                <div class="card card-compact bg-base-100 shadow-orange-500 shadow-sm">
                    <figure><img src="storage/images/book2.png" alt="Intro to Algorithms" /></figure>
                    <div class="card-body">
                        <h2 class="card-title font-me">Intro to Algorithms</h2>
                        <p class="text-sm font-reguler">Shelf 3 : Row 5</p>
                    </div>
                </div>
                <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                    <figure><img src="storage/images/book3.png" alt="Intro to Algorithms" /></figure>
                    <div class="card-body">
                        <h2 class="card-title font-me">Intro to Algorithms</h2>
                        <p class="text-sm font-reguler">Shelf 3 : Row 5</p>
                    </div>
                </div>
                <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                    <figure><img src="storage/images/book4.png" alt="Intro to Algorithms" /></figure>
                    <div class="card-body">
                        <h2 class="card-title font-me">Intro to Algorithms</h2>
                        <p class="text-sm font-reguler">Shelf 3 : Row 5</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>

    </footer>
</body>
</html>
