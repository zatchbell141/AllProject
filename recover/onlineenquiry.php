<!doctype html>
<html class="no-js" lang="">

<?php include 'onlineformhead.php' ?>
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
        <style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {padding: 10px 24px;}
</style>
    <body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
        <?php //include 'header.php'?>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="col-sm-12">
      <form action="addenquiry.php" method="post" enctype="multipart/form-data" autocomplete="off">
           <table class="table table-sc-ex table-bordered">
                                    <tr>
                                        <td>
                                            <div class="nk-int-st">
                                            <input type="text" class="form-control input-lg" name="txtname" placeholder="Name">
                                            </div>
                                        </td>
                                        <td><div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txtfathername" placeholder="Father name">
                                    </div>
                                </td>
                                        <td>
                                        <div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txtlastname" placeholder="Lastname">
                                    </div>
                                </td>
                                   
                                        <td>
                                           <div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txtpercentage" placeholder="Percentage">
                                    </div> 
                                        </td>
                                     </tr>
                                    <tr>
                                        <td><div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txtcollege" placeholder="College">
                                    </div></td>
                                        <td><div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txtstream" placeholder="Stream">
                                    </div></td>
                                   
                                        <td><div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txtemail" placeholder="Reference">
                                    </div></td>
                                    
                                        <td><div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txtcontact" placeholder="Contact No">
                                    </div></td>
                                     </tr>
                                    <tr>
                                        
                                        <td colspan="4">
                                            <div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txtaddress" placeholder="Address">
                                    </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"><button id="submit" class="btn btn-primary notika-btn-primary">Save</button></td>
                                        </form> 
                                    </tr>
                                </table>  
      </form>
    </div>
    
  <!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
        ============================================ -->
    <script src="js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/curvedLines.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
        ============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!--  wave JS
        ============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!--  todo JS
        ============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!--  Chat JS
        ============================================ -->
    <script src="js/chat/moment.min.js"></script>
    <script src="js/chat/jquery.chat.js"></script>
    <!-- bootstrap select JS
        ============================================ -->
    <script src="js/bootstrap-select/bootstrap-select.js"></script>
    <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
        ============================================     <script src="js/tawk-chat.js"></script>-->
        <script type="text/javascript" src="jquery-1.8.2.min.js"></script>
<script>