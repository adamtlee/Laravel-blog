@extends('layout')
@section('content')
<section class="section">
    <div class="columns">
        <div class="column is-8 is-offset-2">
            <div class="content is-medium">
                <h2 class="subtitle is-4">{{ $article->created_at }}</h2>
                <h1 class="title">{{ $article->title }}</h1>
                <p>{{ $article->body }}</p>
            </div>
        </div>
    </div>
</section>
@endsection
