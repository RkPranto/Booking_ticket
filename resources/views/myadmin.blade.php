	 
<!--


subquery:

-->



<html>
	<head>
	<head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" href="{{ asset('css/register.css') }}"/>
		<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
		<title>KUET BUS Mangement</title>
	</head>
	<body>
		<div class="container">
            <h4 style='color: green;'><?php if(isset($msg)) echo $msg;?></h4>
			<form action="/admin" method="post">
				@csrf

				<input  class="btn btn-primary"  type="submit" name="show_bus" value="Update All Bus"><br>
			
			</form>

		</div>

	</body>
</html>
