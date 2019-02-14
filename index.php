<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" lang="fr">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<!-- ******************** -->
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
	<!-- **************** -->


	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="script.js" ></script>
	<title></title>
</head>
<body style="background-image: linear-gradient(, ); ">
	<nav class="navbar navbar-light bg-light">
	  <a class="navbar-brand" href="#">
	    <img src="tse.jpeg" width="30" height="30" class="d-inline-block align-top" alt="">
	    TSE immo
	  </a>
		<form class="form-inline my-2 my-lg-0" method="post" action="search.php">
			<select class="custom-select form-control mr-sm-1 " name="poste">
			  	<option selected>contract type</option>
				<option value="Cash loans">Cash loans</option>
				<option value="Revolving loans">Revolving loans</option>
				<option value="attaque">not exist</option>
			</select>
			<input class="form-control mr-sm-1" disabled="true" type="text" placeholder="age max" name="age" >
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	</nav>

	<div class="container">
		
		<hr size="30">
		<!-- ======================== graphe ================= -->
		<?php require('canvas.php');	?>

		<hr>
	</div>


<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>    

<!-- ************************** -->
<!-- Footer -->
<footer class="footer footer-fixed-bottom bg-light">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://fr.linkedin.com/in/yassine-birouk-299567139"> <i class="fab fa-linkedin" aria-hidden="true"></i></a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</body>
</html>
