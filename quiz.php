<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<title>Stress-O-Meter</title>
<?php
  include('links.php');
?>
</head>
<body style="background-color: #faaa3a;">
<?php
  include('navbar.php'); 
?>  
<div id = 'wrapper' style="margin-top: 30px;">

<!--Header-->
<header>
	<h1 style="text-align: center;">SUICIDE RISKS: A QUIZ</h1>
    <p>Are you or someone you know at risk for suicide?
Take the following quiz, choosing any answers that apply.</p>
</header>
<!--End of the header-->
    
<!--Section-->
<section>
<?php
	echo "<form action='process.php?id=1' method='post' id='quizForm' id='1'>
	<ol>
		<li>
        <h3>Life is pointless and isn’t worth living.</h3>
        <div>
        	<input type='radio' name='answerOne' id='answerOne' value='A' />
        	<label for='answerOneA'>Yes </label>
       	</div>
		<div>
        	<input type='radio' name='answerOne' id='answerOne' value='B' />
        	<label for='answerOneB'>No </label>
        </div>
        </li>
		
		<li>
        <h3>If she/he leaves me, my life is over.</h3>
        <div>
        	<input type='radio' name='answerTwo' id='answerTwo' value='A' />
        	<label for='answerTwoA'>Yes</label>
        </div>
		<div>
        	<input type='radio' name='answerTwo' id='answerTwo' value='B' />
        	<label for='answerTwoB'>No</label>
        </div>
        </li>
	
        <li>
        <h3>If I don’t pass/achieve/obtain/win _____________, there’s no point in even living.</h3>
		<div>
	  		<input type='radio' name='answerThree' id='answerThree' value='A' />
        	<label for='answerThreeA'>Yes</label>
        </div>
        <div>
        	<input type='radio' name='answerThree' id='answerThree' value='B' />
        	<label for='answerThreeB'>No</label>
        </div>
    	</li>

        <li>
        <h3>I can’t take this anymore, but there’s no way to make it stop.</h3>
        <div>
            <input type='radio' name='answerFour' id='answerThree' value='A' />
            <label for='answerFourA'>Yes</label>
        </div>
        <div>
            <input type='radio' name='answerFour' id='answerThree' value='B' />
            <label for='answerFourB'>No</label>
        </div>
        </li>

        <li>
        <h3>I wouldn’t be missed by anyone if I ceased to exist.</h3>
        <div>
            <input type='radio' name='answerFive' id='answerThree' value='A' />
            <label for='answerFiveA'>Yes</label>
        </div>
        <div>
            <input type='radio' name='answerFive' id='answerThree' value='B' />
            <label for='answerFiveB'>No</label>
        </div>
        </li>

        <li>
        <h3>Nobody gets me. I don’t even know why I try.</h3>
        <div>
            <input type='radio' name='answerSix' id='answerThree' value='A' />
            <label for='answerSixA'>Yes</label>
        </div>
        <div>
            <input type='radio' name='answerSix' id='answerThree' value='B' />
            <label for='answerSixB'>No</label>
        </div>
        </li>

        <li>
        <h3>Next time, I’ll take more pills/use a bigger gun/use a sharper knife to end it all.</h3>
        <div>
            <input type='radio' name='answerSeven' id='answerThree' value='A' />
            <label for='answerSevenA'>Yes</label>
        </div>
        <div>
            <input type='radio' name='answerSeven' id='answerThree' value='B' />
            <label for='answerSevenB'>No</label>
        </div>
        </li>
    </ol>
	<input type='submit' value='Submit Quiz' />
	</form>";
?>
</section>
<!--End of the section-->
</div>
<!--End of the wrapper-->
</body>
</html>
