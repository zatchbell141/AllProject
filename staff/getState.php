<?php
//include 'session.php';
require_once ("dbcontroller.php");
$db_handle = new DBController();
if (! empty($_POST["country_id"])) {
     $query = "SELECT * FROM coursesname WHERE cousemid = '" . $_POST["country_id"] . "' order by id asc";
    $results = $db_handle->runQuery($query);
    ?>
<option value disabled selected>Select Course Name</option>
<?php
    foreach ($results as $state) {
        ?>
<option value="<?php echo $state["id"]; ?>"><?php echo $state["name"]; ?></option>
<?php
    }
}
?>