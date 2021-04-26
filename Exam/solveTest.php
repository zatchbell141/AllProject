<?php require'database.php' ?>
<?php
  session_start();
  if(!isset($_SESSION['user_id'])){
    header("Location: index.php");
  }
  $test_id = $_GET['var'];
  //session_start();
  $_SESSION['test_id'] = $test_id;
  $query = mysqli_query($conn,"SELECT * FROM test WHERE test_id='$test_id' ");
  $result = mysqli_fetch_array($query);
  $test_name=$result['test_name'];
  $test_duration=$result['test_duration'];
  $q_query=mysqli_query($conn,"SELECT * FROM questions WHERE test_id='$test_id' ");
  $q_result=mysqli_fetch_all($q_query, MYSQLI_ASSOC);
  $desc_query=mysqli_query($conn,"SELECT * FROM questions_desc WHERE test_id='$test_id' ");
  $desc_result=mysqli_fetch_all($desc_query, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Yash Infotech</title>
      
  
  
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/small-business.css" rel="stylesheet">
<script type="text/javascript" src="js/solveTest.js"></script>
    <script>
      history.pushState(null, null, document.URL);
      window.addEventListener('popstate', function () {
        history.pushState(null, null, document.URL);
      });
      $('form').data('serialize',$('form').serialize()); // On load save form current state
      $(window).bind('beforeunload', function(e){
          if($('form').serialize()!=$('form').data('serialize'))return true;
          else e=null; // i.e; if form state change show warning box, else don't show it.
      });
    </script>
  </head>

  <body onLoad="timeout()">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Yash Infotech</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="studentProfile.php">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
   <div class="container">
      <script type="text/javascript">
      var timeLeft = 60 * <?php echo $test_duration; ?>;
      </script><br>
      <div class="row" style="border:1px solid black;">
        <div class="col-lg-8"><h1><?php echo $test_name; ?></h1></div>
        <div class="col-lg-2"><h2 id="time" style="float:right";></h2></div>
        <div class="col-lg-2"><h2>Minutes Left</h2></div>
      </div><br>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" data-target="#mcq" class="btn btn-danger">Multiple Choice Questions</a></li>
        <li><a data-toggle="tab" data-target="#desc" class="btn btn-primary">Descriptive Type Questions</a></li>
      </ul>
      <form id="quiz" method="post" action="showResult.php">
        <div class="tab-content">
          <div id="mcq" class="tab-pane in fade active">
            <?php foreach ($q_result as $q_res): ?>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th><?php echo $q_res['question'] ?></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                      if(strlen($q_res['image'])>10){ ?>
                        <img src="<?php echo $q_res['image'] ?>" style="max-height:300px;max-width:400px;"></img><br>
                    <?php  }?>
                  </tr>
                  <tr>
                    <td><input type="radio" value="a" name="<?php echo $q_res['question_id'] ?>">
                    <?php echo $q_res['option_a'] ?></td>
                  </tr>
                  <tr>
                    <td><input type="radio" value="b" name="<?php echo $q_res['question_id'] ?>">
                    <?php echo $q_res['option_b'] ?></td>
                  </tr>
                  <tr>
                    <td><input type="radio" value="c" name="<?php echo $q_res['question_id'] ?>">
                    <?php echo $q_res['option_c'] ?></td>
                  </tr>
                  <tr>
                    <td><input type="radio" value="d" name="<?php echo $q_res['question_id'] ?>">
                    <?php echo $q_res['option_d'] ?></td>
                  </tr>
                  <tr>
                    <td><input type="radio" hidden checked="checked" value="none" name="<?php echo $q_res['question_id'] ?>">
                    </td>
                  </tr>
                </tbody>
              </table>
              <hr>
            <?php endforeach; ?>
          </div>
          <div id="desc" class="tab-pane fade">
            <?php foreach ($desc_result as $desc_res): ?>
              <h2><?php echo $desc_res['question'] ?></h2>
              <?php
                if(strlen($desc_res['image'])>10){ ?>
                  <img src="<?php echo $desc_res['image'] ?>" style="max-height:300px;max-width:400px;"></img><br>
              <?php  }?>
              <textarea class="form-control" name="<?php echo $desc_res['question_id'] ?>" placeholder="Write you code or answer here"></textarea>
              <hr>
            <?php endforeach; ?>
          </div>
        </div>
        <center>
          <input type="submit" name="submitTest" value="Submit Test" class="btn btn-danger" style="height: 40px; width:300px;">
        </center>
      </form>
    </div>
    <br><br><br>
    <br><br><br>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Yash Infotech 2019</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>