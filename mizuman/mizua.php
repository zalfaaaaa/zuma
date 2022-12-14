<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">  
    <title>Home</title>
    <style>
        #myCarousel .carousel-item .mask{position: absolute;top: 0;left:0;height:100%;width: 100%;background-attachment: fixed}#myCarousel h4{font-size:50px;margin-bottom:15px;color:#FFF;line-height:100%;letter-spacing:0.5px;font-weight:600}#myCarousel p{font-size:18px;margin-bottom:15px;color:#d5d5d5}#myCarousel .carousel-item a{background:#f75ba4;font-size:14px;color:#FFF;padding:13px 32px;display:inline-block}#myCarousel .carousel-item a:hover{background:#ee90a7;text-decoration:none}#myCarousel .carousel-item h4{-webkit-animation-name:fadeInLeft;animation-name:fadeInLeft}#myCarousel .carousel-item p{-webkit-animation-name:slideInRight;animation-name:slideInRight}#myCarousel .carousel-item a{-webkit-animation-name:fadeInUp;animation-name:fadeInUp}#myCarousel .carousel-item .mask img{-webkit-animation-name:slideInRight;animation-name:slideInRight;display:block;height:auto;max-width:100%}#myCarousel h4, #myCarousel p, #myCarousel a, #myCarousel .carousel-item .mask img{-webkit-animation-duration: 1s;animation-duration: 1.2s;-webkit-animation-fill-mode: both;animation-fill-mode: both}#myCarousel .container{max-width: 1430px}#myCarousel .carousel-item{height:100%;min-height:550px}#myCarousel{position:relative;z-index:1;background:#000;background-size:cover}.carousel-control-next, .carousel-control-prev{height:40px;width:40px;padding:12px;top:50%;bottom:auto;transform:translateY(-50%);background-color: #ff57b3}.carousel-item{position: relative;display: none;-webkit-box-align: center;-ms-flex-align: center;align-items: center;width: 100%;transition: -webkit-transform .6s ease;transition: transform .6s ease;transition: transform .6s ease,-webkit-transform .6s ease;-webkit-backface-visibility: hidden;backface-visibility: hidden;-webkit-perspective: 1000px;perspective: 1000px}.carousel-fade .carousel-item{opacity: 0;-webkit-transition-duration: .6s;transition-duration: .6s;-webkit-transition-property: opacity;transition-property: opacity}.carousel-fade .carousel-item-next.carousel-item-left, .carousel-fade .carousel-item-prev.carousel-item-right, .carousel-fade .carousel-item.active{opacity: 1}.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-right.active{opacity: 0}.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active{-webkit-transform: translateX(0);-ms-transform: translateX(0);transform: translateX(0)}@supports (transform-style:preserve-3d){.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active{-webkit-transform: translate3d(0,0,0);transform: translate3d(0,0,0)}@-webkit-keyframes fadeInLeft{from{opacity: 0;-webkit-transform: translate3d(-100%, 0, 0);transform: translate3d(-100%, 0, 0)}to{opacity: 1;-webkit-transform: translate3d(0, 0, 0);transform: translate3d(0, 0, 0)}}@keyframes fadeInLeft{from{opacity: 0;-webkit-transform: translate3d(-100%, 0, 0);transform: translate3d(-100%, 0, 0)}to{opacity: 1;-webkit-transform: translate3d(0, 0, 0);transform: translate3d(0, 0, 0)}}.fadeInLeft{-webkit-animation-name: fadeInLeft;animation-name: fadeInLeft}@-webkit-keyframes fadeInUp{from{opacity: 0;-webkit-transform: translate3d(0, 100%, 0);transform: translate3d(0, 100%, 0)}to{opacity: 1;-webkit-transform: translate3d(0, 0, 0);transform: translate3d(0, 0, 0)}}@keyframes fadeInUp{from{opacity: 0;-webkit-transform: translate3d(0, 100%, 0);transform: translate3d(0, 100%, 0)}to{opacity: 1;-webkit-transform: translate3d(0, 0, 0);transform: translate3d(0, 0, 0)}}.fadeInUp{-webkit-animation-name: fadeInUp;animation-name: fadeInUp}@-webkit-keyframes slideInRight{from{-webkit-transform: translate3d(100%, 0, 0);transform: translate3d(100%, 0, 0);visibility: visible}to{-webkit-transform: translate3d(0, 0, 0);transform: translate3d(0, 0, 0)}}@keyframes slideInRight{from{-webkit-transform: translate3d(100%, 0, 0);transform: translate3d(100%, 0, 0);visibility: visible}to{-webkit-transform: translate3d(0, 0, 0);transform: translate3d(0, 0, 0)}}.slideInRight{-webkit-animation-name: slideInRight;animation-name: slideInRight}
        #home{
            background-color: grey;
        }
        body{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <b><span class="fs-4 d-none d-sm-inline">Shin Mizu</span></b>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="mizua.php" class="nav-link align-middle px-0 text-light">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline nav-link active" id="home">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="menu.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-light">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline" id="menu">Menu</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu"></ul>
                        </li>
                        <li>
                            <a href="person.php" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline text-light">Personal</span></a>
                        </li>
                        <li>
                            <a href="report.php" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline text-light">Report</span></a>
                        </li>
                    </ul>
                    <hr>
                    <div class="d-grid gap-2 col-3">
                <a href="login.html" class="btn btn-outline-danger my-3" type="submit" style="text-align:right ;">logout</a>
              </div>
              </div>
            </div>
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="mask flex-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-12 order-md-6 order-1" style="margin-top: 100px;">
                                <h4>MIZUMAN</h4>
                                <p>Hi Zuma lovers!! Selamat datang dan selamat menikmati produk produk special khas zuma dari kami ya!!.</p> <br>
                            </div>
                            <div class="col-md-4 col-12 order-md-2 order-1" ><img src="img/zuma.png" class="mx-auto" alt="slide"></div>
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>