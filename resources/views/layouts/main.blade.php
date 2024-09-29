</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>FOLKS JOURNEY | @yield("title")</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="/assets/styles/style.css" />
    @yield("stylesheet")
  </head>
  <body>
    <header>
      <div class="header-top">
        <a href="/home">
          <img
            class="header-round-logo"
            src="/assets/Logo Round 4k white.png"
            alt=""
          />
        </a>
      </div>
      <div class="header-bottom">
        <a href="/home"
          ><img src="/assets/FJI NEW LOGO WHITE.png" alt="" class="logo-text"
        /></a>
        <nav class="nav-container">
          <ul class="nav-list-container">
            <li class="nav-about"><a href="/about">about</a></li>
            <li class="nav-about"><a href="/faq">faq</a></li>
            <li class="nav-instagram"><a target="_blank" href="https://www.instagram.com/folksjourney.id">instagram</a></li>
            <li class="nav-contact"><a href="/contact">contact</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
      @yield("container")
    </main>
  </body>
</html>
