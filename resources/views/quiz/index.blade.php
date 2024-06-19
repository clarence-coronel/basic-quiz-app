<x-main-layout>
    <div class="w-full h-full flex justify-center items-center rounded-md p-5">
        <div class="w-full max-w-[1200px]">
            <div class="space-y-4">
                @foreach ($quizzes as $quiz)
                    <a href="/quiz/{{ $quiz->id}}" class="flex justify-between items-center hover:scale-105 duration-200 rounded-md px-4 py-6 border-2 border-neutral-200">
                        <span>
                            {{$quiz->title}}
                        </span>

                        <span class="border-green-500 text-green-500 border-2 aspect-square rounded-full w-10 flex justify-center items-center">10</span>
                    </a>
                @endforeach
            </div>
            <div>
                {{ $quizzes->links() }}
            </div>
        </div>
    </div>
</x-main-layout>