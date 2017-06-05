<?php
        //sql query fetches details related to booking
        $sql = "SELECT * FROM ComputerMap";

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
                                                <th>map_ID</th>
                                                <th>computer_id</th>
                                                <th>position_number</th>
                                        </tr>
                                </thead>
                                <tbody>";
                //while rows !null populate table
                while ($row = mysqli_fetch_assoc($result)){
                        $content .= "   <tr>
                                                <td>".$row['map_id']."</td>
                                                <td>".$row['computer_id']."</td>
                                                <td>".$row['position_number']."</td>
                                        </tr>";
                                        
                }
                //free result set
                mysqli_free_result($result);

                $content .= "</tbody></table>";
        }
        
?>
