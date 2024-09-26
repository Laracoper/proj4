<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('index')}}"><span class="text-danger">AFINA</span>-Clinic</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a href="tel:89033878708" class="btn btn-info">
                   
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone text-light" viewBox="0 0 16 16">
                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                        </svg>
                    
                    </a>
                    
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('about')}}">Про нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('contact')}}">Контакты</a>
                        </li>
                        <button class="btn btn-warning d-flex align-items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box2-heart-fill" viewBox="0 0 16 16">
                                <path d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4zM8.5 4h6l.5.667V5H1v-.333L1.5 4h6V1h1zM8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132" />
                            </svg>
                            button
                        </button>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        @yield('content')
    </main>


    <footer class="container-fluid py-5 bg-light">
        <div class="row">
            <div class="col-12 col-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box2-heart-fill" viewBox="0 0 16 16">
                    <path d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4zM8.5 4h6l.5.667V5H1v-.333L1.5 4h6V1h1zM8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132" />
                </svg>
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24">
                    <title>Product</title>
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path>
                </svg> -->
                <small class="d-block mb-3 text-body-secondary">© 2017–20<?= date('y') ?></small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary text-decoration-none" href="#">Business</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Education</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Government</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Gaming</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary text-decoration-none" href="#">Team</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>