<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RkU Hostel </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


    <link rel="stylesheet" href="{{ url('frontend/css/styleforindex.css') }}">
    <script>
        $(document).ready(function() {
            $(".accordion_body .li_qus").click(function() {
                $(this).parent().toggleClass("active");
            });
        })
    </script>


</head>

<body>

    <header>
        <div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">RK Hostel</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <!--The items within the navbar can be aligned using margin utilities.
                mx-auto class can be used to align the items to the center of the navbar.
                ms-auto class is used to align items to the right of the navbar.
                me-auto class is used to align items to the left of that navbar.-->
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link active" id="home" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/index') }}">Registration</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ url('/loginAll') }}">Login</a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="#about">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contactus">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#rules">Rules And Regulations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#faq">FAQS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/dashboard') }}">TABLE</a>
                            </li>

                        </ul>
                        <!-- <div class="custom-control custom-switch mr-md-3">
        <input type="checkbox" class="custom-control-input" id="selector">
        <label class="custom-control-label" for="selector">Mode</label>
      </div> -->


                    </div>
                </div>
            </nav>
        </div>

        <!-- For the carosel images -->
        <div>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ url('frontend/img/first.jpeg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <!-- <h5>First slide label</h5> -->
                            <p>Embassie Hostel – Relax with friends.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ url('frontend/img/second.jpeg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <!-- <h5>Second slide label</h5> -->
                            <p>Safestay – Stay in a new kind of place.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ url('frontend/img/third.jpeg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <!-- <h5>Third slide label</h5> -->
                            <p>Helping you to rise.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


    </header>
</body>