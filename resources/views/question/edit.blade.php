@php
    $choices = $question->choices;

    $answer = null;

    foreach ($choices as $choice) {
       if($choice->id === $question->choice_id) $answer = $choice;
    }
@endphp

<x-main-layout>
    <div class="w-full h-full flex justify-center items-center">
        <form class="w-full flex flex-col gap-5 max-w-[700px] mx-5 mt-10 rounded-md p-5 bg-white border shadow-md" action="/question/{{$question->id}}/edit" method="POST">
            @csrf

            <div>
                <h1 class="text-lg font-bold text-neutral-600">Edit Question</h1>
            </div>

            <div class="w-full flex items-start flex-col gap-1">
                <label class="font-semibold w-full" for="content">Question</label>
                <input class="focus:outline-blue-400 border-2 p-1 w-full" name="content" id="content" type="text" value="{{$question->content}}" required>
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
                        <input class="focus:outline-blue-400 border-2 p-1 w-full" name="choice_a" id="choice_a" type="text" value="{{$question->choices[0]->content}}" required>
                        @error('choice_a')
                            <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-1/6 flex justify-center items-center">
                        <input type="radio" name="answer" id="answer" required value="choice_a" {{ $answer->content === $question->choices[0]->content ? "checked" : ""}}>
                    </div>
                </div>
                <div class="flex gap-3">
                    <div class="w-5/6 flex items-start flex-col gap-1">
                        <input class="focus:outline-blue-400 border-2 p-1 w-full" name="choice_b" id="choice_b" type="text" value="{{$question->choices[1]->content}}" required>
                        @error('choice_b')
                            <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-1/6 flex justify-center items-center">
                        <input type="radio" name="answer" id="answer" required value="choice_b" {{ $answer->content === $question->choices[1]->content ? "checked" : ""}}>
                    </div>
                </div>
                <div class="flex gap-3">
                    <div class="w-5/6 flex items-start flex-col gap-1">
                        <input class="focus:outline-blue-400 border-2 p-1 w-full" name="choice_c" id="choice_c" type="text" value="{{$question->choices[2]->content}}" required>
                        @error('choice_c')
                            <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-1/6 flex justify-center items-center">
                        <input type="radio" name="answer" id="answer" required value="choice_c" {{ $answer->content === $question->choices[2]->content ? "checked" : ""}}>
                    </div>
                </div>
                <div class="flex gap-3">
                    <div class="w-5/6 flex items-start flex-col gap-1">
                        <input class="focus:outline-blue-400 border-2 p-1 w-full" name="choice_d" id="choice_d" type="text" value="{{$question->choices[3]->content}}" required>
                        @error('choice_d')
                            <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-1/6 flex justify-center items-center">
                        <input type="radio" name="answer" id="answer" required {{ $answer->content === $question->choices[3]->content ? "checked" : ""}}>
                    </div>
                </div>
            </div>

            <div class="max-md:flex-col flex gap-3 flex-row-reverse mt-5">
                <button class="max-md:max-w-none hover:bg-green-600 w-full max-w-[300px] mx-auto px-3 py-2 bg-green-500 text-white rounded-md duration-200">Edit</button>
                <a class="text-center max-md:max-w-none hover:bg-neutral-400 w-full max-w-[300px] mx-auto px-3 py-2 bg-neutral-300 text-white rounded-md duration-200" href="/quiz/{{$question->quiz_id}}">Back</a>
            </div>
        </form>
    </div>
</x-main-layout>