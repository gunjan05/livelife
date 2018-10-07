<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link rel="stylesheet" type="text/css" href="css/result.css" />
<?php
	   include('links.php'); 
	  ?> 

</head>

<body style="background-image: url('home.jpg');">
	 <?php
	   include('navbar.php'); 
	  ?> 

	<?php

	$quizId = $_GET['id'];
?>
<section>
<?php

	$answer1 = $_POST['answerOne'];
	$answer2 = $_POST['answerTwo'];
	$answer3 = $_POST['answerThree'];
	$answer4 = $_POST['answerFour'];
	$answer5 = $_POST['answerFive'];
	$answer6 = $_POST['answerSix'];
	$answer7 = $_POST['answerSeven'];

	$scoreA = 0;
	$scoreB = 0;
	
	if ($answer1 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer2 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer3 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer4 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer5 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer6 == "A"){$scoreA++;} else{$scoreB++;}
	if ($answer7 == "A"){$scoreA++;} else{$scoreB++;}

	if ($scoreA>$scoreB){?>
		<div id="box1" class="box blurred-bg tinted">
		  <div class="content">
		    <p class="related" style="size: 100px">Result</p>
		    	<p class="related">Based on the way you answered these questions, you or someone you know may be contemplating suicide. Talk it out. Please call 1-800-SUICIDE and tell the counselor about your results for this quiz.</p>  
		  </div>
		</div>
		<?php
	}
	else{ ?>
		<div id="box1" class="box blurred-bg tinted">
		  <div class="content">
		    <h1 style="font-weight: bold;">Result</h1>
		    	<p>Everything is Fine with you, Go enjoy your life.</p>

		  </div>
		</div>
	<?php }
?>
</section>
<!--End of the section-->
</body>
</html>