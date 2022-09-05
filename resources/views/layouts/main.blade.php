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

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="h-sreen bg-gray-100">
    <div class="flex flex-col h-screen"
        style="background-size: 100%; background-repeat: no-repeat; background-image: url('https://images.unsplash.com/photo-1477346611705-65d1883cee1e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80')">
        <div class="py-3 px-12">
            <div class="flex flex-row items-center justify-between">
                <div class="flex flex-row items-center">
                    <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider"
                        class="w-44 bg-orange-500/50 hover:bg-orange-600 rounded-lg p-1 text-white text-center inline-flex items-center mr-2 flex justify-evenly"
                        type="button">Conteúdos <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg></button>

                    <!-- Dropdown menu -->
                    <div id="dropdownDivider" class="hidden bg-neutral-900/50 rounded-md shadow w-44">
                        <ul class="text-sm text-white" aria-labelledby="dropdownDividerButton">
                            @foreach (\App\Models\Category::all() as $categoria)
                                <li>
                                    <a href={{ "/category/{$categoria->id}" }}
                                        class="block px-4 py-2 hover:bg-orange-700 rounded-t">
                                        {{ $categoria->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <h1 class="text-orange-500 text-4xl uppercase bg-neutral-700/50 rounded-full px-2.5"> Knowledge </h1>
                <div class="flex flex-row items-center">
                    <button id="dropdownDefault" data-dropdown-toggle="dropdown"
                        class="w-44 text-white bg-orange-500/50 hover:bg-orange-600 focus:outline-none rounded-lg p-1 text-center inline-flex items-center justify-center"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <h1 class="text-white text-md">
                            @if (Auth::check())
                                <h3>{{ Auth::user()->name }}</h3>
                            @else
                                <h3>Usuário</h3>
                            @endif
                        </h1>
                    </button>
                    <div id="dropdown" class="hidden bg-neutral-900/50 rounded-md shadow w-44">
                        <ul class="text-sm text-white" aria-labelledby="dropdownDefault">
                            @if (Auth::user()->admin)
                                <li>
                                    <a href="/article"
                                        class="block px-4 py-2 hover:bg-orange-600 rounded-t">Dashboard</a>
                                </li>
                            @endif
                            <li>
                                <a href="{{ route('user.logout') }}"
                                    class="block px-4 bg-red-500 py-2 hover:bg-red-600 rounded-b">Sair</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
    </div>
</body>

</html>
