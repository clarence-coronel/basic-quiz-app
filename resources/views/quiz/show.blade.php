<x-main-layout>
    <div class="w-full flex justify-center items-center mt-10 p-2">
        <div class="flex flex-col gap-10 w-full max-w-[1200px]">
            <div class="flex justify-between items-center border-b-2 pb-5">
                <div>
                    <h1 class="text-lg font-bold">{{ Str::upper($quiz->title) }}</h1>
                    <span>{{$quiz->about}}</span>
                </div>
                <div class="flex gap-3">
                    <a class="group hover:scale-110 duration-200" href="/quiz/{{$quiz->id}}/edit">
                        <svg class="group-hover:text-blue-500 duration-200 text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M7 7H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1"/><path d="M20.385 6.585a2.1 2.1 0 0 0-2.97-2.97L9 12v3h3zM16 5l3 3"/></g></svg>
                    </a>
                    <button form="delete_quiz" class="hover:scale-110 duration-200">
                        <svg class="hover:text-red-500 text-neutral-400 duration-200" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 24 24"><path fill="currentColor" d="M7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zm2-4h2V8H9zm4 0h2V8h-2z"/></svg>
                    </button>
                    <form class="hidden" id="delete_quiz" action="/quiz/{{$quiz->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>      
            <div class="space-y-3">
                <h2 class="text-lg font-semibold flex gap-5 items-center">
                    <span>Questions </span>   

                    @php
                        $question_length = count($quiz->questions);
                        $color = '';

                        if($question_length <= 0) $color = 'red';
                        else if($question_length <= 5) $color = 'orange';
                        else if($question_length > 5) $color = 'green';
                    @endphp
                    <span class="border-{{$color}}-500 text-{{$color}}-500 border-2 aspect-square rounded-full w-10 flex justify-center items-center">
                        {{ $question_length }}
                    </span>
                    
                </h2>
                <div class="max-md:grid-cols-1 grid grid-cols-2 gap-5">
                    @foreach ($quiz->questions as $question)
                        <div class="flex items-center justify-between border-2 border-neutral-400 rounded-md p-5">
                            <span>
                                {{ Str::limit($question->content, 40) }}
                            </span>

                            <div class="flex gap-3 items-center justify-end">
                                <a class="hover:scale-110 duration-200" href="/question/{{$question->id}}/edit">
                                    <svg class="hover:text-blue-500 duration-200 text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M7 7H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1"/><path d="M20.385 6.585a2.1 2.1 0 0 0-2.97-2.97L9 12v3h3zM16 5l3 3"/></g></svg>
                                </a>
                                <button form="delete_question_{{$question->id}}" class="hover:scale-110 duration-200">
                                    <svg class="hover:text-red-500 text-neutral-400 duration-200" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 24 24"><path fill="currentColor" d="M7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zm2-4h2V8H9zm4 0h2V8h-2z"/></svg>
                                </button>
                                <form class="hidden" id="delete_question_{{$question->id}}" action="/question/{{$question->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </div>
                    @endforeach

                    <a href="/quiz/{{$quiz->id}}/question/create" class="hover:bg-neutral-400 hover:border-neutral-400 duration-200 font-bold bg-neutral-300 text-white flex items-center justify-between border-2 border-neutral-300 rounded-md p-5">
                        Add New Question
                    </a>
                </div>
            </div>
        </div>


    </div>

    <script>
        function copyToClipboard() {
            var text = document.getElementById("textToCopy").innerText;
            navigator.clipboard.writeText(text)
                .then(function() {
                    alert('Text copied to clipboard');
                })
                .catch(function(err) {
                    console.error('Failed to copy: ', err);
                });
        }
    </script>
</x-main-layout>