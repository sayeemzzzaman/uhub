@extends('student.student_dashboard')
@section('student')
<div class="grid grid-cols-4 ">
    <div class="shadow-md w-auto my-8 col-span-2 col-start-2">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Create a Project</h2>
            <p class="mb-4 text-orange-500">You can also add people to your project</p>
        </header>

        <form method="POST" action="{{ route('student.Projects.store') }}" enctype="multipart/form-data" class="p-8">
            @csrf
            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2">Project Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                    placeholder="Example: Smart Car"  />

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>



            <div class="mb-6">
                <label for="contributors" class="inline-block text-lg mb-2">
                    Contributors name (Comma Separated)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="contributors"
                    placeholder="Example: saad, etc" />

                @error('contributors')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="github" class="inline-block text-lg mb-2">
                    Github Link
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="github"
                    placeholder="link" />

                @error('github')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="github" class="inline-block text-lg mb-2">
                    Scholar Link
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="Scholar"
                    placeholder="link" />

                @error('Scholar')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="bio" class="inline-block text-lg mb-2">
                    Bio
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="bio"
                    placeholder="bio" />

                @error('bio')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="dept" class="inline-block text-lg mb-2">Depertment</label>
                <select name="dept"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option value="cse">cse</option>
                    <option value="eee">eee</option>
                    <option value="civil">civil</option>
                </select>

                @error('dept')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="status" class="inline-block text-lg mb-2">status</label>
                <select name="status"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option value="public">public</option>
                    <option value="private">private</option>
                </select>

                @error('status')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="rounded text-white py-2 px-4 bg-orange-400 hover:bg-orange-500">
                    Create Project
                </button>

                <a href="{{ route('student.Projects.show') }}" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </div>
</div>


@endsection
