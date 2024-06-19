<!DOCTYPE html>
<html class="w-full h-full" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Quiz App</title>
</head>
<body class="w-full h-full bg-white">
    <header class="sticky top-0 left-0 w-full bg-white shadow-sm border-b">
        <div class="w-full max-w-[1200px] mx-auto flex justify-between py-5 px-3">
            <nav class="flex items-center gap-5">
                
                {{-- <h1 class="flex gap-1 mr-16 items-center text-neutral-600 font-bold rounded-md text-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 24 24"><path fill="currentColor" d="M13.5 14.539q.31 0 .545-.236t.236-.545t-.236-.545t-.545-.236t-.545.236t-.236.545t.236.545t.545.235m-.442-2.815h.884q.039-.629.199-.947q.159-.318.767-.888q.634-.576.884-1.03q.25-.452.25-1.039q0-1.01-.72-1.683q-.72-.674-1.822-.674q-.833 0-1.48.45t-.985 1.227l.811.357q.283-.586.69-.88t.964-.293q.716 0 1.187.424q.47.424.47 1.095q0 .408-.228.759q-.229.351-.787.845q-.632.552-.858 1.013t-.226 1.264M8.116 17q-.691 0-1.153-.462T6.5 15.385V4.615q0-.69.463-1.153T8.116 3h10.769q.69 0 1.153.462t.462 1.153v10.77q0 .69-.462 1.152T18.884 17zm-3 3q-.691 0-1.153-.462T3.5 18.385V6.615h1v11.77q0 .23.192.423t.423.192h11.77v1z"/></svg>

                    Quiz App
                </h1> --}}
                {{-- View all quizzes for User --}}
                <x-nav-link href="/quiz">My Quizzes</x-nav-link>
                
                {{-- Must also check if Teacher type user --}}
                @auth
                <x-nav-link href="/quiz/create">Create Quiz</x-nav-link>
                @endauth
            </nav>
            
            @auth
                <form action="/logout" method="POST">
                    @csrf
                    <button class="hover:scale-110 font-semibold duration-200 text-red-500 px-3 py-1 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 256 256"><path fill="currentColor" d="M124 216a12 12 0 0 1-12 12H48a12 12 0 0 1-12-12V40a12 12 0 0 1 12-12h64a12 12 0 0 1 0 24H60v152h52a12 12 0 0 1 12 12m108.49-96.49l-40-40a12 12 0 0 0-17 17L195 116h-83a12 12 0 0 0 0 24h83l-19.52 19.51a12 12 0 0 0 17 17l40-40a12 12 0 0 0 .01-17"/></svg>
                    </button>
                </form>
            @endauth

            @guest
                <div class="flex gap-5">
                    <x-nav-link href="/login">Log In</x-nav-link>
                    <x-nav-link href="/register">Register</x-nav-link>
                </div>
            @endguest
        </div>
    </header>

    <main class="w-full h-fit">
        {{ $slot }}
    </main>
</body>
</html>