<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>project</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
   <div class="wrapper">
       <div class="nav">
          <div class="logo">
             <h4><i><b>PeTLoVeR</b></i></h4>
              
          </div>
          <div class="links" id="links">
           <i class="fa fa-close"onclick="closeMenu()"  ></i>
            <ul>
             <a href="#"><li>Home</li></a>
             <a href="#"><li>Our Story</li></a>
             <a href="#"><li>Services</li></a>
             <a href="#"><li>Team</li></a>
             <a href="#"><li>Contact</li></a>
            </ul> 
            <button type="button" class="btn"><a href="login.php">SIGN UP</a></button> 
          </div>
          <i class="fa fa-bars" onclick="showMenu()" ></i>
       </div>
       <div class="title">
          <h1>Pets have <span>more love and compassion</span> <br>in them than most Humans</h1>
           <button type="button" class="btn"><a href="index%20(2).php">LEARN MORE</a></button>
       </div>
       <div class="bar">
          <div class="search-icons">
              <i class="fa fa-list" ></i>
              <i class="fa fa-search" ></i>
          </div>
           <div class="social-icons">
               <i class="fa fa-facebook" ></i>
               <i class="fa fa-instagram" ></i>
               <i class="fa fa-youtube" ></i>
           </div>
       </div>
   </div>
    <script>
        var show = document.getElementById("links");
        function showMenu(){
            show.style.right="0";
        }
        function closeMenu(){
            show.style.right="-200px";
        }
    </script>
</body>
</html>




























