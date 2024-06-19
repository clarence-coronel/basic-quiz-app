<x-main-layout>
    <div class="w-full h-full flex justify-center items-center rounded-md p-5">
        <div class="w-full max-w-[1200px]">
            <div class="space-y-4">
                @if (count($quizzes) === 0)
                    <div class="flex justify-center items-center">
                        <span>You currently don't own any Quizzes...</span>
                    </div>
                @endif

                @foreach ($quizzes as $quiz)
                    <a href="/quiz/{{ $quiz->id}}" class="flex justify-between items-center hover:scale-105 duration-200 rounded-md px-4 py-6 border-2 border-neutral-200">
                        <span>
                            {{Str::upper($quiz->title)}}
                        </span>

                        
                        @php
                            $question_length = count($quiz->questions);
                            $color = '';

                            if($question_length <= 0) $color = 'red';
                            else if($question_length <= 5) $color = 'orange';
                            else if($question_length > 5) $color = 'green';
                        @endphp
                        <span class="border-{{$color}}-500 text-{{$color}}-500 border-2 aspect-square rounded-full w-10 flex justify-center items-center">
                            {{$question_length}}
                        </span>
                    </a>
                @endforeach
            </div>
            <div>
                {{ $quizzes->links() }}
            </div>
        </div>
    </div>
</x-main-layout>