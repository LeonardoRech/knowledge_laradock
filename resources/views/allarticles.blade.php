@extends('layouts.adminlayout')

@section('title', 'ADMIN')

@section('content')

    <div class="w-full h-full p-5">
        <div class="rounded h-full w-full bg-gray-300 flex flex-col justify-center items-center">
            <div class="w-full md:w-1/3  flex flex-col items-center justify-center">
                @foreach ($articles as $article)
                    <div class="bg-white rounded w-1/2 mb-2 text-center flex flex-row items-center justify-center py-2">
                        <a href={{ "/article/$article->id" }}>{{ $article->name }}</a>
                        <a href="/article/edit/{{ $article->id }}" class="text-yellow-500 mx-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </a>
                        <form action="/article/delete/{{ $article->id }}" method="POST" class="flex items-center">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 mx2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
