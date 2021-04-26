 <h3 align="center">Print</h3>
                          <form action="receipt.php" method="post">
                                    <br/>
                                  Name:<input class="form-control" list="browsers" name="txtname">
                    <datalist id="browsers">
                      <?php
                                include 'Conn.php';
                                 $query1="select name from studentdt";
                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                 foreach($gradenameresult as $grd)
                                 {
                                 ?>
                                 <option value="<?php echo $grd['name'];?>"><?php echo $grd['name']?></option>
                                 <?php
                                 }
                                 ?>
                    </datalist>
                   <input type = "submit" class="btn btn-primary"  value ="submit" name="submit">
                </form>
                <div class="ex3">
                <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                         <th>PRN</th>
                                          <th>TRN</th>
                                         <th>Date</th>
                                         <th>Total</th>
                                         <th>Balance</th>
                                         <th>Paid</th>
                                        <th>PaymentType</th>
                                        <th>Cheque No</th>
                                        <th>Cheque Date</th>
                                        <th>Bank</th>
                                        <th>Print</th>
                                        <th>Late Print</th>
                                        <th>Other Print</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include 'Conn.php';
                                    if(isset($_POST['submit']))
                                    {
                                    $name=$_POST['txtname'];
                                    $sql="select * from receipt where name like '%$name%' ";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['PRN'];?></td>
                                             <td><?php echo $row['TRN'];?></td>
                                            <td><?php echo $row['date'];?></td>
                                            <td><?php echo $row['total'];?></td>
                                            <td><?php echo $row['balance'];?></td>
                                            <td><?php echo $row['paid']?></td>
                                            <td><?php echo $row['payment']?></td>
                                            <td><?php echo $row['chequeno']?></td>
                                             <td><?php echo $row['chequedate']?></td>
                                            <td><?php echo $row['bank']?></td>
                                            <td><a href="Table.php?varname=<?php echo $row['id'];?>">Print</a></td>
                                             <td><a href="lfees.php?varname=<?php echo $row['id'];?>">Late Print</a></td>
                                              <td><a href="other.php?varname=<?php echo $row['id'];?>">Other Print</a></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                }
                                else
                                {
                                     $sql="select * from blacklog ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['PRN'];?></td>
                                            <td><?php echo $row['TRN'];?></td>
                                            <td><?php echo $row['date'];?></td>
                                            <td><?php echo $row['total'];?></td>
                                            <td><?php echo $row['balance'];?></td>
                                            <td><?php echo $row['paid']?></td>
                                            <td><?php echo $row['payment']?></td>
                                            <td><?php echo $row['chequeno']?></td>
                                             <td><?php echo $row['chequedate']?></td>
                                            <td><?php echo $row['bank']?></td>
                                            <td><a href="Table.php?varname=<?php echo $row['id'];?>">Print</a></td>
                                             <td><a href="lfees.php?varname=<?php echo $row['id'];?>">Late Print</a></td>
                                              <td><a href="other.php?varname=<?php echo $row['id'];?>">Other Print</a></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                }
                            ?>      
                                    
                                                                 
                                </tbody>
                            </table>
                 
                        
                </div>