@extends('layout')

@section('content')

<section class = "section">
    <h1>The Blog page.</h1>
    </section>

    @foreach ($articles as $article)
    <div class="is-divider"></div>

        <section class="section">
            <div class="columns">
                <div class="column is-8 is-offset-2">
                    <div class="content is-medium">
                        <h2 class="subtitle is-4">December 25, 2018</h2>
                        <h1 class="title">
                            <a href="/blogs/{{ $article->id }}">{{ $article->title }}</a>
                        </h1>
                        <p>{{ $article->excerpt }}</p>
                    </div>
                </div>
            </div>
        </section>
    @endforeach


@endsection