
<!--

Join: select * from bus inner join schedule on bus.bus_number = schedule.bus_number  where starting_point='$start' and destination_point='$destination' ;


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
            
            <?php
                echo "<h3 style='text-align: center'>From ".$start." To ".$destination."</h3><br><br>";
                $conn = mysqli_connect("localhost", "root", "", "bus_management");
                $query = mysqli_query($conn, "select * from bus inner join schedule on bus.bus_number = schedule.bus_number  where starting_point='$start' and destination_point='$destination' ");
                $query_num_rows = mysqli_num_rows($query);
                if($query_num_rows > 0){
                    while($row = mysqli_fetch_array($query)){
                        echo "<div class='each_bus'><a href='/busdetails/{$row['bus_number']}'>Bus no: ".$row['bus_number']."<br>";
                        echo "Total seat: ".$row['b_total_seat']."<br>";
                        echo "Start time: ".$row['s_travel_time']."<br>";
                        echo "Arival time: ".$row['s_arival_time']."<br>";
                        
                        $avail_seat = $row['b_avail_seat'];
                        $read_seat = explode(',',$avail_seat);
                        $t = count($read_seat)-1;
            
                        echo "Available Seat: ".$t."</a></div><br>";

                    }
                }

            ?>

		</div>

	</body>
</html>
