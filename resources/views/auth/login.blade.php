<x-main-layout>
    <div class="w-full h-full flex justify-center items-center">
        <form class="w-full items-center flex flex-col gap-5 max-w-[400px] mx-5 mt-10 rounded-md p-5 bg-white border shadow-md" action="/login" method="POST">
            @csrf

            <div>
                <h1 class="text-lg font-bold text-neutral-600">Log In</h1> 
            </div>
            {{-- Username --}}
            <div class="w-full flex items-start flex-col gap-1">
                <label class="w-full" for="username">Username</label>
                <input class="focus:outline-blue-400 border-2 p-1 w-full" name="username" id="username" type="text" value="{{old('username')}}" required>
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

            <button class="hover:bg-green-600 w-full mx-auto px-3 py-2 bg-green-500 text-white rounded-md duration-200">
                Log In
            </button>
        </form>
    </div>
</x-main-layout>