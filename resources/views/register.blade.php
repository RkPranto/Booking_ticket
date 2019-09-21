<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" href="{{ asset('css/register.css') }}"/>
		<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    </head>
    <body>
    		
        <div class="container">
			<header id="header">
					<h1><a href="#">KUET BUS Management</a></h1>
				
			</header>

			<section class="main">
				<form action="/signup" method ="POST" class="form-4" style="text-align:center">
					@csrf
					<h1 style="font-weight: bold; text-align:center;margin-bottom:15px;">Register</h1>
					<input class="form-control" name="name" placeholder="Enter name" type="text"><br>
					<input class="form-control" type="email" name="email" placeholder="Email" value="<?php if(isset($_SESSION['email']))echo $_SESSION['email']; ?>" required>
					<br>
	
					<input class="form-control"  type="password" name="password" placeholder="Password" required>
					<br>

					<input class="form-control"  type="text" name="address" placeholder="Address" required>
					<br>

					<input class="form-control"  type="text" name="contact" placeholder="Contact No." required>
					<br>
					
					<label for="gender">Gender: </label><br>
					<select name='gender' id="gender" class="selectpicker btn" style="margin-bottom:10px; margin-left:0px;">
						<option>Male</option>
						<option>Female</option>
					</select>
					<br>

					<input class="form-control"  type="number" name="age" placeholder="Age" required>
					<br>
					<input  class="btn btn-primary"  type="submit" name="signup_button" value="Sign Up"><br>
	
				</form>
			</section>

        </div>

			<footer id="footer">
				<li>&copy; 2019 @ All rights reserved. Brought To You By <a href="#">Rezwan Pranto</a></li>
			</footer>
    </body>
</html>
