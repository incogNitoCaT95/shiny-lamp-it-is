﻿<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:700,900|Fira+Sans:400,400italic'
          rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="/css/style.css"> <!-- Resource style -->
    <script src="/js/modernizr.js"></script> <!-- Modernizr -->

    <title>Despre Noi</title>

    <link rel="stylesheet" type="text/css" href="sticky-footer.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="icon" href="../logofinal.png">
    <link rel="stylesheet" type="text/css" href="/css/coloana.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
</head>
<body>

<?php require '../menu.php'; ?>

<div class="container">
    <div class="page-header" align=center>
        <h1>Despre Noi</h1>
    </div>
</div>

<section class="cd-horizontal-timeline">
    <div class="timeline">
        <div class="events-wrapper">
            <div class="events">
                <ol>
                    <li><a href="#0" data-date="09/09/2013" class="selected">Olivia</a></li>
                    <li><a href="#0" data-date="05/05/2014">Teodora</a></li>
                    <li><a href="#0" data-date="02/02/2016">Despre site</a></li>
                    <li><a href="#0" data-date="12/12/2017">Contact</a></li>
                    <li><a href="#0" data-date="09/09/2020">Mesaj</a></li>

                </ol>

                <span class="filling-line" aria-hidden="true"></span>
            </div> <!-- .events -->
        </div> <!-- .events-wrapper -->

        <ul class="cd-timeline-navigation">
            <li><a href="#0" class="prev inactive">Prev</a></li>
            <li><a href="#0" class="next">Next</a></li>
        </ul> <!-- .cd-timeline-navigation -->
    </div> <!-- .timeline -->

    <div class="events-content">
        <ol>
            <li class="selected" data-date="09/09/2013">
                <h2>Viţan Olivia</h2>
                <em>22 Octombrie 1996</em>
                <div class="container">
                    <div class="column-left">
                        <p>
                            <img src="/images/Oli.jpg" alt="Olivia">
                        </p>
                    </div>
                    <div class="column-right">
                        <p> Despre </p>
                    </div>
                </div>
            </li>

            <li data-date="05/05/2014">
                <h2>Vălean Teodora</h2>
                <em>16 Februarie 1998</em>
                <div class="container">
                    <div class="column-left">
                        <p> Despre </p>
                    </div>
                    <div class="column-right">
                        <p>
                            <img src="/images/Teo.jpg" alt="Teodora">
                        </p>
                    </div>
                </div>
            </li>

            <li data-date="02/02/2016">
                <h2>Inaugurarea site-ului</h2>
                <em>21 Aprilie</em>
                <div class="container">
                    <div class="column-left">
                        <p> Despre </p>
                    </div>
                    <div class="column-right">
                        <p>
                            <img src="/images/Panglica.jpg" alt="Teodora">
                        </p>
                    </div>
                </div>
            </li>

            <li data-date="12/12/2017">
                <h2>Contact</h2><br>
                <div class="container">
                    <div class="column-left">
                        <p><font size="6">Telefon:</font><br>
                            Olivia: 0766 100 575<br>
                            Teodora: 0786 065 886<br>
                        </p>
                        <p><font size="6">E-mail:</font><br>
                            gradinita_cu_flori@office.com<br>
                        </p>
                        <p><font size="6">Media:</font><br>
                            <a class="btn btn-default" href="https://www.facebook.com/">
                                <i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i>
                            </a>
                            <a class="btn btn-default" href="https://plus.google.com/collections/featured">
                                <i class="fa fa-google-plus fa-3x" aria-hidden="true"></i>
                            </a>
                            <a class="btn btn-default" href="https://www.instagram.com/">
                                <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
                            </a>
                            <a class="btn btn-default" href="https://www.tumblr.com/">
                                <i class="fa fa-tumblr fa-3x" aria-hidden="true"></i>
                            </a>
                    </div>
                    <div class="column-right">
                        <p>
                        <div id="googleMap" style="width:500px;height:380px;" align="right"></div>
                        </p>
                    </div>
                </div>
            </li>

            <li data-date="09/09/2020">
                <h2>Lasă-ne un mesaj</h2>
                <p><br>
                <div class="container">
                    <form action="mesaje.php" method="post">
                        <div class="form-group">
                            <label for="nume">Nume:</label>
                            <input type="text" class="form-control" name="nume" id="nume" placeholder="Numele tău ">
                        </div>
                        <div class="form-group">
                            <label for="mesaj">Mesaj:</label>
                            <input type="text" class="form-control" name="mesaj" id="mesaj" placeholder="Mesajul tău">
                        </div>
                        <button type="submit" class="btn btn-default">Trimite</button>
                    </form>
                    </form>
                </div>
                </p>
            </li>


        </ol>
    </div> <!-- .events-content -->
</section>


<footer class="footer">
    <div class="container">
        <p class="text-muted">Copyright © 2016 Olivia&Teodora. All rights reserved.</p>
    </div>
</footer>


<script src="/js/jquery-2.1.4.js"></script>
<script src="/js/jquery.mobile.custom.min.js"></script>
<script src="/js/main.js"></script> <!-- Resource jQuery -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
</script>

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
    var myCenter = new google.maps.LatLng(45.741405, 21.227351);

    function initialize() {
        var mapProp =
            {
                center: new google.maps.LatLng(45.741405, 21.227351),
                zoom: 18,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        var marker = new google.maps.Marker
        ({
            position: myCenter,
            icon: '../ikon.png'
        });
        marker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>

</body>
</html>