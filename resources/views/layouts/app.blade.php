<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="{{ asset('css/back.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>




    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased ">
    <!-- navbar -->

    <div id="particles-js">
        @include('partials.nav')

    </div>
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>


    <main class="container-fluid pop">
        <div>

            <div class="col-md-12 text-center mt-5">
                <h4 class="main-heading">WELCOME TO VOTTS</h4>
                <div class="underline mx-auto"></div>
                <h4 class="tb">EVERY CRAZY COMPETITION VOTING SYSTEM</h4>


                <!-- <marquee behavior="right" direction="left">
                    <h4 class="tb">EVERY CRAZY COMPETITION VOTING SYSTEM</h4>

                </marquee> -->
            </div>
            <div class=" top-im">


                <div class="ab-img1">
                    <img src="/img/uae.jpg" class="ab-img">

                </div>

                <div class="bc-img1">
                    <img src="/img/uae.jpg" class="bc-img">

                </div>

                <div class="cd-img1">
                    <img src="/img/uae.jpg" class="cd-img">

                </div>



                <!-- <div class="col-sm-5 im">
                    <img src="/img/dee.png" class="c-img">
                </div> -->


            </div>

            <div class="col-md-12 text-center mt-5">

                <div>
                    <h4 class="vfy">VOTE FOR YOUR FAVOURITES CONTESTANTS ON YOUR FAVOURITE SHOWS</h4>
                </div>
            </div>

        </div>

        <div class="lp-sr">
            <div class="col-md-12 text-center mt-5">
                <h4 class="main-heading">ABOUT US</h4>
                <div class="underline mx-auto"></div>

            </div>


            <div class="row justify-content-evenly" style="margin-bottom: 10%">
                <p class="col-sm-5">
                    <img src="/img/uae.jpg" class="au-img">

                </p>

                <p class="col-sm-5 fqlp" style="margin-top: 7%">
                    MESH connects web applications to supported
                    MESH session is started by a scanning a QR code (desktop) or by
                    clicking an application deep link (mobile).
                </p>
            </div>
        </div>



        <div class="lp-sr">
            <div class="col-md-12 text-center mt-5">
                <h4 class="main-heading">TOP TOP SHOWS</h4>
                <div class="underline mx-auto"></div>

            </div>

            <div class="col-sm-12  cfd x-zoom mt-3">


                <div class="box-card">

                    <img src="/img/uae.jpg" class="w-img">

                    <div class="box-card-body">
                        <h3 class="box-card-heading">BIG BROTHER NAIJA</h3>

                        <p>vjdggggggggdbbbbbbbb dwgqjjjjjj ddddddddg</p>
                    </div>
                </div>

                <div class="box-card">

                    <img src="/img/uae.jpg" class="w-img">

                    <div class="box-card-body">
                        <h3 class="box-card-heading">BIG BROTHER NAIJA</h3>

                        <p>vjdggggggggdbbbbbbbb dwgqjjjjjj ddddddddg</p>
                    </div>
                </div>


                <div class="box-card">

                    <img src="/img/uae.jpg" class="w-img">

                    <div class="box-card-body">
                        <h3 class="box-card-heading">BIG BROTHER NAIJA</h3>

                        <p>vjdggggggggdbbbbbbbb dwgqjjjjjj ddddddddg</p>
                    </div>
                </div>







            </div>



        </div>



    </main>








</body>



</html>

<script>
    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 80,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#ffffff"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 3,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 6,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "repulse"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 400,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });
</script>