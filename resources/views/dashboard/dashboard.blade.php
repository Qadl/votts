<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="{{ url('/css/dash.css') }}" rel="stylesheet">

    <title>Document</title>
</head>

<body class="bd ">

    <div id="particles-js">


        @include('partials.nav')
        @include('partials.sidenav')



    </div>
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>

    <div class="cee x-zoom">
        <div class='x-all'>

            <div class="x-tp">
                <div class="d-xti">
                    <img src="{{asset('uploads/images/'.$query->image)}}" width="100px" class='xt-img'>



                </div>
                <div class="tp-nd">
                    <h3>What's good {{$query->nick}}

                    </h3>
                    <div class="d-flex justify-content-between">
                        <p>{{auth()->user()->email}}
                        </p>
                        <p>||</p>
                        <p>candidate no : {{$query->user_id}}
                        </p>
                    </div>

                    <h5>We wish you the very best in the competition, you go Girl!!</h5>
                </div>
            </div>

            <div class="xt-bx">
                <div class="boxes1">
                    <div class="b1">
                        <h2>0</h2>
                        <p>Free Votes</p>
                    </div>

                    <div class="d-mi1">
                        <p class="mi1">More Info</p>
                    </div>
                </div>

                <div class="boxes2">
                    <div class="b2">
                        <h2>0</h2>
                        <p>Paid Votes</p>

                    </div>

                    <div class="d-mi2">
                        <p class="mi2">More Info</p>
                    </div>
                </div>

                <div class="boxes3">
                    <div class="b3">
                        <h2>{{$vtct1}}</h2>
                        <p>Total Votes</p>
                    </div>

                    <div class="d-mi3">
                        <p class="mi3">More Info</p>
                    </div>
                </div>

                <div class="boxes4">
                    <div class="b4">
                        <h2>0</h2>
                        <p>Total Votes</p>
                    </div>

                    <div class="d-mi4">
                        <p class="mi4">More Info</p>
                    </div>
                </div>
            </div>

        </div>


    </div>


    <div class="dee x-zoom">
        <div class='d-all'>

            <div class="fn">
                <div class="i-fn">
                    <h5>Full name</h5>
                    <p>Your Provided Full Name</p>
                </div>

                <div class="p-fn">
                    <p>
                        {{$query->fName}}
                        {{$query->lName}}
                    </p>
                </div>
            </div>


            <div class="fn">
                <div class="i-fn">
                    <h5>Code</h5>
                    <p>Your Contestant code</p>

                </div>

                <div class="p-fn">
                    <p>{{$keyy->secret}}
                    </p>
                </div>
            </div>


            <div class="fn">
                <div class="i-fn">
                    <h5>Verification Status</h5>
                    <p>verified or unverified</p>
                </div>

                <div class="p-fn">
                    <p>
                        VERIFIED
                    </p>
                </div>
            </div>


            <div class="fn">
                <div class="i-fn">
                    <h5>Age</h5>
                    <p>How Old You Are</p>
                </div>

                <div class="p-fn">
                    <p>{{$query->age}} years.
                    </p>
                </div>
            </div>


        </div>








    </div>








    <!-- <div class="oul x-zoom" style="margin-top: 3%;"></div> -->
</body>

</html>

<script>
    function gsk() {
        let c = Math.floor(Math.random() * 10000);
        document.querySelector('.se-inp').value = `VO${c}TTS`

    }








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