<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home</title>
    <link href="assets/img/logo.png" rel="icon">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg sticky-top bg-dark navigation-clean" style="color: var(--bs-white);">
        <div class="container">
            <img id="image1" src="assets/img/logo.png" class="mr-3" style="margin-right: 3px; width: 60px;">
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navcol-1">
                <ul class="navbar-nav" style="color: var(--bs-white); font-weight: bold;">
                    <li class="nav-item"><a class="nav-link active" href="#" style="color: var(--bs-white);">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('arca_artshop/shop')}}" style="color: var(--bs-white);">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('arca_artshop/myorder')}}" style="color: var(--bs-white);">My Orders</a></li>
                    <li class="nav-item"><a class="nav-link" href="#footer" style="color: var(--bs-white);">Contact</a></li>
                </ul>
                <div class="d-flex">
                    <img src="assets/img/bag.png" alt="Shopping Bag" style="margin-right: 20px; width: 25px;">
                    <a href="/login" class="btn btn-outline-light">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
        <div class="carousel-inner">
            <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/bgheader.jpg" alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="assets/img/bgheader.jpg" alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="assets/img/bgheader.jpg" alt="Slide Image"></div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
        <ol class="carousel-indicators">
            <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
            <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
        </ol>
    </div>
    <div class="container mt-3">
        <div class="card img-fluid" style="width:700px">
            <img class="card-img" src="assets/img/bg2.jpg" alt="Card image" style="width:160%" height="500px">
        </div>
    </div>
    <br>
    <section class="features-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">CATEGORIES</h2>
                <p class="text-center">There are many unique and funny categories that you can see in our products. Please check the products available from us.</p>
            </div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><img src="assets/img/sapi.jpg" style="width: 300px;" height="300px">
                        <h3 class="name">Sapi</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><img src="assets/img/hiu.jpg" style="width: 300px;" height="300px">
                        <h3 class="name">Hiu</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><img src="assets/img/dolpin.jpg" style="width: 300px;" height="300px">
                        <h3 class="name">Dolphin</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><img src="assets/img/kucing.jpg" style="width: 300px;" height="300px">
                        <h3 class="name">Kucing</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><img src="assets/img/zebra.jpg" style="width: 300px;" height="300px">
                        <h3 class="name">Zebra</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><img src="assets/img/kedelai.jpg" style="width: 300px;" height="300px">
                        <h3 class="name">Keledai</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer" class="footer-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Company Name</h3>
                    <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                </div>
                <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
            </div>
            <p class="copyright">Company Name © 2023</p>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>