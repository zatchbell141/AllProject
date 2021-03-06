<!DOCTYPE html>
<html>
<head>
	<title>WOrd</title>
	<!-- COMMON LEVEL STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="http://192.168.0.10:8080/elearn/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="http://192.168.0.10:8080/elearn/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="http://192.168.0.10:8080/elearn/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link type="text/css" href="http://192.168.0.10:8080/elearn/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" />
<link href="http://192.168.0.10:8080/elearn/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="http://192.168.0.10:8080/elearn/assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="http://192.168.0.10:8080/elearn/assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="http://192.168.0.10:8080/elearn/assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="http://192.168.0.10:8080/elearn/assets/global/plugins/bootstrap-touchspin/style-shop.css" rel="stylesheet" type="text/css">
<link href="http://192.168.0.10:8080/elearn/assets/admin/layout4/css/light.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="http://192.168.0.10:8080/elearn/assets/global/css/zoom.css">
<link rel="shortcut icon" href="http://192.168.0.10:8080/elearn/assets/img/favicon.png"/>
</head>
<body>
 <div class="portlet-body form">
                        <form action="javascript:void(0);" rel="save_letter_practice" id="test_form" runat="server">
                            <input type="hidden" name="time" value="no">
                            <input type="hidden" class="form-control" name="letter_id" id="letter_id" value="96" >
                            <div id="silverlightControlHost" style="height: 850px; width: 100%">
                                <object id="letter" data="data:application/x-silverlight-2," type="application/x-silverlight-2" height="100%" width="100%;">
                                    <param name="source" value="http://192.168.0.10:8080/elearn/uploads/xap/letter.xap"/>
                                    <param name="onLoad" value="silverlightLoaded">
                                    <param name="initParams" value="title=MSCEIA PRACTICE,iseditable=true,urlPath=http://192.168.0.10:8080/elearn/save_letter_practice1">
                                </object>
                                <iframe id="_sl_historyFrame" style="visibility:hidden;height:0px;width:0px;border:0px"></iframe>
                            </div>
                            <!-- BEGIN FOOTER -->
<link rel="stylesheet" href="http://192.168.0.10:8080/elearn/assets/global/css/zoom.css">
<link rel="stylesheet" href="http://192.168.0.10:8080/elearn/assets/global/plugins/notification/css/bjqs.css">
<link rel="stylesheet" href="http://192.168.0.10:8080/elearn/assets/global/plugins/notification/css/demo.css">
<script src="http://192.168.0.10:8080/elearn/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="http://192.168.0.10:8080/elearn/assets/global/plugins/notification/js/bjqs-1.3.min.js"></script>
<div class="page-footer">
	&copy; <a href="javascript:void(0);" style="text-decoration: none; color: #29A6D3;">E-learn</a> 2018     <span class="pull-right">version - <a href="javascript:void(0);" style="text-decoration: none; color: #29A6D3;">2.0</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <span class="pull-right">Powered by - <a href="http://msceia.in" target="new" style="text-decoration: none; color: #29A6D3;">msceia.in</a>
</div>



<script type="text/javascript">
	$(window).load(function(){        
 		$('#myModal').modal('show');
    $('.modal-dialog').addClass('modal-sm');
  
    chk_user_time();
    function chk_user_time(){
        $.ajax({
            url: completeURL("chk_user_time"),
            dataType:'json',
            success: function(data){
                if(data.status==1)
                {
                    bootbox.alert(data.msg); 
                }
                else if(data.status==2)
                {
                    bootbox.alert(data.msg, function() {
                        setTimeout(function(){
                            document.location.href=completeURL("logout");                                
                        },1500);
                    }); 
                }
            },
            complete: function() {
               setInterval(chk_user_time, 300000); 
            }
        });
    };
  });
</script>    
<!-- COMMON LEVEL js -->
<script src="http://192.168.0.10:8080/elearn/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="http://192.168.0.10:8080/elearn/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="http://192.168.0.10:8080/elearn/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="http://192.168.0.10:8080/elearn/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="http://192.168.0.10:8080/elearn/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="http://192.168.0.10:8080/elearn/assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
<script src="http://192.168.0.10:8080/elearn/assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<!-- PAGE LEVEL js -->
<script src="http://192.168.0.10:8080/elearn/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://192.168.0.10:8080/elearn/js/jquery.countdownTimer.js"></script>
<script type="text/javascript" src="http://192.168.0.10:8080/elearn/assets/global/plugins/bootbox/bootbox.min.js"></script>
<script type="text/javascript" src="http://192.168.0.10:8080/elearn/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="http://192.168.0.10:8080/elearn/assets/global/plugins/jquery-validation/js/additional-methods.js"></script>
<script type="text/javascript" src="http://192.168.0.10:8080/elearn/assets/global/plugins/jquery-validation/lib/jquery.form.js"></script>
<script src="http://192.168.0.10:8080/elearn/js/gmap.js"></script>
<script src="http://192.168.0.10:8080/elearn/js/disable_all.js" type="text/javascript"></script>
<script src="http://192.168.0.10:8080/elearn/js/common.js" type="text/javascript"></script>
<script>
    jQuery(document).ready(function() {     
        Metronic.init();
        Layout.init();
    });
            $('.time_hide').css("display","none");
    </script>
<style type="text/css">
    .modal-dialog{all:unset; }
    .modal-content{margin: 30px auto; width: 600px; z-index: 99999; }
    .modal-content{animation:animatetop 0.5s}@keyframes animatetop{from{top:-300px;opacity:0} to{top:0;opacity:1}}
</style>
</body>
</html>