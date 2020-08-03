<?php include('index.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title></title>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
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
