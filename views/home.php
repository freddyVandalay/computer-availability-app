<?php
	$sql = "SELECT cs.status, cs.operating_system, cs.time_stamp, cm.position_number
    FROM ComputerStatus cs
    INNER JOIN ComputerMap cm
            ON cs.computer_id = cm.computer_id";
    $sql2 = "SELECT cs.status, cs.operating_system, cs.time_stamp, cm.position_number
    FROM ComputerStatus cs
    INNER JOIN ComputerMap cm
            ON cs.computer_id = cm.computer_id
    WHERE cm.map_id < 17";
    $sql3 = "SELECT cs.status, cs.operating_system, cs.time_stamp, cm.position_number
    FROM ComputerStatus cs
    INNER JOIN ComputerMap cm
            ON cs.computer_id = cm.computer_id
    WHERE cm.map_id > 16";

    $result = mysqli_query($link, $sql);
    $result2 = mysqli_query($link, $sql2);
    $result3 = mysqli_query($link, $sql3);

    $i = 0;
    $totalFree = 0;
    $firstFree  = 0;
    $secondFree  = 0;
    if($result) {
        while($row = mysqli_fetch_array($result)){
            $stuff[$i] = $row['status'];

            if ($stuff[$i] == 'logged_out'){
            	$totalFree++;
            	echo "<script>
                var totalFree = '$totalFree';
                totalFreeComputers(totalFree);
                </script>
                ";
            }
			$i++;
        }
    }
    if($result2) {
        while($row = mysqli_fetch_array($result2)) {
            $stuff[$i] = $row['status'];

            if ($stuff[$i] == 'logged_out'){
            	$firstFree++;
            	echo "<script>
                var firstFree = '$firstFree';
                firstFree(firstFree);
                </script>
                ";
            }
            $i++;
        }
	}
    if($result3) {
        while($row = mysqli_fetch_array($result3)) {
            $stuff[$i] = $row['status'];

            if ($stuff[$i] == 'logged_out'){
            	$secondFree++;
            	echo "<script>
                var secondFree = '$secondFree';
                secondFree(secondFree);
                </script>
                ";
            }
            $i++;
        }
    }
	include_once 'views/home.html';
        
?>
