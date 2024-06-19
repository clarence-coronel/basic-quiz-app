<x-main-layout>
    <div class="w-full h-full flex justify-center items-center">
        <form class="w-full flex flex-col gap-5 max-w-[700px] mx-5 my-10 rounded-md p-5 bg-white border shadow-md" action="/register" method="POST">
            @csrf

            <div>
                <h1 class="text-lg font-bold text-neutral-600">Create Quiz</h1>
            </div>

            <div class="w-full flex items-start flex-col gap-1">
                <label class="w-full" for="title">Title</label>
                <input class="focus:outline-blue-400 border-2 p-1 w-full" name="title" id="title" type="text" value="{{old('title')}}" required>
                @error('username')
                    <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                @enderror
            </div>

            <div class="w-full flex items-start flex-col gap-1">
                <label class="w-full" for="about">About</label>
                <textarea name="about" id="about" class="resize-y focus:outline-blue-400 border-2 p-1 w-full" value="{{old('about')}}" required></textarea>
                @error('password')
                    <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col gap-3 border-2 p-5">
                <div class="w-full flex items-start flex-col gap-1">
                    <label class="w-full" for="title">Question</label>
                    <input class="focus:outline-blue-400 border-2 p-1 w-full" name="title" id="title" type="text" value="{{old('title')}}" required>
                    @error('username')
                        <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-full flex items-start flex-col gap-1">
                    <label class="w-full" for="title">Answer</label>
                    <input class="focus:outline-blue-400 border-2 p-1 w-full" name="title" id="title" type="text" value="{{old('title')}}" required>
                    @error('username')
                        <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                    @enderror
                </div>                
            </div>

            <button class="max-md:max-w-none hover:bg-green-600 w-full max-w-[300px] mx-auto px-3 py-2 bg-green-500 text-white rounded-md duration-200">Register</button>
        </form>
    </div>
</x-main-layout>