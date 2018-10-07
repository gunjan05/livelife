<!DOCTYPE html>
<html>
<head>
	<title>Challenge</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
     include('navbar.php'); 
    ?> 
	<div class="row" style="margin: 0px; margin-top: 20px;">
		<div class="col-sm-6">
			<h5>We will unlock a new challenge daily at 9am.</h5>			
		</div>
		<div class="col-sm-6">
			
		</div>
		<div class="container">
  <ul class="list-group list-group-flush" style="margin-top: 20px;">

    <li class="list-group-item">
    	<div class="row">
  		<div class="col-sm-6">
    	<h3>Day 1:Around The World</h3>
    	<br>
    	<p>Challenge : Go for morning and evening walk for next 10 days.</p>
    	</div>
    	<div class="col-sm-4">
    	<div class="form-group">
    	<label for="exampleInputFile">File input</label>
    	<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
   		</div>	
    	</div>
    	<div class="col-sm-2	">
    	<button type="button" id='complete' class="btn btn-outline-primary" style="align-self: center;margin-top: 20px">Complete</button>
    	</div>
    	</div>
    </li>

    <li class="list-group-item">
    	<div class="row">
  		<div class="col-sm-6">
    	<h3>Day 2:Memories</h3>
    	<br>
    	<p>Challenge : Call an old friend (or someone very close) and have a long talk.</p>
    	</div>
    	<div class="col-sm-4">
    	<div class="form-group">
    	<label for="exampleInputFile">File input</label>
    	<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" disabled>
   		</div>	
    	</div>
    	<div class="col-sm-2	">
    	<button type="button" class="btn btn-outline-primary" style="align-self: center;margin-top: 20px" disabled>Complete</button>
    	</div>
    	</div>
    </li>

    <li class="list-group-item">
    	<div class="row">
  		<div class="col-sm-6">
    	<h3>Day 3:Guest Chat</h3>
    	<br>
    	<p>Challenge : Go to a public place and talk to a stranger for half hour<br><small>Note:Photo to be uploaded should be with that person</small></p>
    	</div>
    	<div class="col-sm-4">
    	<div class="form-group">
    	<label for="exampleInputFile">File input</label>
    	<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" disabled>
   		</div>	
    	</div>
    	<div class="col-sm-2	">
    	<button type="button" class="btn btn-outline-primary" style="align-self: center;margin-top: 20px" disabled>Complete</button>
    	</div>
    	</div>
    </li>

    <li class="list-group-item">
    	<div class="row">
  		<div class="col-sm-6">
    	<h3>Day 4:Act it out</h3>
    	<br>
    	<p>Challenge : Watch a latest movie in theatre. </p>
    	</div>
    	<div class="col-sm-4">
    	<div class="form-group">
    	<label for="exampleInputFile">File input</label>
    	<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" disabled>
   		</div>	
    	</div>
    	<div class="col-sm-2	">
    	<button type="button" class="btn btn-outline-primary" style="align-self: center;margin-top: 20px" disabled>Complete</button>
    	</div>
    	</div>
    </li>

    <li class="list-group-item">
    	<div class="row">
  		<div class="col-sm-6">
    	<h3>Day 5:Dancing</h3>
    	<br>
    	<p>Challenge : Go to free trial zumba class.</p>
    	</div>
    	<div class="col-sm-4">
    	<div class="form-group">
    	<label for="exampleInputFile">File input</label>
    	<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" disabled>
   		</div>	
    	</div>
    	<div class="col-sm-2	">
    	<button type="button" class="btn btn-outline-primary" style="align-self: center;margin-top: 20px" disabled>Complete</button>
    	</div>
    	</div>
    </li>

    <li class="list-group-item">
    	<div class="row">
  		<div class="col-sm-6">
    	<h3>Day 6:Long Day</h3>
    	<br>
    	<p>Challenge : Go out for treking.</p>
    	</div>
    	<div class="col-sm-4">
    	<div class="form-group">
    	<label for="exampleInputFile">File input</label>
    	<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" disabled>
   		</div>	
    	</div>
    	<div class="col-sm-2	">
    	<button type="button" class="btn btn-outline-primary" style="align-self: center;margin-top: 20px" disabled>Complete</button>
    	</div>
    	</div>
    </li>

    <li class="list-group-item">
    	<div class="row">
  		<div class="col-sm-6">
    	<h3>Day 7:Act of kindness</h3>
    	<br>
    	<p>Challenge : Visit an oprhanage or oldage home near by.</p>
    	</div>
    	<div class="col-sm-4">
    	<div class="form-group">
    	<label for="exampleInputFile">File input</label>
    	<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" disabled>
   		</div>	
    	</div>
    	<div class="col-sm-2">
    	<button id='complete' type="button" class="btn btn-outline-primary" style="align-self: center;margin-top: 20px" disabled>Complete</button>
    	</div>
    	</div>
    </li>

    <li class="list-group-item">
    	<div class="row">
  		<div class="col-sm-6">
    	<h3>Day 8:Making Money</h3>
    	<br>
    	<p>Challenge : Sell 30 things you don’t need, use or wear anymore.<br><small>Note:Upload picture of Unwanted things.</small></p>
    	</div>
    	<div class="col-sm-4">
    	<div class="form-group">
    	<label for="exampleInputFile">File input</label>
    	<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" disabled>
   		</div>	
    	</div>
    	<div class="col-sm-2">
    	<button type="button" class="btn btn-outline-primary" style="align-self: center;margin-top: 20px" disabled>Complete</button>
    	</div>
    	</div>
    </li>

    <li class="list-group-item">
    	<div class="row">
  		<div class="col-sm-6">
    	<h3>Day 9:Paint it</h3>
    	<br>
    	<p>Challenge : Vist a calm place and paint what comes to your mind.<br><small>Note:Upload picture of your painting.</small> </p>
    	</div>
    	<div class="col-sm-4">
    	<div class="form-group">
    	<label for="exampleInputFile">File input</label>
    	<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" disabled>
   		</div>	
    	</div>
    	<div class="col-sm-2">
    	<button type="button" class="btn btn-outline-primary" style="align-self: center;margin-top: 20px" disabled>Complete</button>
    	</div>
    	</div>
    </li>

    <li class="list-group-item">
    	<div class="row">
  		<div class="col-sm-6">
    	<h3>Day 10:Final Day</h3>
    	<br>
    	<p>Challenge : Watching the sunset just recall your last few days. How beautiful LIFE is!!!</p>
    	</div>
    	<div class="col-sm-4">
    	<div class="form-group">
    	<label for="exampleInputFile">File input</label>
    	<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" disabled>
   		</div>	
    	</div>
    	<div class="col-sm-2">
    	<button type="button" class="btn btn-outline-primary" style="align-self: center;margin-top: 20px" disabled>Complete</button>
    	</div>
    	</div>
    </li>
  </ul>
</div>
		
	</div>
<script type="text/javascript">
    $(".btn").click(function() {
  var btn = document.getElementById('complete');
  btn.removeClass("btn-outline-primary");
  btn.addClass("btn-success");
});
</script>

</body>
</html>