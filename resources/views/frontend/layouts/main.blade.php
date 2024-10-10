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
    <link rel="stylesheet" href="{{asset('assets/styles/home.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />


    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="/assets/styles/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    @stack('style')
</head>

<body>
    @include('frontend.components.header')
    <main class="container">

        @yield("container")
    </main>
    <footer class="my-5 item-center z-0">
        <div class="header-bottom">
            <a href="/home"><img src="/assets/FJI NEW LOGO WHITE.png" alt="" class="logo-text" /></a>
            <nav class="nav-container">
                <ul class="nav-list-container">
                    <li class="nav-about"><a href="/about">about</a></li>
                    <li class="nav-about"><a href="/faq">faq</a></li>
                    <li class="nav-instagram"><a target="_blank"
                            href="https://www.instagram.com/folksjourney.id">instagram</a></li>
                    <li class="nav-contact"><a href="/contact">contact</a></li>
                </ul>
            </nav>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    @stack('script')
</body>

</html>
