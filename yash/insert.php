<?php

//insert.php

$connect = new PDO("mysql:host=localhost;dbname=mags", "root", "");

$query = "
INSERT INTO result 
(name, prn,seat,subject,Mode,code,interexter) 
VALUES (:name, :prn,:seat,:subject,:Mode,:code,:interexter)
";

for($count = 0; $count<count($_POST['hidden_subject']); $count++)
{
 $data = array(
  ':name' =>$_POST['hidden_name'][$count],
  ':prn' => $_POST['hidden_prn'][$count],
  ':seat' => $_POST['hidden_seat'][$count],
  ':subject' => $_POST['hidden_subject'][$count],
  ':Mode' => $_POST['hidden_mode'][$count],
   ':code' => 0,
  ':interexter' =>$_POST['hidden_interexter'][$count]
 );
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

?>