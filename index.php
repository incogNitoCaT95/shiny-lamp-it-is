<!DOCTYPE html>
<html lang="en">
<?php require 'head.php'; ?>
<body>
<style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 100%;
        margin: auto;
    }

    * {
        padding: 0;
        margin: 0;
    }
    .fit { /* set relative picture size */
        max-width: 20%;
        max-height: 0%;
    }
    .center {
        display: block;
        margin: auto;
    }
</style>

<?php require_once 'menu.php'; ?>

<!-- Begin page content -->
    <div class="container">
	
      <div class="page-header" align=center>
        <h1>Spațiul tău de recreere virtual</h1>
	
      </div>
	<img class="center fit" SRC="/images/d.png" STYLE="position:relative; TOP:-30px; BOTTOM:-10px; LEFT:40%;">
    </div>
	



<div class="container">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
	  <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
	
	
	
	
	
	<!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="/images/a11.jpg" alt="Avocado" width="460" height="345">
        <div class="carousel-caption">
          <h3>Avocado</h3>
        </div>
      </div>

      <div class="item">
        <img src="/images/flori.jpg" alt="" width="460" height="345">
        <div class="carousel-caption">
          <h3>Bumbişori</h3>
          <p>Apreciază micile minuni ale naturii</p>
        </div>
      </div>
    
      <div class="item">
        <img src="/images/lalele1.jpg" alt="Lalele" width="460" height="345">
        <div class="carousel-caption">
          <h3>Culori...</h3>
          <p>Colorează-ţi viaţa :)</p>
        </div>
      </div>

     <div class="item">
        <img src="/images/flori2.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Fii liber...</h3>
          <p>Înconjoară-te de energia pozitivă transmisă de natură.</p>
        </div>
      </div>
	  
	   <div class="item">
        <img src="/images/flori1.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Fii liber...</h3>
          <p>Înconjoară-te de energia pozitivă transmisă de natură.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<?php require_once 'footer.php'; ?>