<table>
                                        <thead>
                                            <tr>
                                                <th>Fullname</th>
                                                <th>Contact No</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include 'Conn.php';
                                            $sql="select * from signup where yrs='FYBCA'ORDER BY id DESC";
                                            $result=$con->query($sql);
                                            if($result->num_rows>0)
                                            {
                                                while($row=$result->fetch_assoc())
                                                {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['name']." ".$row['lastname']?></td>
                                                <td><?php echo $row['contact'];
                                                        
                                                    ?>
                                                </td>
                                            </tr>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>