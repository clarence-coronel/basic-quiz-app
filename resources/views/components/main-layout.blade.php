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
    <header class="w-full bg-white shadow-sm border-b">
        <div class="w-full max-w-[1200px] mx-auto flex justify-between py-5 px-3">
            <nav class="flex gap-5">
                {{-- View all quizzes for User --}}
                <a href="/" class="group relative text-neutral-500 px-2 py-1 rounded-md font-semibold duration-200">
                    <span>Home</span>
                    <div class="group-hover:w-full duration-200 absolute bottom-0 left-1/2 translate-x-[-50%] w-0 h-0.5 bg-neutral-400 rounded-full"></div>
                </a>
                
                {{-- Must also check if Teacher type user --}}
                @auth
                    <a href="/quiz/create" class="group relative text-neutral-500 px-2 py-1 rounded-md font-semibold duration-200">
                        <span>Create New Quiz</span>
                        <div class="group-hover:w-full duration-200 absolute bottom-0 left-1/2 translate-x-[-50%] w-0 h-0.5 bg-neutral-400 rounded-full"></div>
                    </a>
                @endauth
            </nav>
            
            @auth
                <form action="/logout" method="POST">
                    @csrf
                    <button class="hover:bg-red-600 font-semibold duration-200 text-white bg-red-500 px-3 py-1 rounded-full">Sign Out</button>
                </form>
            @endauth

            @guest
                <div class="flex gap-5">
                    <a href="/login" class="group relative text-neutral-500 px-2 py-1 rounded-md font-semibold duration-200">
                        <span>Log In</span>
                        <div class="group-hover:w-full duration-200 absolute bottom-0 left-1/2 translate-x-[-50%] w-0 h-0.5 bg-neutral-400 rounded-full"></div>
                    </a>
                    <a href="/register" class="group relative text-neutral-500 px-2 py-1 rounded-md font-semibold duration-200">
                        <span>Register</span>
                        <div class="group-hover:w-full duration-200 absolute bottom-0 left-1/2 translate-x-[-50%] w-0 h-0.5 bg-neutral-400 rounded-full"></div>
                    </a>
                </div>
            @endguest
        </div>
    </header>

    <main class="w-full h-fit">
        {{ $slot }}
    </main>
</body>
</html>