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
    <link rel="stylesheet" href="{{asset('admin_assets/plugins/toastr/toastr.min.css')}}">
    @stack('style')
</head>

<body>
    @include('frontend.components.header')
    <main class="container">

        @yield("container")
    </main>
    <footer class="footer mt-auto py-3 text-white">
    <div class="container">
        <div class="row align-items-center">
            <!-- Logo Section -->
            <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-start mb-3 mb-md-0">
                <a href="{{url('/')}}">
                    <img src="{{asset('assets/FJI NEW LOGO WHITE.png')}}" alt="Logo" class="logo-text img-fluid" />
                </a>
            </div>
            <!-- Menu Section -->
            <div class="col-sm-12 col-12 col-md-6">
                <nav>
                    <ul class="list-unstyled d-flex justify-content-center justify-content-md-end align-items-center gap-3 mb-0 mt-3">
                        <li><a href="/about" class="text-white px-2">About</a></li>
                        <li><a href="/faq" class="text-white px-2">FAQ</a></li>
                        <li><a href="https://www.instagram.com/folksjourney.id" target="_blank" class="text-white px-2">Instagram</a></li>
                        <li><a href="/contact" class="text-white px-2">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    @include('admin.components.alert')
    @stack('script')
</body>

</html>
