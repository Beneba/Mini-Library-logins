<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link  href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <title>Register page</title>
  </head>
  <body>
  	<div class="col-lg-6 col-lg-offset-2">
    	<h1>Register page</h1>

    		<p>Please fill in the form to register</p>
    	<?php if (isset($_SESSION['success'])){?>
    		<div class="alert alert-success"><?php echo  $_SESSION['success'];?></div>
    	<?php 

    	}?>

		<?php echo validation_errors('<div class=" alert alert-danger">', '</div>'); ?>

	
		<form method="POST" action="">
				
		  <div class="form-group">
		    <label for="name"> name</label>
		    <input class="form-control" name="name" id="name"  required="" type="test">

			</div>

		

		  <div class="form-group">
		    <label for="email">email </label>
		    <input class="form-control" name="email" id="Email" placeholder="Email" required="" type="email">
			</div>

			<div class="form-group">
		    <label for="username"> username</label>
		    <input class="form-control" name="username" id="username"  required="" type="test">

			</div>

		  <div class="form-group">
		    <label for="password">password</label>
		    <input class="form-control" name="password" id="password" required="" type="password">
			</div>
		  

				
				 
			<button class="btn  btn-lg btn-primary " name="register">Register</button>


		</form>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

  </body>
</html>