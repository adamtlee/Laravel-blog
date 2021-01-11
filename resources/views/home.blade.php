<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Adam Lee Studio.</title>
  <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/bulma-divider.min.css">

  <style>
    nav.navbar {
      height: 6rem !important;
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06) !important;
    }
  </style>
</head>

<body>
  <!-- START NAV -->
  <nav class="navbar">
    <div class="container">
      <div class="navbar-brand">
        <a class="navbar-item" href="../">
        <a href="#" class="navbar-item is-active is-size-5 has-text-weight-semibold">
          Adam Lee Studio.
        </a>
          <!--<img src="../images/bulma.png" alt="Logo">-->
        <span class="navbar-burger burger" data-target="navbarMenu">
          <span></span>
          <span></span>
          <span></span>
        </span>
      </div>
      <div id="navbarMenu" class="navbar-menu">
        <div class="navbar-end">
          <div class=" navbar-item">
            <div class="control has-icons-left">
              <input class="input is-rounded" type="email" placeholder="Search">
              <span class="icon is-left">
                <i class="fa fa-search"></i>
              </span>
            </div>
          </div>
          <a class="navbar-item is-active is-size-5 has-text-weight-semibold">
            Home
          </a>
          <a class="navbar-item is-size-5 has-text-weight-semibold">
            Examples
          </a>
          <a class="navbar-item is-size-5 has-text-weight-semibold">
            Features
          </a>
        </div>
      </div>
    </div>
  </nav>
  <!-- END NAV -->

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

        <div class="is-divider"></div>

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


      </div>
    </div>
  </section>

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

  <!-- Articles -->

  <section class="hero ">
    <div class="hero-body">
      <div class="container">

        <section class="section">
          <div class="columns is-variable is-8">
            <div class="column is-5 is-offset-1 ">
              <div class="content is-medium">
                <h2 class="subtitle is-5 has-text-grey">December 23, 2018</h2>
                <h1 class="title has-text-black is-3">Custom 404 Pages</h1>
                <p class="has-text-dark">This starter template includes a custom 404 Not Found error page, located at
                  /source/404.blade.php.
                  To preview the 404 page, you can visit /404 in your browser. Depending...</p>
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


      </div>
    </div>
  </section>

  

  <footer class="footer">
    <div class="content has-text-centered">
      <p>
        <strong>Adam Lee Studio.</strong> by <a href="https://www.adamleestudio.com">Adam Lee</a>.
      </p>
    </div>
  </footer>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/TypewriterJS/2.13.1/core.min.js"></script>
  <script>
    new Typewriter('#typewriter', {
      strings: ['martial artist', 'musician', 'software engineer', 'creator'],
      autoStart: true,
      loop: true,
    });
  </script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      once: true
    });
  </script>
</body>

</html>