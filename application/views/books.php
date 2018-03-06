<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link  href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <title>Book Registration</title>
  </head>
  <body>
  	<div class="col-lg-6 col-lg-offset-2">
    	<h1><a href="#" class="btn  btn-lg btn-success ">Add Book</a></h1>

    		<p>Please fill in the form to register</p>


    		<?php if (isset($_SESSION['success'])){?>
    		<div class="alert alert-success"><?php echo  $_SESSION['success'];?></div>
    	<?php 

    	}?>

		<?php echo validation_errors('<div class=" alert alert-danger">', '</div>'); ?>
   

	
		<form method="POST" action="">
				
		  <div class="form-group">
		    <label for="book-id"> Book ID</label>
		    <input class="form-control" name="book-id" id="book-id"  required="" type="test">

			</div>

		

		  <div class="form-group">
		    <label for="book_isbm">Book isbm </label>
		    <input class="form-control" name="book_isbm" id="book_isbm" placeholder=" " required="" type="test">
			</div>

			<div class="form-group">
		    <label for="book_title"> Book Title</label>
		    <input class="form-control" name="book_isbm" id="book_isbm"  required="" type="test">

			</div>

		  <div class="form-group">
		    <label for="book_author">Book Author</label>
		    <input class="form-control" name="book_author" id="book_author" required="" type="test">
			</div>

			<div class="form-group">
		    <label for="book_category">Book Category</label>
		    <input class="form-control" name="book_category" id="book_category" required="" type="test">
			</div>
		  

				
				 
			<button class="btn  btn-lg btn-primary " name="register">Register Book</button>


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