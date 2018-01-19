<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Criptoreal (CRS) Faucet</title>
<meta name="robots" content="noindex,nofollow, noodp,noydir"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body style="background:#e3f0fb; margin: 30px;">
<?php
	require_once("jsonRPCClient.php");

$alt = new jsonRPCClient('http://USER:PASSWORD=@127.0.0.1:PORT');
	?>
<div id="container">
<div class="row">
	<div class="col-md-12" style="margin-top: 50px;">
	<h1 align="center">Criptoreal (CRS) Faucet</h1>
	</div>
</div>
<div class="row">
<div id="error" class="col-md-4 col-md-offset-4" style="margin-top: 5px; margin-bottom: 5px;">
</div>
</div>
<div class="row">
<div class="col-md-4 col-md-offset-4" style="margin-top: 25px; margin-bottom: 30px;">
<form role="form"  id="faucet">
  <div class="form-group">
    <label for="address">Criptoreal Address</label>
    <input type="address" name="address" class="form-control" id="address" placeholder="CYyvm87Ywk4ures8wAELcMYrSux15Li7Qb">
  </div>
   <div class="captcha_wrapper">
	<div class="g-recaptcha" data-sitekey="GOOGLECAPTCHASITEKEY"></div>
		<br/>
	</div>
  <button type="submit" class="btn btn-default" name="submit">Submit</button>

</form>
</div>
</div>

<div class="row">
<div class="col-md-6 col-md-offset-3" style="margin-top: 30px; ">


<h5 align="center">Faucet Balance: <?php print_r($alt->getbalance()); ?> | CRS 1 to 3 payout.
<br><br>
 Donate to the faucet: <a href="criptoreal:CXAiLhMtUViKWjzrSSNqXh3dotCRiaAPeJ">CXAiLhMtUViKWjzrSSNqXh3dotCRiaAPeJ</a>
<br><br>
<a href="https://criptoreal.org" target="_blank">CriptoReal</a> <?php echo date("Y") ?> | <a href="github.com/CriptoReal/Criptoreal-Faucet" target="_blank">Github</a></h5>
</div>
</div>
</div>

<script src="faucet.js"></script>
</body>

</html>
