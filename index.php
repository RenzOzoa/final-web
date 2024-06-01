<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop Landing Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Copperplate&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="Coffee Shop Logo" style="width: 150px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.html">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="text-white my-main mt-custom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <h1 class="text-white" style="font-family: 'Copperplate', sans-serif;">START YOUR DAY</h1>
                    <h1 class="text-white">WITH A BLACK COFFEE</h1>
                    <div class="smaller-text">
                        <h2 class="text-white">Choose and taste delicious coffee from</h2>
                        <h2 class="text-white">the best beans</h2>
                        <button class="custom-btn btn btn-outline-orange">Order Now</button>
                        <a href="aboutus.html" class="custom-btn btn btn-outline-orange">Learn About Us</a>


                    </div>
                </div>
                <div class="col-lg-6 text-right">
                    <img src="coffee.png" alt="Coffee Cup" class="img-fluid">
                </div>
            </div>
        </div>
    </main>

    <div id="popularCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                <div class="col-md-12 d-flex flex-column justify-content-center text-center text-white">
                    <h5>Coffee</h5>
                    <p>Awaken Your Senses with Our Premium Coffee Blend! Made from the finest hand-picked beans,</p>
                    <p>our coffee offers a rich and robust flavor that will invigorate your mornings and keep you energized throughout the day.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-md-12 d-flex flex-column justify-content-center text-center text-white">
                    <h5>Frappe</h5>
                    <p>Indulge in a Refreshing Frappe Experience! Our signature frappes are a delightful blend of smooth</p>
                    <p>coffee, creamy milk, and ice, creating a symphony of flavors that will tantalize your taste buds and cool you down on a hot day.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-md-12 d-flex flex-column justify-content-center text-center text-white">
                    <h5>Cappuccino</h5>
                    <p>Savor the Taste of Italy with Our Luxurious Cappuccino! Crafted to perfection by our skilled baristas,</p>
                    <p>our cappuccino is a decadent symphony of velvety espresso, creamy steamed milk,</p>
                    <p>and luscious milk foam, resulting in a masterpiece of flavor and texture.</p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#popularCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#popularCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>








    <div class="login-signup-container text-center mt-5">
        <a href="login.html" class="btn btn-outline-orange">Login</a>
        <a href="signup.html" class="btn btn-outline-orange">Sign Up</a>
    </div>
    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
