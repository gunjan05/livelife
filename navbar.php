<?php
 session_start();
?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php"><h1>Live Love Life</h1></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="questions.php" class="nav-link" style="color: black;">FAQs</a></li>
          <li class="nav-item"><a href="#contact" class="nav-link" style="color: black;">Contact Us</a></li>
              <?php
            if(!isset($_SESSION['cilentlog']))
              { ?>
                  <li class="nav-item"><a href="register.php" class="nav-link" style="color: black;">Login|Register</a></li>
              <?php }
            else{?>
                  <li class="nav-item"><a href="logout.php" class="nav-link" style="color: black;">Logout</a></li>
            <?php
            }
            ?>
          <li class="nav-item"><a href="#" class="nav-link" style="color: black;"><i class="fas fa-phone"></i> 91-22-27546669</a></li>
        </ul>
      </div>
    </div>
  </nav>