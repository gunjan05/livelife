<?php include("connection.php");  ?>
<?php

  //Get total number of questions
  $query = "select * from contact";
  $results = $conn->query($query) or die($conn->error.__LINE__);
  $total=$results->num_rows;

  //Get result
  $result = $conn->query($query) or die($conn->error.__LINE__);
  $question = $result->fetch_assoc();
 ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

  </head>

  <body>

    <?php

    echo $question;?>
    
  </body>

</html>
