<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/metro-bootstrap.css" rel="stylesheet">
    <link href="css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="css/iconFont.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">

    <!-- Load JavaScript Libraries -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.widget.min.js"></script>
    <script src="js/jquery/jquery.mousewheel.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="js/load-metro.js"></script>
    <script src="js/docs.js"></script>

    <title>Selamat Datang di WISATASIA</title>

</head>

<body class="metro">
    <header class="bg-darkCobalt" data-load="header.php"></header>

    <div class="" data-load="slider.php"></div>
    <br />
    <div class="container grid">
        <div class="border padding15">
            <div class="row">
                <div class="span7">
                    <legend>Galeri Kab Aceh Tamiang</legend>
                    <div class="carousel" id="imgSlide">
                        <div class="slide">
                            <img src="img/a2.jpg" class="cover1" />
                        </div>
                        <div class="slide">
                            <img src="img/a2.jpg" class="cover1" />
                        </div>
                    </div>
                </div>
                <div class="span7">
                    <legend>Galeri Alam Tamiang</legend>
                    <div class="carousel" id="imgSlide1">
                        <div class="slide">
                            <img src="img/3.jpg" class="cover1" />
                        </div>
                        <div class="slide">
                            <img src="img/3.jpg" class="cover1" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border padding15">
            <div class="row">
                <div class="span7">
                    <legend>Galeri keidahan Tamsar 27</legend>
                    <div class="carousel" id="imgSlide2">
                        <div class="slide">
                            <img src="img/a3.jpg" class="cover1" />
                        </div>
                        <div class="slide">
                            <img src="img/a3.jpg" class="cover1" />
                        </div>
                    </div>
                </div>
                <div class="span7">
                    <legend>Galeri Batu Kapur</legend>
                    <div class="carousel" id="imgSlide3">
                        <div class="slide">
                            <img src="img/2.jpeg" class="cover1" />
                        </div>
                        <div class="slide">
                            <img src="img/3.jpg" class="cover1" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border padding15">
            <div class="row">
                <div class="span7">
                    <legend>Galeri Keidahan Alam</legend>
                    <div class="carousel" id="imgSlide4">
                        <div class="slide">
                            <img src="img/a1.jpg" class="cover1" />
                        </div>
                        <div class="slide">
                            <img src="img/a2.jpg" class="cover1" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(function() {
                $("#imgSlide").carousel({
                    effect: 'slide',
                    period: 3000,
                    markers: {
                        show: true,
                        type: 'default',
                        position: 'bottom-right'
                    }
                });
                $("#imgSlide1").carousel({
                    effect: 'fade',
                    period: 3000,
                    markers: {
                        show: true,
                        type: 'default',
                        position: 'bottom-right'
                    }
                });
                $("#imgSlide2").carousel({
                    effect: 'slowdown',
                    period: 3000,
                    markers: {
                        show: true,
                        type: 'default',
                        position: 'bottom-right'
                    }
                });
                $("#imgSlide3").carousel({
                    effect: 'switch',
                    period: 3000,
                    markers: {
                        show: true,
                        type: 'default',
                        position: 'bottom-right'
                    }
                });
                $("#imgSlide4").carousel({
                    effect: 'switch',
                    period: 3000,
                    markers: {
                        show: true,
                        type: 'default',
                        position: 'bottom-right'
                    }
                });
            })
        </script>

</body>
<footer class="dark" data-load="footer.html"></footer>

</html>