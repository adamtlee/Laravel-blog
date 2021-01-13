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
                            <input 
                                class="input @error('title') is-danger @enderror" 
                                type="text" 
                                name="title" 
                                id="title" 
                                value= "{{ old('title') }}">
                            @error('title')
                                <p class="help is-danger">{{ $errors->first('title') }}</p>
                            @enderror
                        </div>

                        <div class="field">
                            <label class="label" for="excerpt">Excerpt</label>

                            <div class="control">
                                <textarea 
                                    class="textarea @error('excerpt') is-danger @enderror" 
                                    name="excerpt" 
                                    id="excerpt">{{ old('excerpt') }}</textarea>
                                @error('excerpt')
                                    <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label class="label" for="body">Body</label>

                            <div class="control">
                                <textarea 
                                    class="textarea @error('body') is-danger @enderror" 
                                    name="body" 
                                    id="body">{{ old('body') }}</textarea>
                            </div>
                            @error('body')
                                <p class="help is-danger">{{ $errors->first('body') }}</p>
                            @enderror
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