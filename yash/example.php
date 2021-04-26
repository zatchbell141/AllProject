<?php
include 'Conn.php';
///$name="CHARMY YOGESH WADHWANA";
$sql="select * from result ORDER BY id DESC";
$result=$con->query($sql);
$row=$result->fetch_assoc();

//$ssql="select * from subject";
//$sresult=$con->query($ssql);
//$srow=$sresult->fetch_assoc();

$subject=$row['subject'];
echo $subject;

/*$new=str_replace(' ',"\n", $subject);

$news=str_replace('<br>'," ", $new);

$countarry= array("External");
$countarryi= array("Internal");
  
$inter="";
$exter="";

$code="";
$sub="";

foreach ($countarry as $word) 
{  
  	$exter=substr_count($subject, $word); 
}
foreach ($countarryi as $wordi) 
{
     $inter=substr_count($subject, $wordi);                                       
}

//foreach ($countarrysub as $subj) 
//{
  // $sub=substr_count($subject, $countarrysub);                                       
//}
$sub=explode("*",$news);
$code=explode("$", $news);
$code1=explode(" ", $news);
echo "Internal:".$inter;
echo "\nExternal:".$exter;
echo "\nCodes:".$code[1].$code[2];
print_r($sub);
print_r($code);
print_r($code1);
echo "\nSubject Name:";*/
?>