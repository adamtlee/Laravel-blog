@extends('layout')

@section('content')

<section class = "section">
    <h1>The Blog page.</h1>

    @foreach ($articles as $article)
        <h3>{{ $article->title }}</h3>
        <p>{{ $article->excerpt }}</p>
    @endforeach
</section>

@endsection