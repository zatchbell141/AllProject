<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    
    <title>Receipt</title>
    
        <link rel='stylesheet' type='text/css' href='assets/css/Invloce.css' madia="screen"/>
        <!--<link rel='stylesheet' type='text/css' href='css/Invloce1.css' madia="print"/>-->
    <link rel='stylesheet' type='text/css' href='assets/css/print.css' media="print" />
    <script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
    <script type='text/javascript' src='js/example.js'></script>

</head>

<body>
     <div align="center" id="hiderow" ><h1><input type ="submit"  value ="Print" onclick="window.print()" name="tsubmit"></h1></div>
        <div align="center" id="hiderow" ><a  href="studenetdatareport.php" >back to Attendence</a><br/>
        </div>
       
        <table border="1">
            <tr>
                <th colspan="10">TILAK MAHARASHTRA VIDYAPEETH-PUNE</th>
            </tr>
            <tr>
                <th colspan="10">INFORMATION CENTER- YASH INFOTECH</th>
            </tr>
            <tr>
                <th colspan="10">STUDY MATERIAL SHEET 2018-19</th>
            </tr>
            <tr>
                <th rowspan="2" colspan="2">SYBCA</th>
                 <?php
                $start=$_POST['lbdate'];
                $start=strtotime($start);
                $start=date('d-m-Y',$start);
                //echo $start;

                $end=$_POST['lbenddate'];
                $end=strtotime($end);
                $end=date('d-m-Y',$end);
                //echo $end;

            $datediff = strtotime($end) - strtotime($start);
            $datediff = floor($datediff/(60*60*24));
            for($i = 0; $i < $datediff + 1; $i++){
               
                ?>
                <th><?php  echo date("d-m-Y", strtotime($start . ' + ' . $i . 'day')) . "<br>";?></th>
                <?php
            }
        ?>
            </tr>

            <tr>
               
                <th>Mon</th>
                <th>Tues</th>
                <th>Wed</th>
                <th>Thus</th>
                <th>Fri</th>
                <th>Sat</th>
            </tr>
            <tr>
                <?php
                    include 'Conn.php';
                    $sr=0;
                                    $sql="select * from studentdt where coursename='Bachelor of Computer Applications- R- Second Year'";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            $sr++;   
                                            ?>
                                            <tr class="success"> 
                                            <td colspan="1"><?php echo $sr; ?></td>
                                            <td><?php echo $row['fullname'];?></td>
                                            <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                               <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                 <td>&nbsp;</td>
                                            </tr>

                                           

                <?php
                                        }
                                    }
                            ?>      
            </tr>
            <tr>
                <td colspan="2" align="right"><b >Subject1</b></td>
                 <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                               <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                 <td>&nbsp;</td>
                                                

            </tr>
            <tr>
                <td  colspan="2" colspan="2"  align="right"><b>Time</b></td>
                 <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                               <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                 <td>&nbsp;</td>
                                                
            </tr>
            <tr>
                <td  colspan="2" align="right"><b>Class</b></td>
                 <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                               <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                 <td>&nbsp;</td>
                                                
            </tr>
            <tr>
                <td  colspan="2" align="right"><b>Name</b></td>
                 <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                               <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                 <td>&nbsp;</td>
                                                
            </tr>
            <tr>
                <td  colspan="2" align="right"><b>Sign</b></td>
                 <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                               <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                 <td>&nbsp;</td>
                                                
            </tr>
             <tr>
                <td  colspan="2" align="right"><b>Subject2</b></td>
                 <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                               <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                 <td>&nbsp;</td>
                                                

            </tr>
            <tr>
                <td  colspan="2" align="right"><b>Time</b></td>
                 <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                               <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                 <td>&nbsp;</td>
                                                
            </tr>
            <tr>
                <td  colspan="2" align="right"><b>Class</b></td>
                 <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                               <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                 <td>&nbsp;</td>
                                                
            </tr>
            <tr>
                <td  colspan="2" align="right"><b>Name</b></td>
                 <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                               <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                 <td>&nbsp;</td>
                                               
            </tr>
            <tr>
                <td  colspan="2" align="right"><b>Sign</b></td>
                 <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                               <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                 <td>&nbsp;</td>
                                               
            </tr>
        </table>
    </body>
</html>