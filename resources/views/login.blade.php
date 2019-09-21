<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login: KUET Bus Mangement</title>
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
				<form action="/checklogin" method ="POST" class="form-4" style="text-align:center">
					@csrf
					<h1 style="font-weight: bold; text-align:center;margin-bottom:15px;">LOGIN</h1>
					
					<input class="form-control" type="email" name="email" placeholder="Email" value="<?php if(isset($_SESSION['email']))echo $_SESSION['email']; ?>" required>
					<br>
	
					<input class="form-control"  type="password" name="password" placeholder="Password" required>
					<br>

					<input  class="btn btn-primary"  type="submit" name="login_button" value="Sign Up"><br>
					<?php
				if(isset($msg))echo "<p style='color:red'>".$msg."</p><br>";
			?>
				</form>
            </section>
            
			<footer id="footer">
				<li>&copy; 2019 @ All rights reserved. Brought To You By <a href="#">Rezwan Pranto</a></li>
			</footer>

        </div>

    </body>
</html>
