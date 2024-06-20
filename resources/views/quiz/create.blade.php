<x-main-layout>
    <div class="w-full h-full flex justify-center items-center">
        <form class="w-full flex flex-col gap-3 max-w-[700px] mx-5 mt-10 rounded-md p-5 bg-white border shadow-md" action="/quiz/create" method="POST">
            @csrf
            @method("PUT")

            <div>
                <h1 class="text-lg font-bold text-neutral-600">Create Quiz</h1>
            </div>

            <div class="w-full flex items-start flex-col gap-1">
                <label class="w-full" for="title">Title</label>
                <input class="focus:outline-blue-400 border-2 p-1 w-full" name="title" id="title" type="text" value="{{old('title')}}" required>
                @error('title')
                    <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                @enderror
            </div>

            <div class="w-full flex items-start flex-col gap-1">
                <label class="w-full" for="about">About</label>
                <textarea name="about" id="about" class="resize-y focus:outline-blue-400 border-2 p-1 w-full" required> {{old('about')}} </textarea>
                @error('about')
                    <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                @enderror
            </div>

            {{-- <div class="relative flex flex-col gap-3 border-2 p-5">
                <div class="-right-2 -top-2 absolute flex justify-end">
                    <button class="group duration-200 bg-white">
                        <svg class="group-hover:text-red-600 duration-200 text-red-500" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 36 36"><path fill="currentColor" d="M18 2a16 16 0 1 0 16 16A16 16 0 0 0 18 2m8 22.1a1.4 1.4 0 0 1-2 2l-6-6l-6 6.02a1.4 1.4 0 1 1-2-2l6-6.04l-6.17-6.22a1.4 1.4 0 1 1 2-2L18 16.1l6.17-6.17a1.4 1.4 0 1 1 2 2L20 18.08Z" class="clr-i-solid clr-i-solid-path-1"/><path fill="none" d="M0 0h36v36H0z"/></svg>
                    </button>
                </div>
                
                <div class="flex flex-col gap-3">
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
            </div> 

            <button class="hover:bg-neutral-300 duration-200 w-full bg-neutral-200 text-white flex justify-center items-center py-2 px-1 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 24 24"><g fill="none"><path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M10.5 20a1.5 1.5 0 0 0 3 0v-6.5H20a1.5 1.5 0 0 0 0-3h-6.5V4a1.5 1.5 0 0 0-3 0v6.5H4a1.5 1.5 0 0 0 0 3h6.5z"/></g></svg>
            </button>
                --}}
            <button class="max-md:max-w-none hover:bg-green-600 w-full max-w-[300px] mx-auto px-3 py-2 bg-green-500 text-white rounded-md duration-200">Create</button>
        </form>
    </div>
</x-main-layout>