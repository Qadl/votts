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
    <link href="/css/snap.css" rel="stylesheet">


    <title>Document</title>
</head>

<body class="bd ">

    <div id="particles-js">

        @include('partials.nav')

    </div>

    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>

    <div class="dye">

    </div>
    <div class="cee x-zoom">
        <div class="row x-all">
            <div class="col-md-12 text-center ">
                <h3 class="main-heading">UPLOAD IMAGE</h3>
                <div class="underline mx-auto"></div>


            </div>

            <form action="{{route('snap')}}" method="post" @submit.prevent="SignUp()" enctype="multipart/form-data">
                @if ($success=Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{$success}}</strong>

                </div>
                @endif

                <div class="row">

                    <div class="col-md-12 text-center d-prv">
                        <img class='prvimg' id="preview-image" src="/img/hhh.jpg" alt="preview image">
                    </div>

                    <div class="">
                        <div class="form-group">
                            <input type="file" name="image" placeholder="Choose image" onchange="displayImage()" id="image">
                            @error(' name') <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>



                    <div class="col-md-12 text-center ">
                        <button type="submit" class="btn btn-primary x-sbt">Submit</button>
                    </div>
                </div>
                @csrf

            </form>
        </div>

        <script type="text/javascript">
            function displayImage() {
                let reader = new FileReader();
                let file = document.getElementById("image").files[0];

                reader.onload = () => {
                    document.getElementById("preview-image").src = reader.result;
                };

                reader.readAsDataURL(file);
            }
        </script>
    </div>

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