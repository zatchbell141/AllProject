<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'Includes/header.php';?>
</head>
<?php require'Includes/bcaConn.php' ?>
<?php
session_start();
if(!isset($_SESSION['admin_id'])){
  header("Location: adminlogin.php");
}
?>

<?php
error_reporting(0);
$test_id=$_GET['var'];

$t_query="SELECT * FROM test WHERE test_id='$test_id' ";
$t_result=$con->query($t_query);
$t_row=$t_result->fetch_assoc();

$q_query="SELECT * FROM questions WHERE test_id='$test_id' ";
$q_result=$con->query($q_query);
$q_row=$q_result->fetch_assoc();


if(isset($_POST['add_question'])){
    $question = $_POST['question'];
    $target_dir = "questions/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $option_a = $_POST['option_a'];
    $option_b = $_POST['option_b'];
    $option_c = $_POST['option_c'];
    $option_d = $_POST['option_d'];
    $answer = $_POST['answer'];
    $add_question = " INSERT INTO questions(test_id, question, image, option_a, option_b, option_c, option_d, answer) VALUES('$test_id' ,'$question','$target_file','$option_a','$option_b','$option_c','$option_d','$answer') ";
   $con->query($add_question);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    header("Location: question.php?var="+$test_id);
}

 /* if(isset($_POST["add_desc_question"])){
    $question_desc = $_POST['question_desc'];
    $target_dir = "questions_desc/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $add_desc="INSERT INTO questions_desc(test_id, question, image)  VALUES ('$test_id', '$question_desc','$target_file')");
    $con->query($add_desc);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    header("Location: question.php?var="+$test_id);
  }*/

if(isset($_POST['update_test'])){
    $test_name = $_POST['test_name'];
    $sdatetime = $_POST['sdatetime'];
    $edatetime = $_POST['edatetime'];
    $test_duration = $_POST['test_duration'];
    $update_test = " UPDATE test SET test_name = '$test_name', sdatetime = '$sdatetime', edatetime = '$edatetime', test_duration = '$test_duration' WHERE test_id = '$test_id' ";
    $con->query($update_test);
    print_r($update_test);
    header("Location: question.php?var="+$test_id);
}

/*if(isset($_POST['edit_question'])){
    $question = $_POST['question'];
    $question_id = $_POST['question_id'];
    $target_dir = "questions/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $option_a = $_POST['option_a'];
    $option_b = $_POST['option_b'];
    $option_c = $_POST['option_c'];
    $option_d = $_POST['option_d'];
    $answer = $_POST['answer'];
    $edit_question = "UPDATE questions SET question = '$question' ,image= '$target_file', option_a = '$option_a', option_b = '$option_b', option_c = '$option_c', option_d = '$option_d', answer = '$answer' WHERE question_id = '$question_id' ";
    $con->query($edit_question);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    header("Location: question.php?var="+$test_id);
}*/
?>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include 'Includes/adminsidebar.php';?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
       <?php include 'Includes/admintopmenu.php';?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Test</h6>
                </div>
                <div class="table-responsive p-3">


                   <h1>UPDATE TEST SETTINGS</h1>
        <h3>TEST NAME: <?php echo $t_row['test_name'] ?> </h3>
        <h3>SUBJECT: <?php echo $t_row['subject'] ?></h3>
      </div>
      <a href="adminHome.php" class="scroll" style="left:10px;top:10px;position:fixed;"><i class="fa fa-close fa-2x"></i></a>
      <h2 class="btn btn-info" data-toggle="collapse" data-target="#add" style="height: 40px; width:100%;">ADD MULTIPLE CHOICE QUESTION</h2><br><br>
      <div id="add" class="collapse">
        <form method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
              <textarea class="form-control" name="question" placeholder="Question" style="width: 1100px;" required></textarea>
            </div>
            <div class="form-group form-inline">
              <input class="form-control" type="file" name="image" style="width: 300px;"> Add Image
            </div>
            <div class="form-inline form-group">
              <input class="form-control" type="text" name="option_a" placeholder="Option A" style="width: 550px;">
              <input class="form-control" type="text" name="option_b" placeholder="Option B" style="width: 550px;">
            </div>
            <div class="form-inline form-group">
              <input class="form-control" type="text" name="option_c" placeholder="Option C" style="width: 550px;">
              <input class="form-control" type="text" name="option_d" placeholder="Option D" style="width: 550px;">
            </div>
            <div class="form-group form-inline" >
              <!--<input class="form-control" type="text" name="answer" placeholder="Answer Option" style="width: 300px;">-->
              <select name="answer" class="form-control" placeholder="Answer Option" style="width: 300px;" required>
                <option>a</option>
                <option>b</option>
                <option>c</option>
                <option>d</option>
              </select>Correct Answer
            </div>
                <br>
            <input type="submit" name="add_question" value="Add Question" class="btn btn-danger" style="height: 40px; width:300px;">
        </form><br>
      </div>
     <!--  <h2 class="btn btn-primary" data-toggle="collapse" data-target="#add_desc" style="height: 40px; width:100%;">ADD DESCRIPTIVE QUESTION</h2><br><br> -->
      <div id="add_desc" class="collapse">
        <form method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
              <textarea class="form-control" name="question_desc" placeholder="Question" style="width: 1100px;" required></textarea>
            </div>
            <div class="form-group form-inline">
              <input class="form-control" type="file" name="image" style="width: 300px;"> Add Image
            </div>
                <br>
            <input type="submit" name="add_desc_question" value="Add Question" class="btn btn-danger" style="height: 40px; width:300px;">
        </form><br>
      </div>
      <h2 class="btn btn-info" data-toggle="collapse" data-target="#update" style="height: 40px; width:100%;">UPDATE TEST SETTINGS</h2><br><br>
      <div id="update" class="collapse">
        <form method="post" action="">
        <div class="form-inline form-group">
          <input class="form-control" type="text" name="test_name" value="<?php echo $t_row['test_name'] ?>" style="width: 300px;">Test Name
        </div>
        <div class="form-inline form-group">
          <input class="form-control date" type="datetime-local" name="sdatetime" value= <?php echo date('Y-m-d\Th:i', strtotime($t_row['sdatetime']) ); ?> style="width: 300px;">
          Start Date and Time [old: <?php echo $t_row['sdatetime'] ?> ]
          "2017-06-01 T0 8:30"
        </div>
        <div class="form-inline form-group">
          <input class="form-control" type="datetime-local" name="edatetime" value=<?php echo date('Y-m-d\Th:i', strtotime($t_row['edatetime']) ); ?> style="width: 300px;">
          End Date and Time [old: <?php echo $t_row['edatetime'] ?> ]
        </div>
        <div class="form-inline form-group">
          <input class="form-control" type="number" name="test_duration" value="<?php echo $t_row['test_duration'] ?>" style="width: 300px;">Test Duration
        </div>
        <br>
        <input type="submit" name="update_test" value="Update Test" class="btn btn-danger" style="height: 40px; width:300px;">
        </form>
      </div>
      <!-- <h2 class="btn btn-primary" data-toggle="collapse" data-target="#edit" style="height: 40px; width:100%;">EDIT QUESTION DETAILS</h2><br><br> -->
      <div id="edit" class="collapse">
        <?php foreach ($q_row as $q_res): ?>
        <form method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
              <textarea class="form-control" name="question" style="width: 1100px;" required><?php echo $q_res['question'] ?></textarea>
            </div>
            <div class="form-group form-inline">
              <input class="form-control" type="file" name="image" style="width: 300px;"> Add Image
            </div>
            <div class="form-inline form-group">
              <input class="form-control" type="text" name="option_a" value="<?php echo $q_res['option_a'] ?>" style="width: 550px;">
              <input class="form-control" type="text" name="option_b" value="<?php echo $q_res['option_b'] ?>" style="width: 550px;">
            </div>
            <div class="form-inline form-group">
              <input class="form-control" type="text" name="option_c" value="<?php echo $q_res['option_c'] ?>" style="width: 550px;">
              <input class="form-control" type="text" name="option_d" value="<?php echo $q_res['option_d'] ?>" style="width: 550px;">
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="answer" value="<?php echo $q_res['answer'] ?>" style="width: 300px;">
            </div>
            <input type="number" name="question_id" hidden value="<?php echo $q_res['question_id'] ?>" >
                <br>
            <input type="submit" name="edit_question" value="Update Question" class="btn btn-danger" style="height: 40px; width:300px;">
        </form><br><hr style="border:1px solid black; ">
        <?php endforeach; ?>
      </div>



                </div>
              </div>
            </div>
</div>
</div>
</div>

        </div>
        <!---Container Fluid-->
      </div>
     <?php include 'Includes/footer.php';?>
    </div>
  </div>

 <?php include 'Includes/script.php';?>
</body>

</html>