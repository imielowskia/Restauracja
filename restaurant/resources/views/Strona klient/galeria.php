<!doctype html>
<html lang="pl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- Meta Tag do rensponsywnosci -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Style Index Css -->
    <link rel="stylesheet" href="styleindex.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <title>Restaurant</title>


</head>
<body style="background: red;">


<nav class="col-md-10 d-flex justify-content-center mb-3 mt-2 navbar navbar-light bg-light justify-content-between" style=" margin-left:auto; margin-right: auto; border-radius: 200px;">

    <a class="navbar-brand"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
        </svg></a>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="index">Strona Główna <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="menu">Menu <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="kontakt">Kontakt <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="galeria">Galeria <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="https://www.facebook.com/">Facebook <span class="sr-only">(current)</span></a>
            </div>
        </div>
    </nav>
</nav>

<div class="container-fluid " style="width: 60%; margin-top: 2%;">
    <!-- Carousel wrapper -->
    <div
        id="carouselBasicExample"
        class="carousel slide carousel-fade"
        data-mdb-ride="carousel"
    >
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button
                type="button"
                data-mdb-target="#carouselBasicExample"
                data-mdb-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
            ></button>
            <button
                type="button"
                data-mdb-target="#carouselBasicExample"
                data-mdb-slide-to="1"
                aria-label="Slide 2"
            ></button>
            <button
                type="button"
                data-mdb-target="#carouselBasicExample"
                data-mdb-slide-to="2"
                aria-label="Slide 3"
            ></button>
        </div>

        <!-- Inner -->
        <div class="carousel-inner">
            <!-- Single item -->
            <div class="carousel-item active">
                <img
                    src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg"
                    class="d-block w-100"
                    alt="..."
                />
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>
                        Nulla vitae elit libero, a pharetra augue mollis interdum.
                    </p>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img
                    src="https://mdbootstrap.com/img/Photos/Slides/img%20(22).jpg"
                    class="d-block w-100"
                    alt="..."
                />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img
                    src="https://mdbootstrap.com/img/Photos/Slides/img%20(23).jpg"
                    class="d-block w-100"
                    alt="..."
                />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>
                        Praesent commodo cursus magna, vel scelerisque nisl consectetur.
                    </p>
                </div>
            </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <button
            class="carousel-control-prev"
            type="button"
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel wrapper -->

</div>



<footer class="col-md-12 text-center text-white fixed-bottom" style="background-color: white; ">
    <!-- Grid container -->
    <div class="container pt-sm-4">
        <p class="margin-t text-dark align " style="text-align: center;">
            <small> Restaurant
                <br>
              Jeśli spodobała ci się nasza restauracja polub nas na naszym facebooku :D


            </small> </p>


    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center text-dark p-3" style="background-color: white;">
        © 2021 Copyright:
        <a class="text-dark" href="https://mdbootstrap.com/">Restaurant</a>
    </div>
    <!-- Copyright -->
</footer>




</body>
</html>
