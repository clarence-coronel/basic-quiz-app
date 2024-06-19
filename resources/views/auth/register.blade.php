<x-main-layout>
    <div class="w-full h-full flex justify-center items-center">
        <form class="w-full flex flex-col gap-5 max-w-[700px] mx-5 mt-10 rounded-md p-5 bg-white border shadow-md" action="/register" method="POST">
            @csrf

            <div>
                <h1 class="text-lg font-bold text-neutral-600">Register a New Account</h1>
                <span class="text-sm">We'll just need a handful of details from you.</span>
            </div>

            {{-- Full Name --}}
            <div class="w-full flex gap-5 max-md:flex-col">
                <div class="max-md:w-full w-1/2 flex items-start flex-col gap-1">
                    <label class="w-full" for="first_name">First Name</label>
                    <input class="focus:outline-blue-400 border-2 p-1 w-full" name="first_name" id="first_name" type="text" placeholder="Clarence" value="{{old('first_name')}}" required>
                    @error('first_name')
                        <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                    @enderror
                </div>

                <div class="max-md:w-full w-1/2 flex items-start flex-col gap-1">
                    <label class="w-full" for="last_name">Last Name</label>
                    <input class="focus:outline-blue-400 border-2 p-1 w-full" name="last_name" id="last_name" type="text" placeholder="Coronel" value="{{old('last_name')}}" required>
                    @error('last_name')
                        <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            {{-- Username --}}
            <div class="w-full flex items-start flex-col gap-1">
                <label class="w-full" for="username">Username</label>
                <input class="focus:outline-blue-400 border-2 p-1 w-full" name="username" id="username" type="text" placeholder="Satoru123" value="{{old('username')}}" required>
                @error('username')
                    <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password & Confirm Password --}}
            <div class="w-full flex items-start flex-col gap-1">
                <label class="w-full" for="password">Password</label>
                <input class="focus:outline-blue-400 border-2 p-1 w-full" name="password" id="password" type="password" required>
                @error('password')
                    <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                @enderror
            </div>

            <div class="w-full flex items-start flex-col gap-1">
                <label class="w-full" for="password_confirmation">Confirm Password</label>
                <input class="focus:outline-blue-400 border-2 p-1 w-full" name="password_confirmation" id="password_confirmation" type="password" required>
                @error('password_confirmation')
                    <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                @enderror
            </div>

            {{-- Account Type --}}
            <div class="flex flex-col items-center">
                <div class="flex gap-5 justify-center">
                    <label for="type_student" class="flex items-center justify-start gap-1">
                        <input type="radio" name="type" id="type_student" value="student" required>
                        Student
                    </label>
    
                    <label for="type_teacher" class="flex items-center justify-start gap-1">
                        <input type="radio" name="type" id="type_teacher" value="teacher" required>
                        Teacher
                    </label>
                </div>
                @error('type')
                    <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                @enderror
            </div>

            <button class="max-md:max-w-none hover:bg-green-600 w-full max-w-[300px] mx-auto px-3 py-2 bg-green-500 text-white rounded-md duration-200">Register</button>
        </form>
    </div>
</x-main-layout>