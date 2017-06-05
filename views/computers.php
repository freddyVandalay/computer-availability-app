<?php
        //sql query fetches details related to booking
        $sql = "SELECT * FROM ComputerStatus";

        //query database
        $result = mysqli_query($link, $sql);
        
        //store content to be printed
        //title
        $content .= "<h1>Computers</h1>";

        //check if there is data
        if ($result===false){
                //if not, output no bookings
                $content .= "<p>There are no computers!</p>";
        } else {
                //else, create html table 
                $content .= "<table cellpadding='6' border='0' width=100%>
                                <thead align='justify'>
                                        <tr>
                                                <th>computer_ID</th>
                                                <th>mac_address</th>
                                                <th>status</th>
                                                <th>operating_system</th>
                                                <th>time_stamp</th>
                                        </tr>
                                </thead>
                                <tbody>";
                //while rows !null populate table
                while ($row = mysqli_fetch_assoc($result)){
                        $content .= "   <tr>
                                                <td>".$row['computer_id']."</td>
                                                <td>".$row['mac_address']."</td>
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
