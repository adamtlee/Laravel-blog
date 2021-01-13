@extends('layout')

@section('content')
  <!-- Image 
  <section class="hero ">
    <div class="hero-body">
      <div class="container">
        <div class="columns">
          <div class="column is-8 is-offset-2">
            <figure class="image is-10by10">
              <img src="./images/AdamLeeStudio.png" alt="">
            </figure>
          </div>
        </div>

        <section class="section">
          <div class="columns">
            <div class="column is-8 is-offset-2">
              <div class="content is-medium">
                <h2 class="subtitle is-4">December 25, 2018</h2>
                <h1 class="title">Getting Started</h1>
                <p>This is a starter template for creating a beautiful, customizable blog with minimal
                  effort. You’ll only have to change a few settings and you’re ready to go. As with all Jigsaw sites,
                  configuration settings can be found in config</p>
              </div>
            </div>
          </div>
        </section>
        -->

        <section class="hero is-medium has-text-centered">
          <div class="hero-body">
            <div class="container">
              <div class="columns is-centered">
                <div data-aos="zoom-in-up" class="column is-8">
                  <h1 class="title titled is-1 mb-6">
                    I am a <span id="typewriter"></span>
                  </h1>
                  <h2 class="subtitle subtitled">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum cupiditate dolorum vitae dolores
                    nesciunt totam magni quas.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </section>
      <!--
      </div>
    </div>
  </section>
  -->

  <!-- newsletter -->
  <section class="section">
    <div class="columns">
      <div class="column is-10 is-offset-1">
        <div class="container has-text-centered is-fluid">
          <div class="hero is-light">
            <div class="hero-body">
              <h2 class="title is-4">Sign up for our newsletter</h1>
                <div class="column is-6 is-offset-3">
                  <div class="field has-addons has-addons-centered">
                    <div class="control is-expanded">
                      <input class="input " type="text" placeholder="Email address">
                    </div>
                    <div class="control">
                      <a class="button is-info">
                        Subscribe
                      </a>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="is-divider"></div>

  @foreach ($articles as $article)
  <section class="section">
    <div class="columns">
      <div class="column is-8 is-offset-2">
        <div class="content is-medium">
          <h2 class="subtitle is-4">{{ $article->created_at }}</h2>
          <h1 class="title">
              <a href="/blogs/{{ $article->id }}">{{ $article->title }}</a>
          </h1>
          <p>{{ $article->body }}</p>
        </div>
      </div>
    </div>
  </section>
  @endforeach

  <!-- Articles -->

  <section class="hero ">
    <div class="hero-body">
      <div class="container">
      
      <!-- 
      @foreach ($articles as $article)
        <section class="section">
          <div class="columns is-variable is-8">
            <div class="column is-5 is-offset-1 ">
              <div class="content is-medium">
                <h2 class="subtitle is-5 has-text-grey">{{ $article->created_at }}</h2>
                <h1 class="title has-text-black is-3">{{ $article->title}}</h1>
                <p class="has-text-dark">{{ $article->excerpt }}</p>
              </div>
            </div>
            
            <div class="column is-5">
              <div class="content is-medium">
                <h2 class="subtitle is-5 has-text-grey">December 25, 2018</h2>
                <h1 class="title has-text-black is-3">Fuse Search</h1>
                <p class="has-text-dark">To provide fast, local search of your blog, this starter template comes with a
                  pre-built Vue.js
                  component that uses Fuse.js. Fuse.js is a "lightweight fuzzy-search library with no...</p>
              </div>
            </div>
          </div>
          
        </section>
        @endforeach
 
        <div class="is-divider"></div>
       
        <section class="section">
          <div class="columns is-variable is-8">
            <div class="column is-5 is-offset-1">
              <div class="content is-medium">
                <h2 class="subtitle is-5 has-text-grey">December 25, 2018</h2>
                <h1 class="title has-text-black is-3">Getting Started</h1>
                <p class="has-text-dark">This is a starter template for creating a beautiful, customizable blog with
                  minimal
                  effort. You’ll only have to change a few settings and you’re ready to go. As with all Jigsaw sites,
                  configuration settings can be found in config</p>
              </div>
            </div>
            <div class="column is-5">
              <div class="content is-medium">
                <h2 class="subtitle is-5 has-text-grey">December 25, 2018</h2>
                <h1 class="title has-text-black is-3">Getting Started</h1>
                <p class="has-text-dark">This is a starter template for creating a beautiful, customizable blog with
                  minimal
                  effort. You’ll only have to change a few settings and you’re ready to go. As with all Jigsaw sites,
                  configuration settings can be found in config</p>
              </div>
            </div>
          </div>
        </section>
        -->


      </div>
    </div>
  </section>

  @endsection

  

  