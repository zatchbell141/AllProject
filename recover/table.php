<?php
include 'Conn.php';

if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to mysql" . mysqli_connect_error();
    }
        echo 'table class="table table-hover table-bordered"';
        echo '
                 <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Fathername</th>
                                        <th>Lastname</th>
                                        <th>Address</th>
                                        <th>College</th>
                                        <th>Stream</th>
                                        <th>Email</th>
                                        <th>Contact No</th>
                                        <th>Percentage</th>
                                    </tr>
                                </thead>

        ';
    $result = mysqli_query($con,"SELECT * FROM enquiry order by id desc");
    while($row=mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['lastname'] . "</td>";
        echo "<td>" . $row['fathername'] . "</td>";
        echo "<td> <input type='button' value='Delete' </td>"; 
        echo "</tr>";
    }
    mysqli_close($con);
    echo '</table>';
?>