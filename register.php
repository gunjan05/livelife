<?php include("connection.php");?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/register.css">
  <?php 
  include("links.php"); 
  ?>
</head>

<body style="background-image: url('home.jpg');">
  <?php 
  include("navbar.php"); 
  ?>
  <div class="form" style="margin-top: 100px;">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Register</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">             
          <form action="register1.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name
              </label>
              <input type="text" id="fname" name="fname" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name
              </label>
              <input type="text" id="lname" name="lname" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Mobile Number
            </label>
            <input type="tel" pattern="^\d{10}$" id="mobile" name="mobile" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password
            </label>
            <input type="password" id="psw" name="psw" required autocomplete="off"/>
          </div>
          
          <button type="submit" id="save" name="save" value="save" class="button button-block"/>Register</button>
          
          </form>

        </div>
        
        <div id="login">             
          <form action="loginclient.php" method="POST">
          
            <div class="field-wrap">
            <label>
              Mobile Number<span class="req"></span>
            </label for="mobile">
            <input type="tel" pattern="^\d{10}$" id="mobile" name="mobile" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label for="psw">
              Password<span class="req"></span>
            </label>
            <input type="password" name="psw" id="psw" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    
      
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
</body>
</html>
