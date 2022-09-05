@extends('layouts.main')

@section('title', 'HOME')

@section('content')

    <div class="w-4/5 h-5/6 flex flex-col mx-auto pt-20">
        <h1 class="w-full text-center text-2xl py-3 bg-gray-100 rounded uppercase mb-10 border border-orange-500">{{$article->name}}</h1>
        <div class="w-full h-5/6 bg-gray-100 pt-5 px-5 rounded border border-orange-500 overflow-auto">{!!$article->content!!}</div>
    </div>

@endsection