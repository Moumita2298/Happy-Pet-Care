<?php include('index.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

  <body class="pro">
    <div class="top-nav-bar pro1">
      <div class="search-box pro2">
        <i class="fa fa-bars" style="color:CadetBlue " id="menu-btn-bt" onclick="openmenu()"></i>
        <i class="fa fa-times" style="color:CadetBlue " id="close-btn-bt" onclick="closemenu()"></i>


        <input type="text" class="form-control pro3">
        <span class="input-group-text pro4"><i class="fa fa-search fa" aria-hidden="true"></i>
</span>
      </div>
      <div class="menu-bar menu">
        <ul>
          <li> <a href="#">cart</a> </li>
          <li> <a href="#">Image</a> </li>
          <li> <a href="#">Description</a> </li>
        </ul>
      </div>
    </div>
    <section class="header">
      <div class="side-menu sm" id="side-menu-sm">
        <ul>
          <li> On Sale<i class="fa fa-angle-right m" style="color:black"></i>
            <ul>
              <li>Sub-menu1</li>
              <li>Sub-menu1</li>
            </ul>
          </li>
          <li> Pet Bed<i class="fa fa-angle-right m" style="color:black"></i>
            <ul>
            <li>Sub-menu2</li>
            <li>Sub-menu2</li>
          </ul>
          </li>
          <li>Dog Seat Cover<i class="fa fa-angle-right m" style="color:black"></i>
            <ul>
              <li>Sub-menu3</li>
              <li>Sub-menu3</li>
            </ul>
          </li>
          <li> Multifunction Biting Toys<i class="fa fa-angle-right m" style="color:black"></i>
            <ul>
            <li>Sub-menu2</li>
            <li>Sub-menu2</li>
          </ul>
          </li>
          <li> Pet Toothbrush<i class="fa fa-angle-right m" style="color:black"></i>
            <ul>
            <li>Sub-menu2</li>
            <li>Sub-menu2</li>
          </ul>
          </li>
          <li> Pet Grooming<i class="fa fa-angle-right m" style="color:black"></i>
            <ul>
            <li>Sub-menu2</li>
            <li>Sub-menu2</li>
          </ul>
          </li>
          <li> Pet Painting<i class="fa fa-angle-right m" style="color:black"></i>
            <ul>
            <li>Sub-menu2</li>
            <li>Sub-menu2</li>
          </ul>
          </li>
          <li> Novelty Cat Beds<i class="fa fa-angle-right m" style="color:black"></i>
            <ul>
            <li>Sub-menu2</li>
            <li>Sub-menu2</li>
          </ul>
          </li>
          <li> Dog Jackets<i class="fa fa-angle-right m" style="color:black"></i>
            <ul>
            <li>Sub-menu2</li>
            <li>Sub-menu2</li>
          </ul>
          </li>
          <li> Personalized pet Collar<i class="fa fa-angle-right m" style="color:black"></i>
            <ul>
            <li>Sub-menu2</li>
            <li>Sub-menu2</li>
          </ul>
          </li>
          <li> Pet Bath tub /Pool<i class="fa fa-angle-right m" style="color:black"></i>
            <ul>
            <li>Sub-menu2</li>
            <li>Sub-menu2</li>
          </ul>
          </li>
          <li> Pet Body Wash<i class="fa fa-angle-right m" style="color:black"></i>
            <ul>
            <li>Sub-menu2</li>
            <li>Sub-menu2</li>
          </ul>
          </li>
          <li> Pet Toy<i class="fa fa-angle-right m" style="color:black"></i>
            <ul>
            <li>Sub-menu2</li>
            <li>Sub-menu2</li>
          </ul>
          </li>
          <li> Pet hair remover<i class="fa fa-angle-right m" style="color:black"></i>
            <ul>
            <li>Sub-menu2</li>
            <li>Sub-menu2</li>
          </ul>
          </li>
        </ul>
      </div>

      <div class="slider">
        <div id="slider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators" style="background-color:grey">
    <li data-target="#slider" data-slide-to="0" class="active"></li>
    <li data-target="#slider" data-slide-to="1"></li>
    <li data-target="#slider" data-slide-to="2"></li>
    <li data-target="#slider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/p1.jpg" alt="First slide" height="500px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/b1.jpg" alt="Second slide" height="500px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/bed1.png" alt="Third slide" height="500px">
    </div>
  </div>


</div>

      </div>




    </section>


    <script>
    function openmenu()
    {
      document.getElementById("side-menu-sm").style.display="block";
      document.getElementById("menu-btn-bt").style.display="none";
      document.getElementById("close-btn-bt").style.display="block";

    }
    function closemenu()
    {
      document.getElementById("side-menu-sm").style.display="none";
      document.getElementById("menu-btn-bt").style.display="block";
      document.getElementById("close-btn-bt").style.display="none";

    }

    </script>

  </body>
</html>
