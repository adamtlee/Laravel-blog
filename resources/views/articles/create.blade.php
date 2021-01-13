@extends('layout')

@section('head')
<section class = "section">
    <p>This section on renders in create - create a new blog</p>
</section>
@endsection

@section('content')
    <section class="section">
        <div class="columns">
            <div class="column is-8 is-offset-2">
                <div class="content is-medium">
                    <h1 class="title">
                        New Blog Post
                    </h1>

                    <form method="POST" action="/blogs">
                        @csrf
                        <label class="label" for="title">Title</label>

                        <div class="control">
                            <input class="input {{ $errors->has('title') ? 'is-danger': '' }}" type="text" name="title" id="title" >
                            @if ($errors->has('title'))
                                <p class="help is-danger">{{ $errors->first('title') }}</p>
                            @endif
                        </div>

                        <div class="field">
                            <label class="label" for="excerpt">Excerpt</label>

                            <div class="control">
                                <textarea class="textarea" name="excerpt" id="excerpt"></textarea>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label" for="body">Body</label>

                            <div class="control">
                                <textarea class="textarea" name="body" id="body"></textarea>
                            </div>
                        </div>

                        <div class="field is-grouped">
                            <div class="control">
                                <button class="button is-link" type="submit">Submit</submit>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection