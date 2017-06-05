<?php
        //sql query fetches details related to booking
        $sql = "SELECT cs.status, cs.operating_system, cs.time_stamp, cm.position_number
        FROM ComputerStatus cs
        INNER JOIN ComputerMap cm
                ON cs.computer_id = cm.computer_id";

        //query database
        $result = mysqli_query($link, $sql);
        
        //store content to be printed
        //title
        $content .= "<h1>Map</h1>";

        //check if there is data
        if ($result===false){
                //if not, output no bookings
                $content .= "<p>There are no entries!</p>";
        } else {
                //else, create html table 
                $content .= "<table cellpadding='6' border='0' width=100%>
                                <thead align='justify'>
                                        <tr>
                                                <th>Position</th>
                                                <th>Status</th>
                                                <th>Operating System</th>
                                                <th>Time</th>
                                        </tr>
                                </thead>
                                <tbody>";
                //while rows !null populate table
                while ($row = mysqli_fetch_assoc($result)){
                        $content .= "   <tr>
                                                <td>".$row['position_number']."</td>
                                                <td>".$row['status']."</td>
                                                <td>".$row['operating_system']."</td>
                                                <td>".$row['time_stamp']."</td>
                                        </tr>";
                                        
                }
                //free result set
                mysqli_free_result($result);

                $content .= "</tbody></table>";
        }
        
?>
