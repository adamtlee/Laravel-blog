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
          <!--
            <div class="control has-icons-left">
              <input class="input is-rounded" type="email" placeholder="Search">
              <span class="icon is-left">
                <i class="fa fa-search"></i>
              </span>
            </div>
            -->
          </div>
          <a href = "/" class="{{ Request::path() === '/' ? 'navbar-item is-active is-size-5 has-text-weight-semibold' : 'navbar-item is-size-5 has-text-weight-semibold'}}">
            Home
          </a>
          <a href="/about"class="{{ Request::path() === 'about' ? 'navbar-item is-active is-size-5 has-text-weight-semibold' : 'navbar-item is-size-5 has-text-weight-semibold'}}">
            About
          </a>
          <a href="/blogs"class="{{ Request::path() === 'blogs' ? 'navbar-item is-active is-size-5 has-text-weight-semibold' : 'navbar-item is-size-5 has-text-weight-semibold'}}">
            Blogs
          </a>
          <a href="/projects"class="{{ Request::path() === 'projects' ? 'navbar-item is-active is-size-5 has-text-weight-semibold' : 'navbar-item is-size-5 has-text-weight-semibold'}}">
            Projects
          </a>
        </div>
      </div>
    </div>
  </nav>
  <!-- END NAV -->

  @yield('content')

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