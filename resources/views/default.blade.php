<!doctype html>
<html lang="fr">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>DataAide</title>

    <style>


        body {
            background-color: #ccccff;
        }
        .padding-100 {
            padding-top: 100px;
        }

        .padding-50 {
            padding-bottom: 50px;
        }
    </style>    

  </head>

<body>

<!-- HEADER -->
<header>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="/">DataAide</a>
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login">Login</a>
            </li>
            </ul>
        </div>
</nav>

<!-- Caroussel/Jumbotron -->

    <div class="container padding-100">
        <div class="row">
                    <div class="col-md-4">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="http://laravel55.local/images/chat1.jpeg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="http://laravel55.local/images/chatons.jpeg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="http://laravel55.local/images/chat2.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-8">
                        <div class="jumbotron">
                            <h1 class="display-4">Hello, world!</h1>
                            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                            <hr class="my-4">
                            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                            <p class="lead">
                                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                            </p>
                        </div>
                    </div>
        </div>
    </div>      

</header>
 

<!-- MAIN -->
@yield('content')


<!-- FOOTER -->
<footer>
    <div class="container-fluid bg-dark text-white">
        <div class="row ">
            <div class="col-md-4">
                <h3>cadre1</h3>
                <ul>
                    <li><a href="#">Lorem ipsum dolor.</a></li>
                    <li><a href="#">Lorem ipsum dolor.</a></li>
                    <li><a href="#">Lorem ipsum dolor.</a></li>
                    <li><a href="#">Lorem ipsum dolor.</a></li>
                </ul>
            </div>

            <div class="col-md-4">
                <h3 class="text-center">cadre2</h3>
            </div>

            <div class="col-md-4">
                <h3 class="text-center" >cadre3</h3> 
            </div>
        </div>
    </div>
</footer>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>