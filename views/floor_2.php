<?php
        //sql query fetches details related to booking
        $sql = "SELECT cs.status, cs.operating_system, cs.time_stamp, cm.position_number
        FROM ComputerStatus cs
        INNER JOIN ComputerMap cm
                ON cs.computer_id = cm.computer_id
        WHERE cm.map_id > 15";

        $result2 = mysqli_query($link, $sql);

        $i = 16;

        if($result2)
        {
            include_once 'floor_2.html';

            while($row2 = mysqli_fetch_array($result2))
            {
                $stuff[$i] = $row2['status'];
                $ip = "";
                $ip = (string)$i;
                //echo $ip;
                $position = "pos";
                $position .= $ip;
                $position = $position;

                if ($stuff[$i] == 'logged_out'){
                    echo "
                    <script>
                    var position = '$position';
                    loggedOut(position);
                    </script>
                ";
                } else {
                     //echo $position . " ";
                    echo "
                    <script>
                    var xx = -100;
                    var position = '$position';
                    loggedIn(position);

                    </script>";
                }

               
                $i++;
            }
            
        } else {
            echo 'Invalid query: ' . mysqli_error() . "\n";
        }
        
?>
