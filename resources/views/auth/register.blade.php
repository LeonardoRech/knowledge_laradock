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

    <div class="h-screen flex flex-row">
        <div class="w-1/2 h-screen"
            style="background-repeat: no-repeat; background-image: url('https://images.unsplash.com/photo-1541701494587-cb58502866ab?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80')">
        </div>
        <div class="w-1/2 h-screen bg-gradient-to-b from-orange-600 to-rose-600 flex justify-center items-center">
            <div class="bg-neutral-600 p-14 rounded flex flex-col items-center justify-center">
                @if (session('msg'))
                    <p class="px-5 py-1 rounded border bg-red-500 border-0 uppercase text-white">{{ session('msg') }}
                    </p>
                @endif
                <form action="{{ route('user.create') }}" method="POST">
                    @csrf
                    <div class="border-b border-orange-600 mb-2 w-full text-center">
                        <h1 class="text-white text-lg uppercase">Registrar</h1>
                    </div>
                    <div class="flex flex-col mb-2">
                        <input type="text" class="h-7 border-none rounded" placeholder="Nome*" name="name"
                            required>
                    </div>
                    <div class="flex flex-col mb-2">
                        <input type="text" class="h-7 border-none rounded" placeholder="Email*" name="email"
                            required>
                    </div>
                    <div class="flex flex-col mb-2">
                        <input type="password" class="h-7 border-none rounded" placeholder="Senha" name="password"
                            required>
                    </div>
                    <div class="flex flex-col mb-2">
                        <input type="password" class="h-7 border-none rounded" placeholder="Confirmar Senha"
                            name="confirmpassword" required>
                    </div>
                    <div class="w-full">
                        <button type="submit"
                            class="w-full h-7 bg-orange-500 hover:bg-orange-600 text-white rounded mt-3">Registre-se</button>
                    </div>
                </form>
                <div class="w-full">
                    <a href="/login">
                        <button
                            class="w-full h-7 bg-orange-500 hover:bg-orange-600 text-white rounded mt-3">Entrar</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>
