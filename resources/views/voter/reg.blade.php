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
    <link href="{{ url('/css/reg.css') }}" rel="stylesheet">

    <title>Document</title>
</head>

<body class="bd ">
    <div id="particles-js">
        @include('partials.nav')


    </div>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
    <script src="https://threejs.org/examples/js/libs/stats.min.js"></script>

    <div class="cee x-zoom">
        <div class="wrapper">
            <h2>Voter's Registration</h2>
            <form action="{{route('signup')}}" method="post" @submit.prevent="SignUp()" enctype="multipart/form-data">


                @if ($success=Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{$success}}</strong>

                </div>
                @endif

                <div class="input-box">
                    <input type="email" value="{{old('email')}}" name="email" class="form-control @error('email') is-invalid @enderror" id="" placeholder='Enter your email' />
                    @error('email')
                    <small class="text-danger mt-1" style="font-size: 13px; margin-top: 1%">{{$message}}</small>
                    @enderror
                </div>
                <div class="input-box">
                    <input type="password" value="{{old('password')}}" name="password" class="form-control @error('password') is-invalid @enderror" id="" placeholder='password' />
                    @error('password')
                    <small class="text-danger mt-1" style="font-size: 13px; margin-top: 1%">{{$message}}</small>
                    @enderror
                </div>



                <div class="input-box">
                    <select name="roles" class="form-control @error('roles') is-invalid @enderror" id="">
                        <option value="voter">voter</option>
                    </select>
                    @error('roles')
                    <small class="text-danger mt-1" style="font-size: 13px; margin-top: 1%">{{$message}}</small>
                    @enderror
                </div>


                <div class="input-box button">
                    <input type="Submit" value="Register Now" />
                </div>
                @csrf
                <div class="text">
                    <h3>
                        Already have an account?
                        <a class="a" href="voter_log">Login now</a>
                    </h3>
                </div>
            </form>
        </div>

        <!-- <div class="wrapper" v-if="signin">
            <h2>Log In</h2>
            <form action="" method="post" @submit.prevent="SignIn()">
                <div class="input-box">
                    <input v-model="email" type="text" placeholder="Email" required />
                </div>
                <div class="emailerr" v-html="emErr"></div>
                <div class="input-box">
                    <input v-model="password" type="password" placeholder="Password" required />
                </div>
                <div class="passerr" v-html="pErr"></div>

                <div class="input-box button">
                    <input type="Submit" value="Login Now" />
                </div>
                <div class="text">
                    <h3>
                        Dont have an account?
                        <span class="a" @click="stsignUp()">SignUp now</span>
                    </h3>
                </div>
            </form>
        </div> -->
    </div>


    <!-- <div class="oul x-zoom" style="margin-top: 3%;"></div> -->
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