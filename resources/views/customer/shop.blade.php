<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Shop</title>
    <link href={{ asset("assets/img/logo.png")}} rel="icon">
    <link rel="stylesheet" href="{{ asset("assets/bootstrap/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href={{asset("assets/fonts/ionicons.min.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/Features-Boxed.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/Footer-Dark.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/Navigation-Clean.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/styles.css")}}>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg sticky-top bg-dark navigation-clean" style="color: var(--bs-white);">
        <div class="container">
            <img id="image1" src={{ asset("assets/img/logo.png")}} class="mr-3" style="margin-right: 3px; width: 60px;">
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navcol-1">
                <ul class="navbar-nav" style="color: var(--bs-white); font-weight: bold;">
                    <li class="nav-item"><a class="nav-link" href="{{url('arca_artshop')}}" style="color: var(--bs-white);">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{url('arca_artshop/shop')}}" style="color: var(--bs-white);">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('arca_artshop/myorder')}}" style="color: var(--bs-white);">My Orders</a></li>
                    <li class="nav-item"><a class="nav-link" href="#footer" style="color: var(--bs-white);">Contact</a></li>
                </ul>
                <div class="d-flex">
                    <img src={{ asset("assets/img/bag.png")}} alt="Shopping Bag" style="margin-right: 20px; width: 25px;">
                    <a href="/login" class="btn btn-outline-light">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
        <div class="carousel-inner">
            <div class="carousel-item active"><img class="w-100 d-block" src={{ asset("assets/img/bgheader.jpg")}} alt="Slide Image"></div>
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
            <img class="card-img" src={{ asset("assets/img/bg2.jpg")}} alt="Card image" style="width:160%" height="500px">
        </div>
    </div>
    <br>
    <div class="container-fluid mt-3">
        <h1>Shop</h1>
        <p>The following example will result in a 25%/75% split on small devices, a 50%/50% split on medium devices, a 33%/66% split on large devices and a 20%/80% on xlarge and xxlarge devices. On extra small devices, it will automatically stack (100%).</p>
        <p>Resize the browser window to see the effect.</p>
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-3 col-md-6 col-lg-4 col-xl-2 bg-primary text-white">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
            <div class="col-sm-9 col-md-6 col-lg-8 col-xl-10 bg-dark text-white">
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            </div>
          </div>
        </div>
      </div>
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