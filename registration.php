<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title></title>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</head>
  <body>

    <div class="container bg" style="background-image: url('image/bg1.jpg');">
       <div class="row">
        <div class="col-sm">

        </div>
       <div class="col-sm " >
         <form class="form-container" action="continue_reg.php" method="post">

           <?php
           if (null != isset($_GET['error'])) {
                     echo '<p class="text-danger">Wrong email or password.</p>';
                   }
            ?>
           <div id="legend">
             <legend class="">Registration</legend>
           </div>
           <div class="form-group">
             <label for="uname">User name:</label>
             <input type="text" class="form-control" placeholder="User name" name="uname"  id="uname" required>
           </div>
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="text" class="form-control" placeholder="Enter email"name="email" id="email"required>
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" name="pwd" id="pwd" required>
          </div>
          <div class="form-group">
            <label for="cpwd">Confirm password:</label>
            <input type="password" class="form-control" placeholder="confirm password" name="cpwd" id="cpwd"required>
          </div>
          <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox"> Remember me
            </label>
          </div>
          <input type="submit" class="btn btn-primary btn-block" name="submit" value="submit" > </input>
         </form>
         <p style="color:white"><b><i>Already a member!!<a href="login.php">Login</a></i></b></p>

       </div>
       <div class="col-sm">

       </div>
   </div>
</div>




  </body>
</html>
