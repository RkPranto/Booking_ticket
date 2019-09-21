<!--
	aggregate function: "select count(bus_number) from bus"



-->



<html>
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
			<div class="aggregate_function">
				<?php
					$conn = mysqli_connect("localhost", "root", "", "bus_management");

					$query = mysqli_query($conn, "select count(bus_number) from bus");
					$query_result = mysqli_fetch_array($query);
					echo "<h3 style='color: green'>KUET is using ".$query_result['count(bus_number)']." different bus for students.</h3><br>";

				?>
			</div>
			<form action="/buslist" method="post">
				{{ csrf_field() }}
				<select  class='form-control' name="start_point" id="">
					<?php
						
						$query = mysqli_query($conn, "select distinct starting_point from bus");
						$query_num_rows = mysqli_num_rows($query);
						while($row = mysqli_fetch_array($query)){
							$district1 = $row['starting_point'];
							echo "<option name='$district1'>$district1</option><br>";
						}
					?>
				</select>
				to
				<select  class='form-control' name="destination_point" id="">
					<?php
						$query = mysqli_query($conn, "select distinct destination_point from bus");
						$query_num_rows = mysqli_num_rows($query);
						while($row = mysqli_fetch_array($query)){
							$district2 = $row['destination_point'];
							echo "<option name='$district2'>$district2</option><br>";
						}
					?>
				</select>

				<input  style='margin-top: 10px;' class="btn btn-primary"  type="submit" name="show_bus" value="Show Available Bus"><br>
			
			</form>

		</div>

	</body>
</html>
