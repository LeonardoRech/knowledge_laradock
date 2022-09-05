@extends('layouts.adminlayout')

@section('title', 'ADMIN')

@section('content')

    <div class="w-full h-full p-5">
        <div class="rounded h-full w-full bg-gray-300 flex flex-col justify-center items-center">
            @if (session('msg'))
                <p class="text-center w-1/5 px-5 mt-5 py-1 rounded border bg-red-500 border-0 uppercase text-white">
                    {{ session('msg') }}</p>
            @endif
            <form action="{{ route('category.store') }}" method="POST"
                class="w-full bg-gray-300 flex flex-col items-center p-10">
                @csrf
                <h1 class="uppercase border-b border-orange-500 mb-5">
                    Adicionar Nova Categoria
                </h1>
                <input type="text" name="name" placeholder="Nova Categoria" class="rounded border-0 w-2/5">
                <button type="submit"
                    class="uppercase mt-5 bg-orange-500/75 py-1 px-2 rounded text-white">Adicionar</button>
            </form>
            <div class="w-1/3  flex flex-col items-center justify-center">
                @foreach ($categorias as $categoria)
                    <div class="bg-white rounded w-1/2 mb-2 text-center">
                        <a href={{ "category/$categoria->id" }}>{{ $categoria->name }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>





@endsection
