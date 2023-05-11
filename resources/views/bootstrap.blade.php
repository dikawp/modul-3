<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- CSS -->
    @vite('resources/css/app.css') 

  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg bg-purple" data-bs-theme="dark">
        <!-- Container -->
        <div class="container py-2 px-4">
            <!-- NavBrand -->
            <a href="#" class="navbar-brand mb-0 h1">
                <img class="img-fluid" src="{{ Vite::asset('resources/images/logo-white.svg') }}" alt="Koneksi Bro">
            </a>

            <!-- NavToggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- OffCanvas -->
            <div class="offcanvas offcanvas-end bg-purple" id="offcanvasNavbar">
                <!-- OffCanvas Header -->
                <div class="offcanvas-header pb-0 px-4">
                    <h5 class="offcanvas-tittle text-white" id="offcanvasNavbarLabel">Bootstrap</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <!-- OffCanvas Body -->
                <div class="offcanvas-body pt-0 px-4">
                    <hr class="d-md-none text-white-50">

                    <!-- top menu -->
                    <ul class="navbar-nav flex-row flex-wrap">
                        <li class="nav-item col-6 col-md-auto"><a href="#" class="nav-link active">Docs</a></li>
                        <li class="nav-item col-6 col-md-auto"><a href="#" class="nav-link">Examples</a></li>
                        <li class="nav-item col-6 col-md-auto"><a href="#" class="nav-link">Icons</a></li>
                        <li class="nav-item col-6 col-md-auto"><a href="#" class="nav-link">Themes</a></li>
                        <li class="nav-item col-6 col-md-auto"><a href="#" class="nav-link">Blog</a></li>
                        <li class="nav-item col-6 col-md-auto"><a href="routing" class="nav-link">Routing</a></li>
                    </ul>

                    <hr class="d-md-none text-white-50">

                    <!-- social media -->
                    <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                        <li class="nav-item col-6 col-md-auto">
                            <a href="#" class="nav-link active">
                                <i class="bi-github"></i><small class="ms-2 d-md-none">Github</small>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-md-auto">
                            <a href="#" class="nav-link active">
                                <i class="bi-twitter"></i><small class="ms-2 d-md-none">Twitter</small>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-md-auto">
                            <a href="#" class="nav-link active">
                                <i class="bi-slack"></i><small class="ms-2 d-md-none">Slack</small>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg-auto">
                            <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
                        </li>
                        <li class="nav-item">
                            <!-- Dropdown -->
                            <div class="dropdown" data-bs-theme="light">
                                <button type="button" class="btn nav-link text-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    v5.3 <span class="d-lg-none"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><h6 class="dropdown-header">v5 Releases</h6></li>
                                    <li><button class="dropdown-item active bg-purple" type="button">Lastest (5.3.x) <i class="bi-check"></i></button></li>
                                        <li><button class="dropdown-item" type="button"> v5.2.3</i></button></li>
                                        <li><button class="dropdown-item" type="button"> v5.1.3</i></button></li>
                                        <li><button class="dropdown-item" type="button"> v5.0.3</i></button></li>
                                    <li><hr class="dropdown-divider"></li>
                                        <li><h6 class="dropdown-header">Previous</h6></li>
                                        <li><button class="dropdown-item" type="button"> v4.6.x</i></button></li>
                                        <li><button class="dropdown-item" type="button"> v3.2.3</i></button></li>
                                        <li><button class="dropdown-item" type="button"> v2.0.3</i></button></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item col-12 col-lg-auto">
                            <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
                            <hr class="d-lg-none my-2 text-white-50">
                        </li>
                        <li class="nav-item">
                            <!-- Dropdown -->
                            <div class="dropdown">
                                <button type="button" class="btn nav-link text-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi-brightness-high-fill"></i><span class="d-lg-none">Toggle Theme</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><button class="dropdown-item active bg-purple" type="button"><small><i class="bi-brightness-high-fill"> Light</i></small></button></li>
                                    <li><button class="dropdown-item" type="button"><small><i class="bi-moon-stars-fill"> Dark</i></small></button></li>
                                    <li><button class="dropdown-item" type="button"><small><i class="bi-circle-half"> Auto</i></small></button></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main -->
    <div class="bg-light mt-5" id="main">
        <!-- Container -->
        <div class="container py-5 px-4">
            <div class="row">
                <div class="col-md-5 order-md-2">
                    <img class="img-fluid" src="{{ Vite::asset('resources/images/main.svg') }}" alt="">
                </div>
                <div class="col-md-7 order-md-1">
                    <h1 class="mt-4 display-3">Build fast, responsive sites with Bootstrap</h1>
                    <p class="fs-5 mt-3">Powerful, extensible, and feature-packed frontend toolkit. Build and customize with Sass, utilize prebuilt grid system and components, and bring projects to life with powerful JavaScript plugins.</p>
                    <div class="row">
                        <div class="d-flex flex-column flex-md-row">
                            <button type="button" class="btn bg-purple text-white btn-lg mb-3 me-md-3 px-4 py-3">Get Started</button>
                            <button type="button" class="btn btn-outline-dark btn-lg mb-3 me-md-3 px-4 py-3">Download</button>
                        </div>
                        <div class="text-muted">
                            Currently <strong>v5.3.0-alpha2.</strong> . <a href="">v4.6.x docs</a> . <a href="">All releases</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Icon -->
    <div id="bs-icon">
        <!-- Container -->
        <div class="container py-5 px-4">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <i class="bi bi-subtract fs-2 bg-warning py-2 px-3 rounded-3 text-white"></i>
                    </div>
                    <h2 class="display-5 mb-3">Personalize it with <br> Bootstrap Icons</h2>
                    <p class="fs-5"><a href="">Bootstrap Icons</a> is an open source SVG icon library featuring over 1,800 glyphs, with more added every release. They're designed to work in any project, whether you use Bootstrap itself or not. Use them as SVGs or icon fonts—both options give you vector scaling and easy customization via CSS.</p>
                    <a href="#" class="icon-link icon-link-hover lead fw-semibold mb-5">Get Bootstrap Icons <i class="bi bi-arrow-right mb-2"></i></a>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="{{ Vite::asset('resources/images/bs-icons.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Theme -->
    <div id="bs-themes">
        <!-- Container -->
        <div class="container py-5 px-4">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3 mt-5">
                        <i class="bi bi-droplet-fill fs-2 bg-info py-2 px-3 rounded-3 text-white"></i>
                    </div>
                    <h2 class="display-5">Make it yours with official Bootstrap Themes</h2>
                    <p class="fs-5">
                        Take Bootstrap to the next level with premium themes from the <br> <a href="">official bootstrap Themes marketplace</a>. Themes are built on Bootstrap as their own extended frameworks, rich with new components and plugins, documentation, and powerful build tools.</p>
                    <a href="" class="icon-link icon-link-hover lead fw-semibold mb-5">Browse Bootstrap Themes <i class="bi bi-arrow-right mb-2"></i></a>
                </div>

                <div class="col-lg-6">
                    <img class="img-fluid" src="{{ Vite::asset('resources/images/bs-themes.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div id="footer" class="bg-light py-5">
        <!-- Container -->
        <div class="container py-5 px-4">
            <div class="row">
                <div class="col-lg-3 mb-5">
                    <a href="" class="logo text-decoration-none">
                        <div class="d-flex">
                            <img src="{{ Vite::asset('resources/images/logo-black.svg') }}" alt="" class="img-fluid">
                            <div class="fs-5 ms-2 text-black">Bootstrap</div>
                        </div>
                    </a>
                    <div class="mt-2 text-muted">
                        <small>
                            Designed and built with all the love in the world by the <a href="" class="text-black">Bootstrap team</a> with the help of our <a href="" class="text-black">Contributors</a>.
                        </small>
                    </div>
                    <div class="mt-2 text-muted">
                        <small>
                            Code licensed <a href="" class="text-black">MIT</a> docs <a href="" class="text-black">CC BY 3.0.</a>
                        </small>
                    </div>
                    <div class="mt-1 text-muted">
                        <small>Currently v5.3.0-alpha3.</small>
                    </div>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1 mb-5">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="">Home</a></li>
                        <li class="mb-2"><a href="">Docs</a></li>
                        <li class="mb-2"><a href="">Examples</a></li>
                        <li class="mb-2"><a href="">Icons</a></li>
                        <li class="mb-2"><a href="">Themes</a></li>
                        <li class="mb-2"><a href="">Blog</a></li>
                        <li class="mb-2"><a href="">Swag Store</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-5">
                    <h5>Guides</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="">Getting started</a></li>
                        <li class="mb-2"><a href="">Starter template</a></li>
                        <li class="mb-2"><a href="">Webpack</a></li>
                        <li class="mb-2"><a href="">Parcel</a></li>
                        <li class="mb-2"><a href="">Vite</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-5">
                    <h5>Projects</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="">Bootstrap 5</a></li>
                        <li class="mb-2"><a href="">Bootstrap 4</a></li>
                        <li class="mb-2"><a href="">Icons</a></li>
                        <li class="mb-2"><a href="">RFS</a></li>
                        <li class="mb-2"><a href="">Examples repo</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-5">
                    <h5>Community</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="">Issues</a></li>
                        <li class="mb-2"><a href="">Discussions</a></li>
                        <li class="mb-2"><a href="">Corporate sponsors</a></li>
                        <li class="mb-2"><a href="">Open Collective</a></li>
                        <li class="mb-2"><a href="">Stack Overflow</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
