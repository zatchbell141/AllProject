<html>  
    <head>  
        <title>Backlog Form</title>  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="bootstrap.min.css" />
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

   <style>
.customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

.customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

.customers tr:nth-child(even){background-color: #f2f2f2;}

.customers tr:hover {background-color: #ddd;}

.customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
</style>


    </head>  
    <body>  
        <div class="container">
   <br />
   
   <h3 align="center">Backlog Form</a></h3><br />
   <br />
   <br />
   <div align="left" style="margin-bottom:5px;">
    <button type="button" name="add" id="add"  class="button">Add</button>
   </div>
   <br />
   <form method="post" id="user_form">
    <div class="table-responsive">
     <table class="customers" id="user_data">
      <tr>
         <th>PRN</th>
        <th>Mode</td>
        <th>Seat</th>
       
       <th>Name</th>
      <th>Subject</th>
      
       
        <th>Internal/External</th>
       <th>Details</th>
       <th>Remove</th>
      </tr>
     </table>
    </div>
    <div align="center">
     <input type="submit" name="insert" id="insert" class="button button3" value="Insert" />
    </div>
   </form>

   <br />
  </div>
  <div id="user_dialog" title="Add Data">
   <div class="form-group">
    <table>
      <tr>
        <td>
    <label>PRN</label>
     <input type="text" id="prn" name="prn" class="w3-input w3-border w3-animate-input"  sstyle="width:100%"/>
   </td>
   <td>
    <label>Name</label>
     <input type="text" id="name" name="name" class="w3-input w3-border w3-animate-input"  style="width:100%"/>
   </td>
 </tr>
     <tr>
      <td>
         <label>SeatNo:</label>
     <input type="text" id="seat" name="seat" class="w3-input w3-border w3-animate-input"  style="width:100%"/>
      </td>
      <td>
         <label>Mode:</label>
     <select class="form-control" name="mode" id="mode" class="w3-input w3-border w3-animate-input"  style="width:100%">
                                <option value="">Select Remark Type</option>
                                <option value="ATKT">ATKT</option>
                                <option value="Pass">Pass</option>
                            
                                </select>
      </td>
     </tr>
     <tr>
      <td>
        
        
         <label>Subject</label>
   <input class="form-control" list="browsers" name="subject" id="subject"  class="w3-input w3-border w3-animate-input"  style="width:100%">
                    <datalist id="browsers">
                      <?php
                                include 'Conn.php';
                                 $query1="select name,code from subject";
                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                 foreach($gradenameresult as $grd)
                                 {
                                 ?>
                                 <option value="<?php echo $grd['code']." ".$grd['name'];?>"><?php echo $grd['code']." ".$grd['name']?></option>
                                 <?php
                                 }
                                 ?>
                    </datalist>
                     
    
    <span id="error_subject" class="text-danger"></span>
  </td>
  <td>
    <div class="form-group">
    <label>Remark</label>
<select class="form-control" name="interexter" id="interexter" width="10px">
                                <option value="">Select Remark Type</option>
                                <option value="Internal">Internal</option>
                                <option value="External">External</option>
                                <option value="inter/exter">Internal/External</option>
                                </select>
    <span id="error_interexter" class="text-danger"></span>
   </div>
  </td>
     </tr>
  
  
     
     <tr>
      <td colspan="2"> <div class="form-group" align="center">
    <input type="hidden" name="row_id" id="hidden_row_id" />
    <button type="submit" name="save" id="save" class="button button3">Save</button></td>
     </tr>
    
  
   </div>
   
  
    </table>
   </div>
  </div>
  <div id="action_alert" title="Action">

  </div>
    </body>  
</html> 

<script>  
$(document).ready(function(){ 
 
 var count = 0;

 $('#user_dialog').dialog({
  autoOpen:false,
  width:500
 });

 $('#add').click(function(){
  $('#user_dialog').dialog('option', 'title', 'Add Data');

  $('#subject').val('');
  $('#seat').val('');
  $('#name').val('');
  $('#interexter').val('');
  $('#prn').val('');
  $('#mode').val('');
 

  $('#error_subject').text('');
  $('#error_interexter').text('');
  $('#error_seat').text('');
  $('#error_prn').text('');
  $('#error_mode').text('');
  

  $('#subject').css('border-color', '');
  $('#interexter').css('border-color', '');
  $('#seat').css('border-color','');
  $('#prn').css('border-color','');
  $('#mode').css('border-color','');
  

  $('#save').text('Save');
  $('#user_dialog').dialog('open');
 });

 $('#save').click(function(){
  var error_subject = '';
  var error_interexter = '';
   var error_name = '';
   var error_seat='';
   var error_prn='';
   var error_mode='';
  

  var subject = '';
  var interexter = '';
   var name = '';
   var seat='';
   var prn='';
   var mode='';
  

  if($('#subject').val() == '')
  {
   error_subject = 'First Name is required';
   $('#error_subject').text(error_subject);
   $('#subject').css('border-color', '#cc0000');
   subject = '';
  }
  else
  {
   error_subject = '';
   $('#error_subject').text(error_subject);
   $('#subject').css('border-color', '');
   subject = $('#subject').val();
  } 

  

    if($('#mode').val() == '')
  {
   error_subject = 'First Name is required';
   $('#error_subject').text(error_subject);
   $('#subject').css('border-color', '#cc0000');
   mode = '';
  }
  else
  {
   error_mode = '';
   $('#error_mode').text(error_mode);
   $('#mode').css('border-color', '');
   mode = $('#mode').val();
  } 

  if($('#prn').val() == '')
  {
   error_subject = 'First Name is required';
   $('#error_prn').text(error_prn);
   $('#prn').css('border-color', '#cc0000');
   prn = '';
  }
  else
  {
   error_prn = '';
   $('#error_prn').text(error_prn);
   $('#prn').css('border-color', '');
   prn = $('#prn').val();
  } 

   if($('#name').val() == '')
  {
   error_name = 'Last Name is required';
   $('#error_name').text(error_interexter);
   $('#name').css('border-color', '#cc0000');
   name = '';
  }
  else
  {
   error_name = '';
   $('#error_name').text(error_name);
   $('#name').css('border-color', '');
   name = $('#name').val();
  }


if($('#seat').val() == '')
  {
   error_seat = 'Last Name is required';
   $('#error_seat').text(error_seat);
   $('#seat').css('border-color', '#cc0000');
   seat = '';
  }
  else
  {
   error_seat = '';
   $('#error_seat').text(error_seat);
   $('#seat').css('border-color', '');
   seat = $('#seat').val();
  }

  if($('#interexter').val() == '')
  {
   error_interexter = 'Last Name is required';
   $('#error_interexter').text(error_interexter);
   $('#interexter').css('border-color', '#cc0000');
   interexter = '';
  }
  else
  {
   error_interexter = '';
   $('#error_interexter').text(error_interexter);
   $('#interexter').css('border-color', '');
   interexter = $('#interexter').val();
  }

  if(error_subject != '' || error_interexter != '' || error_name != '' || error_seat != '' || error_prn != '' || error_mode != ''  ) 
  {
   return false;
  }

  else
  {
   if($('#save').text() == 'Save')
   {
    count = count + 1;
    output = '<tr id="row_'+count+'">';
     output += '<td>'+prn+' <input type="hidden" name="hidden_prn[]" id="prn'+count+'" class="subject" value="'+prn+'" /></td>';
     output += '<td>'+mode+' <input type="hidden" name="hidden_mode[]" id="mode'+count+'" class="subject" value="'+mode+'" /></td>';
     
    output += '<td>'+seat+' <input type="hidden" name="hidden_seat[]" id="seat'+count+'" class="subject" value="'+seat+'" /></td>';
    output += '<td>'+name+' <input type="hidden" name="hidden_name[]" id="name'+count+'" class="subject" value="'+name+'" /></td>';
    output += '<td>'+subject+' <input type="hidden" name="hidden_subject[]" id="subject'+count+'" class="subject" value="'+subject+'" /></td>';
    output += '<td>'+interexter+' <input type="hidden" name="hidden_interexter[]" id="interexter'+count+'" value="'+interexter+'" /></td>';
    output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+count+'">View</button></td>';
    output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></td>';
    output += '</tr>';
    $('#user_data').append(output);
   }

   else
   {
    var row_id = $('#hidden_row_id').val();
    output += '<td>'+prn+' <input type="hidden" name="hidden_prn[]" id="prn'+count+'" class="subject" value="'+prn+'" /></td>';
    
    output += '<td>'+mode+' <input type="hidden" name="hidden_mode[]" id="mode'+count+'" class="subject" value="'+mode+'" /></td>';
    output += '<td>'+seat+' <input type="hidden" name="hidden_seat[]" id="seat'+count+'" class="subject" value="'+seat+'" /></td>';
    output = '<td>'+name+' <input type="hidden" name="hidden_name[]" id="name'+row_id+'" class="subject" value="'+name+'" /></td>';
    output = '<td>'+subject+' <input type="hidden" name="hidden_subject[]" id="subject'+row_id+'" class="subject" value="'+subject+'" /></td>';
    output += '<td>'+interexter+' <input type="hidden" name="hidden_interexter[]" id="interexter'+row_id+'" value="'+interexter+'" /></td>';
    output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+row_id+'">View</button></td>';
    output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">Remove</button></td>';
    $('#row_'+row_id+'').html(output);
   }

   $('#user_dialog').dialog('close');
  }
 });

 $(document).on('click', '.view_details', function(){
  var row_id = $(this).attr("id");

  var subject = $('#subject'+row_id+'').val();
  var interexter = $('#interexter'+row_id+'').val();
  var name = $('#name'+row_id+'').val();
  var seat = $('#seat'+row_id+'').val();
  var mode = $('#mode'+row_id+'').val();
  var prn = $('#prn'+row_id+'').val();

  $('#subject').val(subject);
  $('#name').val(name);
  $('#interexter').val(interexter);
  $('#seat').val(seat);
  $('#prn').val(prn);
  $('#mode').val(mode);

  $('#save').text('Edit');
  $('#hidden_row_id').val(row_id);
  $('#user_dialog').dialog('option', 'title', 'Edit Data');
  $('#user_dialog').dialog('open');
 });

 $(document).on('click', '.remove_details', function(){
  var row_id = $(this).attr("id");
  if(confirm("Are you sure you want to remove this row data?"))
  {
   $('#row_'+row_id+'').remove();
  }
  else
  {
   return false;
  }
 });

 $('#action_alert').dialog({
  autoOpen:false
 });

 $('#user_form').on('submit', function(event){
  event.preventDefault();
  var count_data = 0;
  $('.subject').each(function(){
   count_data = count_data + 1;
  });
  if(count_data > 0)
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#user_data').find("tr:gt(0)").remove();
     $('#action_alert').html('<p>Data Inserted Successfully</p>');
     $('#action_alert').dialog('open');
    }
   })
  }
  else
  {
   $('#action_alert').html('<p>Please Add atleast one data</p>');
   $('#action_alert').dialog('open');
  }
 });
 
});  
</script>