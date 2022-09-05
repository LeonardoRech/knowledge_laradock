@extends('layouts.main')

@section('title', 'HOME')

@section('content')

    <div class="w-full h-full flex flex-col">
        <div class="w-full flex flex-col justify-center">
            <form action="/" method="GET"
                class="mt-28 2xl:mt-72 w-1/2 flex items-center m-auto border-b border-orange-500 py-2">
                <input class="text-center bg-transparent border-none w-full text-gray-100 mr-3" type="text" name="search"
                    placeholder="PROCURE AQUI O QUE DESEJAS">
            </form>
            <div class="w-full flex items-center flex-col mt-40">
                @if ($search)
                    <h1 class="ml-10 text-orange-600 uppercase text-3xl mb-5">Buscando por:</h1>
                    <div class="w-full flex justify-around items-center flex-col pl-10">
                        @foreach ($artigos as $artigo)
                            <a href={{ "article/$artigo->id" }}
                                class="w-1/4 h-8 mb-5 border border-orange-600 bg-orange-600/25 hover:bg-orange-600 flex items-center justify-center rounded-full">
                                <button class="w-full h-full flex items-center justify-center rounded-full">
                                    <h1 class="text-white uppercase text-lg">{{ $artigo->category->name }} -
                                        {{ $artigo->name }}</h1>
                                </button>
                            </a>
                        @endforeach
                    </div>
                @else
                    <h1 class="ml-10 text-orange-600 uppercase text-3xl mb-5">Últimos Adicionados</h1>
                    <div class="w-full flex justify-around items-center flex-col pl-10">
                        @foreach ($artigos as $artigo)
                            <a href={{ "article/$artigo->id" }}
                                class="w-1/4 h-8 mb-5 border border-orange-600 bg-orange-600/25 hover:bg-orange-600 flex items-center justify-center rounded-full">
                                <button class="w-full h-full flex items-center justify-center rounded-full">
                                    <h1 class="text-white uppercase text-lg">
                                        {{ $artigo->category->name }} - {{ $artigo->name }}
                                    </h1>
                                </button>
                                {{-- {{ $i = 0;
                                $i++;
                                if ($i == 3) {
                                    break;
                                } }} --}}
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection
