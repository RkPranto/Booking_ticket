{{$busno}}
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
            <?php

                $conn = mysqli_connect("localhost", "root", "", "bus_management");
                if(isset($seatno)){
                    
                    $query = mysqli_query($conn, "select * from bus where bus_number='$busno'");
                    $query_num_rows = mysqli_num_rows($query);
                    if($query_num_rows > 0){
                        $row = mysqli_fetch_array($query);
                        $seat_array = explode(',',$row['b_avail_seat']);
                        $result = array_diff($seat_array,array($seatno));
                        $insert_result = implode(",",$result);
                        $query = mysqli_query($conn, "update bus set b_avail_seat = '$insert_result' where bus_number='$busno'");    
                        echo $seatno." number seat is allocated for you from ".$busno." number bus";
                    }


                }
                else{
                    $query = mysqli_query($conn, "select * from bus where bus_number='$busno'");
                    $query_num_rows = mysqli_num_rows($query);
                    if($query_num_rows > 0){
                        while($row = mysqli_fetch_array($query)){
                            echo "<br>Bus no: ".$row['bus_number']."<br>";
                            echo "Total seat: ".$row['b_total_seat']."<br>";

                            $avail_seat = $row['b_avail_seat'];
                            $read_seat = explode(',',$avail_seat);
                            $t = $row['b_total_seat'];
                            for($i=1;$i<=$t;$i++){

                                if(in_array("$i",$read_seat)){
                                    echo "<a href='/busdetails/{$row['bus_number']}/{$i}' style='color:green'>".$i." is available....Allocate</a><br>";
                                }
                                else{
                                    echo "<p style='color:red'>".$i." is unavailable</p>";
                                }

                            }


                        }
                    }
                }
            ?>
        </div>    



    </body>


</html>