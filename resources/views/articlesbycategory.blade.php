@extends('layouts.main')

@section('title', 'HOME')

@section('content')

    <div class="w-full flex flex-col justify-center items-center mt-10">
        <div class="w-2/3 bg-white mb-3 p-3 rounded">
            <p class="text-center text-2xl">
                {{ $categoria }}
            </p>
        </div>
        <div class="w-2/3 bg-white mb-3 p-10 rounded bg-gray-100 overflow-auto">
            @foreach ($articles as $article)
                <a class="uppercase py-2 mb-5" href={{ "/article/$article->id" }}>
                    <p class="border-b border-t rounded hover:bg-orange-500 border-orange-500 ">{{ $article->name }} -
                        {{ $article->updated_at->year }}</p>
                </a>
            @endforeach
        </div>
    </div>

@endsection
