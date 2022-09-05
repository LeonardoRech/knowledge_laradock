<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PROJETO C - @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
    <script src="https://cdn.tiny.cloud/1/6exqfsmrnbqsa93ku2964pm62gfih7j2dbkr7btqrzr42r70/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="https://cdn.tiny.cloud/1/6exqfsmrnbqsa93ku2964pm62gfih7j2dbkr7btqrzr42r70/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 dark:bg-gray-900 w-full">
    <div class="h-screen flex flex-col">
        <div class="h-12 bg-gray-900 flex flex-col border-b border-white">

        </div>
        <div class="flex flex-row h-full font-thin">
            <div class="h-full w-16 bg-gray-900 text-white">
                <div class="w-full h-16 hover:bg-gray-800 border-b border-white">
                    <a href="/" class="h-full w-full flex flex-col justify-center items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <p class="text-xs">Home</p>
                    </a>
                </div>
                <div class="w-full h-16 hover:bg-gray-800 border-b border-white">
                    <a href="{{ route('article.view') }}"
                        class="h-full w-full flex flex-col justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                        <p class="text-xs">Novo</p>
                    </a>
                </div>
                <div class="w-full h-16 hover:bg-gray-800 border-b border-white">
                    <a href="/allarticles" class="h-full w-full flex flex-col justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                        </svg>
                        <p class="text-xs">Artigos</p>
                    </a>
                </div>
                <div class="w-full h-16 hover:bg-gray-800 border-b border-white">
                    <a href="{{ route('category.view') }}"
                        class="h-full w-full flex flex-col justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                        </svg>
                        <p class="text-xs">Categ.</p>
                    </a>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
</body>

</html>
