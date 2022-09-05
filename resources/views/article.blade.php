@extends('layouts.adminlayout')

@section('title', 'ADMIN')

@section('content')

    <div class="w-full h-full p-5">
        <div class="h-full w-full bg-gray-300 flex flex-col items-center">
            @if (session('msg'))
                <p class="text-center w-1/5 px-5 mt-5 py-1 rounded border bg-red-500 border-0 uppercase text-white">
                    {{ session('msg') }}</p>
            @endif
            <form action="{{ route('article.store') }}" method="POST"
                class="h-full w-full bg-gray-300 flex flex-col items-center p-10">
                @csrf
                <h1 class="uppercase mb-10 text-lg border-b border-orange-500">Adicionar Artigo</h1>
                <div class="w-full flex flex-col md:flex-row justify-evenly mb-5">
                    <input type="text" class="border-0 rounded w-3/4 md:w-1/5" name="name" required
                        placeholder="Nome do Artigo">
                    <select name="category_id" class="border-0 rounded w-3/4 md:w-1/5 px-2" required>
                        <option value="" class="text-gray-400">Selecione Uma Categoria</option>
                        @foreach ($cats as $cat)
                            <option value={{ $cat->id }}>{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-full h-full">
                    <textarea name="content" id="content" class=" h-full"></textarea>
                </div>
                <button type="submit" class="uppercase w-36 bg-orange-500/75 p-2 mt-5 rounded text-white">Criar</button>
            </form>
        </div>
    </div>






    <script>
        tinymce.init({
            selector: '#content',
            plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
        });
    </script>






@endsection
