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
    <link href="{{ url('/css/dashvote.css') }}" rel="stylesheet">

    <title>Document</title>
</head>

<body class="bd ">

    <div id="particles-js">


        @include('partials.vnav')



    </div>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
    <script src="https://threejs.org/examples/js/libs/stats.min.js"></script>

    <div class="cee x-zoom">
        <div class='x-all'>

            <div class="x-tp">
                <div class="d-xti"> <img src="/img/uae.jpg" class="xt-img">


                </div>
                <div class="tp-nd">
                    <h3>What's good {{$votid-> fName}}

                    </h3>
                    <div class="d-flex justify-content-between">

                        <p>VOTER ID : {{$votid->secretv}}
                        </p>
                    </div>


                </div>
            </div>



        </div>


    </div>



    <div class="dee x-zoom">
        <div class='e-all'>
            <h5>{{count($cands)}} CANDIDATES FOUND </h5>



        </div>
        <div class='d-all'>

            @if(count($cands)>0)
            @foreach($cands as $cand)
            <div class="fn">
                <div class="d-xti"> <img src="{{asset('uploads/images/'.$cand->image)}}" class="xt-img">
                </div>
                <div class="i-fn">
                    <h4>{{$cand->fName}} {{$cand->lName}} </h4>
                    <p>Nick : {{$cand->nick}}</p>
                    <p>Candidate ID : {{$cand->user_id}}</p>
                    <p>Total Vote : {{$cand->votes}} </p>

                </div>

                <div class="p-fn">
                    <button class="btn v-btn">
                        <a href="{{'c/'.Str::slug($cand->nick).'/'.$cand->id}}" class="nav-link text-dark"> GO TO PROFILE</a></button>
                </div>


            </div>
            @endforeach
            @else
            <h2 class="alert-danger">NO CANDIDATE FOUND</h3>
                @endif






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