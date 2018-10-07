<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<style type="text/css">
	body{
		background-color:  #FFFAFA;
	}
</style>
<div class="container">
	<h2>Contact us</h2>
	<h4>Feel Free To Contact Us Any Time</h4>
    <form action='feedback.php' method='POST'>
	<div class="row">
                    <div role="form">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control input-lg" id="name" name='name' type="text" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input class="form-control input-lg" id="email" name='email' type="text" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input class="form-control input-lg" id="mobile" name='mobile' type="text" placeholder="Mobile Number">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <textarea class="form-control input-lg" id="message" name='message' placeholder="Your Message" style="height: 118px"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name='save' id='save' class="btn btn-danger btn-block" value="save">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </form>
<div class="row" style="margin:5%">
	<div class="col-sm-2"></div>
	<div class="col-sm-4">
		<h1>"I am extremely pleased to see Live Love Life new platform which has an enhanced marketplace and an improved user experience."</h1>
	</div>
	<div class="col-sm-1"></div>
	<div class="col-sm-4">
		<img src="gunjan.jpg" class="img-circle" alt="Cinque Terre" style="height: 250px;width: 250px">
		<br>

		<p style="margin-top: 10px;margin-left: 18%">Sandeep Sibal</p>
<p style="margin-left:5%">CEO & Co-Founder, Fourth Frontier</p>
	</div>
</div>
</body>
</html>
