<x-main-layout>
    <div class="w-full h-full flex justify-center items-center">
        <form class="w-full flex flex-col gap-3 max-w-[700px] mx-5 mt-10 rounded-md p-5 bg-white border shadow-md" action="/quiz/{{$quiz_id}}/question/create" method="POST">
            @csrf

            <div>
                <h1 class="text-lg font-bold text-neutral-600">Add Question</h1>
            </div>

            <div class="w-full flex items-start flex-col gap-1">
                <label class="w-full font-semibold" for="content">Question</label>
                <input class="focus:outline-blue-400 border-2 p-1 w-full" name="content" id="content" type="text" value="{{old('content')}}" required>
                @error('content')
                    <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                @enderror
            </div>


            <div class="flex flex-col gap-3">
                <div class="flex justify-between items-center">
                    <h2 class="font-semibold">Choices</h2>
                </div>
                <div class="flex gap-3">
                    <div class="w-5/6 flex items-start flex-col gap-1">
                        <input class="focus:outline-blue-400 border-2 p-1 w-full" name="choice_a" id="choice_a" type="text" value="{{old('choice_a')}}" required>
                        @error('choice_a')
                            <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-1/6 flex justify-center items-center">
                        <input type="radio" name="answer" id="answer" required value="choice_a">
                    </div>
                </div>
                <div class="flex gap-3">
                    <div class="w-5/6 flex items-start flex-col gap-1">
                        <input class="focus:outline-blue-400 border-2 p-1 w-full" name="choice_b" id="choice_b" type="text" value="{{old('choice_b')}}" required>
                        @error('choice_b')
                            <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-1/6 flex justify-center items-center">
                        <input type="radio" name="answer" id="answer" required value="choice_b">
                    </div>
                </div>
                <div class="flex gap-3">
                    <div class="w-5/6 flex items-start flex-col gap-1">
                        <input class="focus:outline-blue-400 border-2 p-1 w-full" name="choice_c" id="choice_c" type="text" value="{{old('choice_c')}}" required>
                        @error('choice_c')
                            <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-1/6 flex justify-center items-center">
                        <input type="radio" name="answer" id="answer" required value="choice_c">
                    </div>
                </div>
                <div class="flex gap-3">
                    <div class="w-5/6 flex items-start flex-col gap-1">
                        <input class="focus:outline-blue-400 border-2 p-1 w-full" name="choice_d" id="choice_d" type="text" value="{{old('choice_d')}}" required>
                        @error('choice_d')
                            <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-1/6 flex justify-center items-center">
                        <input type="radio" name="answer" id="answer" required>
                    </div>
                </div>
            </div>

            <button class="max-md:max-w-none hover:bg-green-600 w-full max-w-[300px] mx-auto px-3 py-2 bg-green-500 text-white rounded-md duration-200">Create</button>
        </form>
    </div>
</x-main-layout>