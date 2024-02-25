<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('./logo/logo1.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('./logo/LOGO_SISNOVATE_FINAL.png') }}" type="image/x-icon">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('owl/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('owl/owl.theme.default.min.css') }}" />
    <!-- Custom styles for this template -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>


    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <nav class=" navbar navbar-expand-lg p-0">
        <div class="container">
            <a class="" href="/">
                <img src="{{ asset('./logo/LOGO_SISNOVATE_FINAL.svg') }}" width="200px" height="80" alt=""
                    srcset="">
            </a>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">

                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item nav-hover">
                        <a class="nav-link" href="{{ route('welcome') }}">Home</a>
                    </li>
                    <li class="nav-item nav-hover">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item nav-hover">
                        <a class="nav-link" href="{{ route('services') }}">Services</a>
                    </li>

                    <li class="nav-item dropdown drop-nav">
                        <a class="nav-link  dropdown-toggle text-white" href="#" data-bs-toggle="dropdown">
                            Products </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ asset('products') }}"> School Management System
                                    (SMS)</a></li>
                            <li><a class="dropdown-item" href="{{ asset('products') }}">Inventory Management System
                                    (IMS)</a></li>
                            <li><a class="dropdown-item" href="{{ asset('products') }}">Hospital Management System
                                    (HMS)</a></li>
                            <li><a class="dropdown-item" href="{{ asset('products') }}">Restaurant Management System
                                    (HMS)</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-hover">
                        <a class="nav-link" href="{{ route('pricing') }}">Pricing</a>
                    </li>
                    <li class="nav-item nav-hover">
                        <a class="nav-link" href="{{ route('career') }}">Career</a>
                    </li>
                    <li class="nav-item nav-hover">
                        <a class="nav-link" href="{{ route('blogs') }}">Blogs</a>
                    </li>
                    <li class="nav-item nav-hover">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>

                </ul>
            </div>
        </div>

    </nav>
    @yield('banner-slider')
    <section>
        @yield('content')
    </section>
    <!-- Remove the container if you want to extend the Footer to full width. -->
    <section>
        <div class="">

            <footer class="text-white text-center text-lg-start bg-my">
                <!-- Grid container -->
                <div class="container-fluid p-4">
                    <!--Grid row-->
                    <div class="row mt-4">
                        <!--Grid column-->
                        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                            <h5 class="text-uppercase mb-4">About company</h5>

                            <p>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque corrupti.
                            </p>

                            <p>
                                Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                molestias.
                            </p>

                            <div class="mt-4">
                                <!-- Facebook -->
                                <a type="button" class="btn btn-floating btn-light btn-lg"><i
                                        class="fab fa-facebook-f"></i></a>
                                <!-- Dribbble -->
                                <a type="button" class="btn btn-floating btn-light btn-lg"><i
                                        class="fab fa-dribbble"></i></a>
                                <!-- Twitter -->
                                <a type="button" class="btn btn-floating btn-light btn-lg"><i
                                        class="fab fa-twitter"></i></a>
                                <!-- Google + -->
                                <a type="button" class="btn btn-floating btn-light btn-lg"><i
                                        class="fab fa-google-plus-g"></i></a>
                                <!-- Linkedin -->
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">


                            <ul class="fa-ul" style="margin-left: 1.65em;">
                                <li class="mb-3">
                                    <span class="fa-li"><i class="fas fa-home"></i></span><span
                                        class="ms-2">Warsaw,
                                        00-967, Poland</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fa-li"><i class="fas fa-envelope"></i></span><span
                                        class="ms-2">contact@example.com</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+ 48
                                        234
                                        567 88</span>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase mb-4">Opening hours</h5>

                            <table class="table text-center text-white">
                                <tbody class="fw-normal">
                                    <tr>
                                        <td>Mon - Thu:</td>
                                        <td>8am - 9pm</td>
                                    </tr>
                                    <tr>
                                        <td>Fri - Sat:</td>
                                        <td>8am - 1am</td>
                                    </tr>
                                    <tr>
                                        <td>Sunday:</td>
                                        <td>9am - 10pm</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2020 Copyright:
                    <a class="text-white" href="#">Sisnovate.com</a>
                </div>
                <!-- Copyright -->
            </footer>

        </div>
    </section>
    <!-- End of .container -->
    @yield('scripts')
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('owl/owl.carousel.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();

        window.onscroll = function() {
            stickyNavbar();
        };

        var navbar = document.querySelector('.navbar');
        var sticky = navbar.offsetTop;

        function stickyNavbar() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add('fixed-top');
            } else {
                navbar.classList.remove('fixed-top');
            }
            // Add this condition to remove the 'fixed-top' class when at the top
            if (window.pageYOffset === 0) {
                navbar.classList.remove('fixed-top');
            }
        }
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            autoplay: true,

            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: false,
                    loop: false
                }
            }
        })
    </script>
    <script>
        particlesJS("particles-js", {
            particles: {
                number: {
                    value: 30, // Number of particles
                    density: {
                        enable: true,
                        value_area: 800
                    }
                },
                shape: {
                    type: ["circle", "triangle", "polygon"], // Shape of the particles
                    stroke: {
                        width: 0,
                        color: "#ffffff"
                    },
                    polygon: {
                        nb_sides: 5
                    }
                },
                size: {
                    value: 8, // Size of the particles
                    random: true,
                    anim: {
                        enable: true,
                        speed: 3,
                        size_min: 0.3,
                        sync: false
                    }
                },
                move: {
                    enable: true,
                    speed: 2, // Speed of movement
                    direction: "none", // "none" for random movement
                    random: true,
                    straight: false,
                    out_mode: "out",
                    bounce: false,
                    attract: {
                        enable: false,
                        rotateX: 600,
                        rotateY: 1200
                    }
                },
                line_linked: {
                    enable: false
                },
                opacity: {
                    anim: {
                        enable: true,
                        opacity_min: 0.1,
                        speed: 1,
                        sync: false
                    },
                    value: 0.8
                }
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                    onhover: {
                        enable: false
                    },
                    onclick: {
                        enable: false
                    },
                    resize: true
                }
            },
        });
    </script>
    <style>
        .particles-container {
            position: relative;
            width: 100%;
            z-index: -1;
        }

        #particles-js {
            position: absolute;
            width: 100%;
            height: 60vh;
            top: 0;
            left: 0;
            z-index: 0;
        }
    </style>
</body>

</html>
