<html>
<head>
    <title>Project</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/slicknav.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/carofredsel.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


  <body class="ser" >

    <?php
          session_start();
          if(isset($_SESSION["uname"]))
          {
               if((time() - $_SESSION['last_login_timestamp']) > 600) // 900 = 15 * 60
               {
                    header("location:logout.php");
               }
               else
               {
                    $_SESSION['last_login_timestamp'] = time();

                    echo "<p align='center'><a href='logout.php'>Logout</a></p>";
               }
          }
          else
          {
               header('location:login.php');
          }
          ?>
   <header>
        <ul  class="menu" id="menu">
            <li><a class="active" href="#slidr-carousel">Home</a></li>
            <li><a href="#intro">Our Story</a></li>
            <li><a href="#intro">Services</a></li>
            <li><a href="#testimonial">Clients</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#contact">Contact</a></li>

        </ul>

   </header>
   <section class="slider">
      <ul class="slidr-carousel" id="slidr-carousel">
          <li class="img1">
              <h2>Happy <span>Pet</span> Care</h2>

              <i class="fa fa-facebook"></i>
              <i class="fa fa-instagram"></i>
              <i class="fa fa-youtube"></i>
              <p><br>
              Pets have <span>more love and compassion</span> <br>in them than most Humans
              </p><br>
              

          </li>
           <li class="img2">
              <h2>Happy <span>Pet</span> Care</h2>

              <i class="fa fa-facebook"></i>
              <i class="fa fa-instagram"></i>
              <i class="fa fa-youtube"></i>
              <p><br>
              Pets have <span>more love and compassion</span> <br>in them than most Humans
              </p><br>
              <a href="" class="btn btn-half">LOG OUT</a>
          </li>

      </ul>

   </section>
   <!-- end homepage -->

   <section class="about-section" id="about">
     <div class="img">
      <div class="container">
       <div class="row">
            <div class="col-sm-12 text-center">
               <h2>Our Story</h2>
               <div class="sub-heading">
                   <p>
                       We can judge the heart of a man <br>by his treatment of animals.
                   </p>
               </div>

            </div>

         </div>
         <div class="about1">



              <p><b>In our site people can find pet which they want.We take order from the customer and We also provide them their pet's food,toy,
                and other necessary things also.
                We can help them to find a better one to give them details information about that
                specific one which they would like to buy...
                Our most important feature in this site will be to take care of pet
                health. Visitor will find some health tips for their pets.</b></p>


      </div>
         </div>
         </div>
   </section>



   <!--end story-->

   <section class="intro-area white" id="intro">
     <div class="img3">
      <div class="container">
         <div class="row">
            <div class="col-sm-12 text-center">
               <h2>WORK WITH SMILE</h2>
               <div class="sub-heading">
                   <p>
                       We can judge the heart of a man <br>by his treatment of animals.
                   </p>
               </div>

            </div>

         </div>
           <div class="row">
        <div class="col-md-3 text-center tx">
          <div class="icon">
            <i class="fa fa-ship" aria-hidden="true"></i>
          </div>
          <h3><a href="sale/sale.html">Pet for Sale</a></h3>
          <p>In this site You can find your desired pet...</p>

        </div>
        <div class="col-md-3 text-center tx">
          <div class="icon">
            <i class="fa fa-cutlery" aria-hidden="true"></i>
          </div>
            <h3><a href="Food/food.html">Pet Food</a></h3>
          <p>You can buy pet food from our website... </p>

        </div>
        <div class="col-md-3 text-center tx">
          <div class="icon">
            <i class="fa fa-product-hunt" aria-hidden="true"></i>
          </div>
          <h3><a href="product/product.html">Product</a></h3>
          <p>You can find your necessary  pet product here...</p>

        </div>
        <div class="col-md-3 text-center tx">
          <div class="icon">
            <i class="fa fa-heartbeat" aria-hidden="true"></i>

          </div>
            <h3><a href="medicle/medicle.php">Health Care</a></h3>
          <p>Here we served you the better health care service.
            Any emergency need you can find your needed solution here...</p>
        </div>

      </div>

      </div>
      </div>

   </section>
   <!--end section-->

   <section class="testimonials" id="testimonial">
      <div class="container">
         <div class="row">
            <div class="col-sm-12 text-center">
               <h2>AWSOME CLIENTS</h2>
               <div class="sub-heading">
               <p>When I make my clients SMILE<br>that's real success.</p>
               </div>

            </div>

         </div>
         <div class="row">
            <div class="col-sm-12">
               <div id="carousel-testimonials" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
                     <li data-target="#carousel-testimonials" data-slide-to="1" ></li>


                  </ol>

                  <div class="carousel-inner">
                     <div class="item active text-center">

                        <h2>WE are Beginner</h2>
                        <p>When we Start our clients review will be visible here.</p>

                     </div>
                     <div class="item text-center">
                        <h2>Work with US</h2>
                        <p>We will make you pleased.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end testimonial-->

   <section class="team-area" id="team">
     <div class="img4">
      <div class="container">
         <div class="row">
              <div class="col-sm-12 text-center">
               <h2>Our Team</h2>
               <div class="sub-heading">
               <p>The strength of the team is each individual member.<br>The strangth of each member is a team.</p>
               </div>

            </div>
         </div>
         <div class="row">
            <div class="col-sm-6 col-md-3">

            </div>
             <div class="col-sm-6 col-md-3">
               <div class="team-block">
               <div class="team-man">
                  <img src="Images/20200725_165758_2.jpg">

               </div>

               <div class="team-description">
                  <div class="team-title">
                     <h3>Moumita Goswami</h3>
                     <span>Student</span>

                  </div>
                  <p>
                      Student of Software engineering at Daffodil International University. Working on Web developing from last four months. Trying to build up a Web site.
                  </p>
                  <div class="team-social-network">
                     <a href=""><i class="fa fa-facebook"></i></a>
                     <a href=""><i class="fa fa-twitter"></i></a>
                     <a href=""><i class="fa fa-linkedin"></i></a>

                  </div>
                 </div>
               </div>

            </div>
             <div style="margin-top: 50;" class="col-sm-6 col-md-3">
              <div class="team-block">
                <div class="team-man">
                  <img src="Images/IMG_2874_2.JPG">

               </div>
               <div class="team-description">
                  <div class="team-title">
                     <h3>Farhana Tanjum</h3>
                     <span>Student</span>

                  </div>
                  <p>
                      Student of Software engineering at Daffodil International University. Working on Web developing from last four months. Trying to build up a Web site.
                  </p>
                  <div class="team-social-network">
                     <a href=""><i class="fa fa-facebook"></i></a>
                     <a href=""><i class="fa fa-twitter"></i></a>
                     <a href=""><i class="fa fa-linkedin"></i></a>

                  </div>

               </div>

               </div>

            </div>
             <div class="col-sm-6 col-md-3">

            </div>

         </div>

      </div>
     </div>
   </section>

   <!-- end team -->

   <section class="contact-area" id="contact" >
      <div class="img5">
       <div class="container">
          <div class="row">
             <div class="col-sm-12 text-center">
                <h2>CONTACT US</h2>
                 <div class="sub-heading">
               <p>The strength of the team is each individual member.<br>The strangth of each member is a team.</p>
               </div>

             </div>

          </div>
          <div class="row">
             <div class="col-sm-3 devider">
                <h3>contact</h3>
                <div class="contact-address">
                   <ul>
                       <li>
                           <i class="fa fa-home"></i>
                           <div class="address-phone">
                              <h4>address</h4>
                              <span>1234 Mirpur road</span>
                              <span>Dhaka,Bangladesh</span>

                           </div>
                       </li>
                        <li>
                           <i class="fa fa-phone"></i>
                           <div class="address-phone">
                              <h4>Phone</h4>
                              <span>123456789</span>


                           </div>
                       </li>
                        <li>
                           <i class="fa fa-paper-plane"></i>
                           <div class="address-phone">
                              <h4>Email</h4>
                              <span>abc@gmail.com</span>


                           </div>
                       </li>

                   </ul>

                </div>

             </div>
             <div class="col-sm-9">
                <div class="contact-block">
                   <h3>Drop a message</h3>
                   <form class="contact-form" action="form.php" method="post">
                       <div class="row">
                           <div class="col-sm-6">
                               <div class="form-group">
                                   <input type="text" class="form-control" placeholder="your first name"  name="uname" required="required">
                               </div>
                               <div class="form-group">
                                   <input type="text" class="form-control" placeholder="your email@ address" name="email" required="required">
                               </div>
                               <div class="form-group">
                                   <input type="text" class="form-control" placeholder="your phone number" name="phone" required="required">
                               </div>
                           </div>
                           <div class="col-sm-6">
                               <div class="form-group">
                                   <textarea class="font-control" placeholder="message" name="msg" required="required" ></textarea>
                               </div>
                               <div class="form-group">
                                   <input type="submit" style="color:black" class="btn default-btn btn-block"  name="submit" value="Submit Quries">
                               </div>
                           </div>
                       </div>
                   </form>

                </div>

             </div>

          </div>
       </div>
       </div>

   </section>
   <!-- end contact-->
   <footer>
      <div class="img6">
       <div class="row">
          <div class="col-md-4">

          </div>
          <div class="col-md-4 text-center">
              <h1>PeTLovers</h1>
              <h3>Thanks for visiting our page.</h3>
              <p>Stay Connected with us</p>
               <div class="team-social-network">
                     <a href="service.html"><i class="fa fa-facebook"></i></a>
                     <a href="service.html"><i class="fa fa-twitter"></i></a>
                     <a href="service.html"><i class="fa fa-linkedin"></i></a>

                  </div>
          </div>
          <div class="col-md-4">

          </div>


       </div>
       </div>

   </footer>



    <script src="js/main.js"></script>
    <script src="js/jquery.slicknav.min.js" type="text/javascript"></script>

</body>
</html>
