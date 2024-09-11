
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>my-assets/css/css.css" /> 
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
 <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" /> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<link href="<?php echo base_url() ?>assets/css/daterangepicker.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">


<style>
.table {
    width: 100%; /* Set the table width */
    table-layout: fixed; /* Use a fixed layout */
}

.table th,
.table td {
    width: auto; /* Or set the width as per your requirement */
    /* Additional styling properties */
    border: 1px solid #ccc;
    padding: 8px;
    /* Other styling properties */
}
.table input[type="text"],input[type="time"] {
    text-align:center;
    background-color: inherit; /* Set your desired background color */
    /* Additional styling properties */
    /*border: 1px solid #ccc;*/
    border-radius: 4px;
    padding: 8px;
    /* Other styling properties */
}

       input {border:0;outline:0;}
    .work_table td {
        height: 36px;
    }

    .select2-selection{
        display :none;
    }

    .btnclr{
       background-color:<?php echo $setting_detail[0]['button_color']; ?>;
       color: white;

   }

</style>
<div class="content-wrapper">

    <section class="content-header">

        <div class="header-icon">

            <i class="pe-7s-note2"></i>

        </div>

        <div class="header-title">

            <h1>Timesheet</h1>

            <small><?php echo $title ?></small>

            <ol class="breadcrumb">

                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>

                <li><a href="#">HRM</a></li>

                <li class="active" style="color:orange">Timesheet</li>

            </ol>

        </div>

    </section>

    <section class="content">

        <!-- New category -->
        <div class="row">
            <div class="col-sm-12">                
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading" style="height: 50px;">
                        <div class="panel-title">
                               <a style="float:right;color:white;" href="<?php echo base_url('Chrm/manage_timesheet') ?>" class="btnclr btn  m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo "Manage TimeSheet" ?> </a>
                        </div>
                    </div>
                    <!-- <?php// echo form_open('Cquotation/insert_quotation', array('class' => 'form-vertical', 'id' => 'insert_quotation')) ?> -->
                  
                    <!-- <form id="insert_timesheet"  method="post">   -->
                  
                    <?php echo form_open_multipart('Chrm/pay_slip','id="validate"' ) ?>

                  <?php  $id=random_int(100000, 999999); ?>
                  
                    <div class="panel-body">
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="customer" class="col-sm-4 col-form-label">Employee Name<i class="text-danger">*</i></label>
                                <div class="col-sm-8">
<input type="hidden" id="tsheet_id" value="<?php echo $id ; ?>" name="tsheet_id" />
<input  type="hidden"   readonly id="unique_id" value="<?php echo $this->session->userdata('unique_id') ?>" name="unique_id" />
                                        
                                        <select name="templ_name" id="templ_name" class="form-control"  required   tabindex="3" style="width100">
       
       

       
                                        <option value=""> <?php echo ('Select Employee Name') ?></option>
                                        <?php  foreach($employee_name as $pt){ ?>
                                            <option value="<?php  echo $pt['id'] ;?>"><?php  echo $pt['first_name']." " ;?><?php  echo $pt['last_name'] ;?></option>
                                        <?php  } ?>
        </select>







                                </div>
                            </div>



                            <div class="col-sm-6">
                                <label for="qdate" class="col-sm-4 col-form-label">Duration</label>
                                <div class="col-sm-7">
                                <select name="duration"  id="duration"  class="form-control datepicker"  style="width: 420px;" >

                                             
                                           
                                                 <?php foreach($duration as $inv){ ?>
          <option value="<?php echo $inv['duration_name'] ; ?>"><?php echo $inv['duration_name'] ; ?></option>
                               <?php    }?>
                                           


                                                </select>   
                                </div>

                                <div  class=" col-sm-1">
<a  class="btnclr client-add-btn btn" aria-hidden="true" style="color:white;"  data-toggle="modal" data-target="#duration_add" ><i class="fa fa-plus"></i></a>
</div>








                            </div>


                        </div>











                        <div class="form-group row">
                            
                        <div class="col-sm-6">
                                <label for="customer" class="col-sm-4 col-form-label">Job title<i class="text-danger">*</i></label>
                                <div class="col-sm-8">
                                        <input type="text" readonly name="job_title" id="job_title" placeholder="Job title" value="" class="form-control">
                                        
                                </div>
                            </div>

<!--                            <div class="col-sm-6">-->
<!--                                <label for="dailybreak" class="col-sm-4 col-form-label">Daily Break in mins</label>-->
                                


<!--                                <div class="col-sm-7">-->

                                <!-- <input type="text" required tabindex="2" class="form-control " name="dailybreak" value="10" id="dailybreak"  style="width: 500px;"  /> -->

<!--                                <select name="dailybreak"  id="dailybreak"  class="form-control datepicker"  style="width: 420px;" >-->
    
<!--                                        <?php foreach($dailybreak as $dbd){ ?>-->

<!--                                            <option selected value="5">  5   </option>-->

<!--          <option value="<?php echo $dbd['dailybreak_name'] ; ?>"><?php echo $dbd['dailybreak_name'] ; ?></option>-->
<!--                               <?php    }?>-->



<!--                                           </select>-->
<!--                                           </div>-->


<!--                                           <div  class=" col-sm-1">-->
<!--<a  class="btnclr client-add-btn btn" aria-hidden="true" style="color:white;"  data-toggle="modal" data-target="#dailybreak_add" ><i class="fa fa-plus"></i></a>-->
<!--</div> -->





<!--                            </div>-->


            <div class="col-sm-6">
                                <label for="customer" class="col-sm-4 col-form-label">Payment terms<i class="text-danger">*</i></label>
                                <div class="col-sm-7">
                               
                                    <?php  // if ($this->session->userdata('u_type') == 3){ ?>
                                        <input type="hidden" name="cname" value="<?php echo $this->session->userdata('user_name') ?>" class="form-control" readonly>
                                        <input type="hidden" name="customer_id" value="<?php echo $this->session->userdata('user_id') ?>" class="form-control">
                                    <?php // } else { ?>
                                        <select name="payment_term" id="terms"  class="form-control" onchange="get_customer_info(this.value)"  required style="width: 420px;"  data-placeholder="<?php echo display('select_one'); ?>">

                                           
                                        <option value=""> Select Payment Terms </option>
                                                    
                                                

                                             

                                                <?php foreach($payment_terms as $inv){ ?>
          <option value="<?php echo $inv['payment_terms'] ; ?>"><?php echo $inv['payment_terms'] ; ?></option>
                               <?php    }?>
                                           


                                        </select>
                                    <?php //} ?>
                                </div>

                                <div  class=" col-sm-1">
<a  class="btnclr client-add-btn btn" aria-hidden="true" style="color:white;"  data-toggle="modal" data-target="#payment_type" ><i class="fa fa-plus"></i></a>
</div>








                        </div>

                            </div>










                            <div class="form-group row">
                            <div class="col-sm-6">
                            <label for="dailybreak" class="col-sm-4 col-form-label">Date Range<i class="text-danger">*</i></label>
                            <div class="col-sm-8">
                                <input id="reportrange" name="date_range" type="text" class="form-control"/>
    
                          
            <div id='check_date' style='font-weight:bold;color:red;'></div>                 
</div>
                            </div>



















                            
                



                        <div class="form-group row">
                        

                            </div>


<style>
    th{
        height:30px;
        color:black;
        text-align:center;
    }
    td{
        text-align:center;
    }
  .end,.start,.timeSum {
  
   
    background-color: inherit; /* This inherits the background color from its parent */
}
</style>
                        <div class="table-responsive work_table col-md-12">
		                    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="PurList"> 
								<thead>
									<tr style="text-align:center;">
										<th class="col-md-2">Date</th>
										<th class="col-md-1">Day</th>
										 <th class="col-md-1">Daily Break in mins &nbsp; <a  class="btnclr client-add-btn btn" aria-hidden="true" style="color:white;border-radius: 5px;
    padding: 5px 10px 5px 10px;"  data-toggle="modal" data-target="#dailybreak_add" ><i class="fa fa-plus"></i></a></th>
										<th class="col-md-2">Start Time (HH:MM)</th>
										<th class="col-md-2">End Time (HH:MM)</th>
										<th class="col-md-5"> Hours</th>
											<th class="col-md-5"> Action</th>
									</tr>
								</thead>
								<tbody id="tBody">
                                   
                    
								</tbody>
                               
                                <tfoot>
          
                                <tr style="text-align:end"> 
                                                   <td colspan="5" class="text-right" style="font-weight:bold;">Total Hours :</td> 
                                        
                                            <td> <input  type="text"    id="total_net"  name="total_net" />    </td>             
                                          
                                            </tr> 

                 
                                </tfoot>


		                    </table>

                                             
                                          
                                        
		                </div>

                        <input type="submit" style="float:left;color:white;" value="Submit"   class="btnclr btn btn-info m-b-5 m-r-2"/> 

                    </div>               
                    <!-- <?php //echo form_close() ?> -->
                    <?php echo form_close() ?>

                                    <!-- </form> -->


                </div>
            </div>
        </div>
    </section>


</div>



<div class="modal fade" id="myModal1" role="dialog" >
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="margin-top: 190px;text-align:center;">
        <div class="modal-header btnclr"  >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo ('Time Sheet') ?></h4>
        </div>
        <div class="modal-body" id="bodyModal1" style="text-align:center;font-weight:bold;">
          
      
     
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
      
    </div>
  </div>













<!------ add new Duration-->  
<div class="modal fade" id="duration_add" role="dialog">

<div class="modal-dialog" role="document">

<div class="modal-content" style="margin-top: 190px;text-align:center;">
        <div class="modal-header btnclr"  >

            

            <a href="#" class="close" data-dismiss="modal">&times;</a>

            <h4 class="modal-title"><?php echo ('Add New Duration ') ?></h4>

        </div>

        

        <div class="modal-body">

            <div id="customeMessage" class="alert hide"></div>

  <form id="add_duration" method="post">

    <div class="panel-body">

<input type ="hidden" name="csrf_test_name" id="" value="<?php echo $this->security->get_csrf_hash();?>">

        <div class="form-group row">

            <label for="customer_name" class="col-sm-3 col-form-label" style="width: auto;"><?php echo ('Duration') ?> <i class="text-danger">*</i></label>

            <div class="col-sm-6">

                <input class="form-control" name ="duration_name" id="duration_name" type="text" placeholder="Duration"  required="" tabindex="1">

            </div>

        </div>


    </div>

    

        </div>



        <div class="modal-footer">

            

            <a href="#" class="btn btnclr"  data-dismiss="modal"><?php echo display('Close') ?> </a>

            

            <input type="submit" class="btn btnclr"  value=<?php echo display('Submit') ?>>

        </div>

                                </form>

    </div><!-- /.modal-content -->

</div><!-- /.modal-dialog -->

</div><!-- /.modal -->









<!------ add new dailybreak-->  
<div class="modal fade" id="dailybreak_add" role="dialog">

<div class="modal-dialog" role="document">

<div class="modal-content" style="margin-top: 190px;text-align:center;">
        <div class="modal-header btnclr"  >

            

            <a href="#" class="close" data-dismiss="modal">&times;</a>

            <h4 class="modal-title"><?php echo ('Add New Daily Break ') ?></h4>

        </div>

        

        <div class="modal-body">

            <div id="customeMessage" class="alert hide"></div>

  <form id="insert_daily_break" method="post">

    <div class="panel-body">

<input type ="hidden" name="csrf_test_name" id="" value="<?php echo $this->security->get_csrf_hash();?>">

        <div class="form-group row">

            <label for="customer_name" class="col-sm-3 col-form-label" style="width: auto;"><?php echo ('Daily Break') ?> <i class="text-danger">*</i></label>

            <div class="col-sm-6">

                <!-- <input class="form-control"  name ="dbreak" id="dbreak" type="text" placeholder="Daily Break"  required="" tabindex="1"> -->
                <input type="text"   class="decimal form-control" name ="dbreak" id="dbreak" placeholder="Integer and decimal only"/>
            </div>

        </div>


    </div>

    

        </div>



        <div class="modal-footer">

            

            <a href="#" class="btn btnclr "   data-dismiss="modal"><?php echo display('Close') ?> </a>

            

            <input type="submit" class="btn btnclr "   value=<?php echo display('Submit') ?>>

        </div>

                                </form>

    </div><!-- /.modal-content -->

</div><!-- /.modal-dialog -->

</div><!-- /.modal -->





  
<!------ add new Payment Type -->
<div class="modal fade" id="payment_type" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 190px;text-align:center;">
        <div class="modal-header btnclr"  >
            <a href="#" class="close" data-dismiss="modal">&times;</a>
            <h4 class="modal-title"> <?php echo display('Add New Payment Terms') ?> </h4>
        </div>
        <div class="modal-body">
            <div id="customeMessage" class="alert hide"></div>
  <form id="add_pay_terms" method="post">
    <div class="panel-body">
<input type ="hidden" name="csrf_test_name" id="" value="<?php echo $this->security->get_csrf_hash();?>">
        <div class="form-group row">
            <label for="customer_name" style="width: auto;" class="col-sm-3 col-form-label"><?php echo display('New Payment Terms') ?> <i class="text-danger">*</i></label>
            <div class="col-sm-6">
                <input class="form-control" name ="new_payment_terms" id="new_payment_terms" type="text" placeholder="New Payment Terms"  required="" tabindex="1">
            </div>
        </div>
    </div>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn btnclr"   data-dismiss="modal"><?php echo display('Close') ?> </a>
            <input type="submit" class="btn btnclr"   value=<?php echo display('Submit') ?>>
        </div>
                                </form>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js"></script>

<script>


$('.decimal').keydown(function (e) {
  //Get the occurence of decimal operator
  var match = $(this).val().match(/\./g);
  if(match!=null){
    // Allow: backspace, delete, tab, escape and enter 
    if ($.inArray(e.keyCode, [46,8, 9, 27, 13, 110]) !== -1 ||
        // Allow: Ctrl+A
        (e.keyCode == 65 && e.ctrlKey === true) ||
        // Allow: home, end, left, right
        (e.keyCode >= 35 && e.keyCode <= 39)) {
      // let it happen, don't do anything
      return;
    }  // Ensure that it is a number and stop the keypress
    else if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105 )&&(e.keyCode==190)) {
      e.preventDefault();
    }
  }
  else{
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
        // Allow: Ctrl+A
        (e.keyCode == 65 && e.ctrlKey === true) ||
        // Allow: home, end, left, right
        (e.keyCode >= 35 && e.keyCode <= 39)) {
      // let it happen, don't do anything
      return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
      e.preventDefault();
    }
  }
});
//Allow Upto Two decimal places value only
$('.decimal').keyup(function () {
  if ($(this).val().indexOf('.') != -1) {
    if ($(this).val().split(".")[1].length > 2) {
      if (isNaN(parseFloat(this.value))) return;
      this.value = parseFloat(this.value).toFixed(2);
    }
  }
});




$('#add_pay_terms').submit(function(e){
    e.preventDefault();
      var data = {
        new_payment_terms : $('#new_payment_terms').val()
      };
      data[csrfName] = csrfHash;
      $.ajax({
          type:'POST',
          data: data,
         dataType:"json",
          url:'<?php echo base_url();?>Cpurchase/add_payment_terms',
          success: function(data1, statut) {
    
       var $select = $('select#terms');
            $select.empty();
            console.log(data);
              for(var i = 0; i < data1.length; i++) {
        var option = $('<option/>').attr('value', data1[i].payment_terms).text(data1[i].payment_terms);
        $select.append(option); // append new options
    }
    $('#new_payment_terms').val('');
      $("#bodyModal1").html("Payment Terms Added Successfully");
      $('#payment_type').modal('hide');
      $('#terms').show();
       $('#myModal1').modal('show');
      window.setTimeout(function(){
        $('#payment_type_new').modal('hide');
       $('#myModal1').modal('hide');
        $('.modal-backdrop').remove();
    }, 2500);
     }
      });
  });




$('body').on('keyup','.end',function(){
//    debugger;
    var start=$(this).closest('tr').find('.strt').val();
    //alert(start);
    var end=$(this).closest('td').find('.end').val();
var breakv=$('#dailybreak').val();

var calculate=parseInt(start)+parseInt(end);
var final =calculate-parseInt(breakv);
console.log(start+"/"+end+"/"+breakv);
$(this).closest('tr').find('.hours-worked').html(final);

});




var csrfName = '<?php echo $this->security->get_csrf_token_name();?>';
var csrfHash = '<?php echo $this->security->get_csrf_hash();?>';
    $(document).on('select change'  ,'#templ_name', function () {
        
var data = {
      
      value:$('#templ_name').val()
  };

  data[csrfName] = csrfHash;

  $.ajax({
      type:'POST',
      data: data, 
     dataType:"json",
      url:'<?php echo base_url();?>Chrm/getemployee_data',
      success: function(result, statut) {
        console.log(result);
           $('#job_title').val(result[0]['designation']);
     
  
      }
  });


    });




$('#add_duration').submit(function(e){
    e.preventDefault();
      var data = {
        duration_name : $('#duration_name').val()
      };
      data[csrfName] = csrfHash;
      $.ajax({
          type:'POST',
          data: data,
         dataType:"json",
          url:'<?php echo base_url();?>Chrm/add_durat_info',
          success: function(data1, statut) {
    
       var $select = $('select#duration');
            $select.empty();
            console.log(data);
              for(var i = 0; i < data1.length; i++) {
        var option = $('<option/>').attr('value', data1[i].duration_name).text(data1[i].duration_name);
        $select.append(option); // append new options
    }
    $('#duration_name').val('');
      $("#bodyModal1").html("Duration Added Successfully");
      $('#duration_add').modal('hide');
      $('#duration').show();
       $('#myModal1').modal('show');
      window.setTimeout(function(){
        $('#payment_type_new').modal('hide');
       $('#myModal1').modal('hide');
        $('.modal-backdrop').remove();
    }, 2500);
     }
      });
  });







$('#insert_daily_break').submit(function(e){
    e.preventDefault();
      var data = {
        dailybreak_name : $('#dbreak').val()
      };
      data[csrfName] = csrfHash;
      $.ajax({
          type:'POST',
          data: data,
         dataType:"json",
          url:'<?php echo base_url();?>Chrm/add_dailybreak_info',
          success: function(data1, statut) {
    
       var $select = $('select#dailybreak');
            $select.empty();
            console.log(data);
              for(var i = 0; i < data1.length; i++) {
        var option = $('<option/>').attr('value', data1[i].dailybreak_name).text(data1[i].dailybreak_name);
        $select.append(option); // append new options
    }
    $('#dailybreak_name').val('');
      $("#bodyModal1").html("Daily Break Added Successfully");
      $('#dailybreak_add').modal('hide');
      $('#dailybreak').show();
       $('#myModal1').modal('show');
      window.setTimeout(function(){
        $('#payment_type_new').modal('hide');
       $('#myModal1').modal('hide');
        $('.modal-backdrop').remove();
    }, 2500);
     }
      });
  });













 var csrfName = '<?php echo $this->security->get_csrf_token_name();?>';
var csrfHash = '<?php echo $this->security->get_csrf_hash();?>';
    $(document).on('select change'  ,'#templ_name', function () {
        
var data = {
      
      value:$('#templ_name').val()
  };

  data[csrfName] = csrfHash;

  $.ajax({
      type:'POST',
      data: data, 
     dataType:"json",
      url:'<?php echo base_url();?>Chrm/getemployee_data',
      success: function(result, statut) {
        
           $('#job_title').val(result[0]['designation']);
     
  
      }
  });


    });



    <?php
if(isset($_POST['btnSearch'])){
    $s = $_REQUEST["daterangepicker-field"];
  
}
$prev_month = date('Y-m-d', strtotime('first day of january this year'));
$current=date('Y-m-d');
$dat2= $prev_month."to". $current;

$searchdate =(!empty($s)?$s:$dat2);
    $dat = str_replace(' ', '', $searchdate);
    $split=explode("to",$dat);
?>




    


var csrfName = '<?php echo $this->security->get_csrf_token_name();?>';
var csrfHash = '<?php echo $this->security->get_csrf_hash();?>';

$(function() {

var start = moment().subtract(7, 'days');
var end = moment();

function cb(start, end) {
    $('#reportrange').val(start.format('D/M/YYYY') + ' - ' + end.format('D/M/YYYY'));
  
}

$('#reportrange').daterangepicker({
    startDate: start,
    endDate: end,
    ranges: {
       'Today': [moment(), moment()],
       'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
       'Last 7 Days': [moment().subtract(6, 'days'), moment()],
       'Last 30 Days': [moment().subtract(29, 'days'), moment()],
       'This Month': [moment().startOf('month'), moment().endOf('month')],
       'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    }
}, cb);
  $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
        // Callback function when the apply button is clicked or range is selected
       // alert("Selected date range: " + picker.startDate.format('D/M/YYYY') + ' - ' + picker.endDate.format('D/M/YYYY'));
           var data= {
                    selectedDate: $('#reportrange').val(),
                    employeeId: $('#templ_name').val() // You'll need to capture the selected employee ID
                };
       data[csrfName] = csrfHash;
       $.ajax({
               url:'<?php echo base_url();?>Chrm/checkTimesheet',
                method: 'POST',
                data:data,
                success: function(response) {
         
                    if(response.includes('Timesheet exists for this date and employee')){
                     $('#check_date').text(response);
                    }else{
                       $('#check_date').text('');
                    }
                   // console.log(response); // Log or handle the response as needed
                },
                error: function(xhr, status, error) {
                    // Handle errors here
                }
            });
      });
cb(start, end);

});
$('body').on('input select change','#reportrange',function(){
    var date = $(this).val();
    $('#tBody').empty();
    const myArray = date.split("-");
    var start = myArray[0];
    var s_split=start.split("/");
    var end = myArray[1];
    var e_split=end.split("/");
    const weekDays = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
    let chosenDate = start; //get chosen date from datepicker
    var Date1 = new Date (s_split[2], s_split[0], s_split[1]);
var Date2 = new Date (e_split[2], e_split[0], e_split[1]);
var Days = Math.round((Date2.getTime() - Date1.getTime())/(1000*60*60*24));
console.log(s_split[2]+"/"+ s_split[1]+"/"+ s_split[0]+"/"+Days);
    const validDate = new Date(chosenDate);
    let newDate;
        const monStartWeekDays = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
        for(let i = 0; i <= Days; i++) { //iterate through each weekday
          newDate = new Date(validDate); //create date object
          newDate.setDate(validDate.getDate() + i); //increment set date
          //append results to table
           var date=$('#date_'+i).html();
   // date=date.replace(/ /g,"");
   // var end=document.getElementById(`finishTime${monStartWeekDays[i]}`).value;
//      var sum=document.getElementById(`hoursWorked${monStartWeekDays[i]}`).value;
    var day=$('#day_'+i).html();
 //   day=day.replace("/","");
          $('#tBody').append( `
           <tr >
            
            <td  class="date" id="date_`+i+`"><input type="hidden" value="`+`${newDate.getDate()}/${newDate.getMonth() + 1}/${newDate.getFullYear()}" name="date[]"   />`+`${newDate.getDate()} / ${newDate.getMonth() + 1} / ${newDate.getFullYear()}</td>
            <td  class="day" id="day_`+i+`"><input type="hidden" value="`+`${weekDays[newDate.getDay()].slice(0,3)}" name="day[]"   />`+`${weekDays[newDate.getDay()].slice(0,3)}</td>
          <td style="text-align:center;" class="daily-break_${i}">
                    <select name="dailybreak[]" id="dailybreak" class="form-control datepicker dailybreak" style="width: 100px;margin: auto; display: block;">
                        <?php foreach ($dailybreak as $dbd) { ?>
                            <option value="<?php echo $dbd['dailybreak_name']; ?>"><?php echo $dbd['dailybreak_name']; ?></option>
                        <?php } ?>
                    </select>
                </td>
            <td class="start-time_`+i+`">    <input    id="startTime${monStartWeekDays[i]}"  name="start[]"  class="hasTimepicker start" type="time"   /></td>
            <td class="finish-time_`+i+`">   <input    id="finishTime${monStartWeekDays[i]}"   name="end[]" class="hasTimepicker end"   type="time"   /></td></td>
            <td class="hours-worked_`+i+`">  <input    id="hoursWorked${monStartWeekDays[i]}"  name="sum[]" class="timeSum"      readonly       type="text"   /></td> <td>
                    <a style="color:white;" class="delete_day btnclr btn  m-b-5 m-r-2"><i class="fa fa-trash" aria-hidden="true"></i> </a>
         </td>
        
            
        
          
                 
                             
            </tr>




          ` );

      
 }
        
});





function converToMinutes(s) {
    var c = s.split('.');
    return parseInt(c[0]) * 60 + parseInt(c[1]);
}

function parseTime(s) {
    return Math.floor(parseInt(s) / 60) + "." + parseInt(s) % 60
}

$(document).on('select change'  ,'.end','.dailybreak', function () {

 var $begin = $(this).closest('tr').find('.start').val();
    var $end = $(this).closest('tr').find('.end').val();

    // Calculate time difference
    let valuestart = moment($begin, "HH:mm");
    let valuestop = moment($end, "HH:mm");
    let timeDiff = moment.duration(valuestop.diff(valuestart));

    // Capture the selected daily break in minutes
    var dailyBreakValue = parseInt($(this).closest('tr').find('.dailybreak').val()) || 0;

    // Subtract daily break time from timeDiff in minutes
    var totalMinutes = timeDiff.asMinutes() - dailyBreakValue;

    // Calculate the hours and minutes
    var hours = Math.floor(totalMinutes / 60);
    var minutes = totalMinutes % 60;

    // Format the result as "HH:mm"
    var formattedTime = hours.toString().padStart(2, '0') + '.' + minutes.toString().padStart(2, '0');

    $(this).closest('tr').find('.timeSum').val(formattedTime);
debugger;
var total_net = 0;

$('.table').each(function () {
    var tableTotal = 0;

    $(this).find('.timeSum').each(function () {
        var precio = $(this).val();
        if (!isNaN(precio) && precio.length !== 0) {
            var [hours, minutes] = precio.split('.').map(parseFloat);
            tableTotal += hours + minutes / 100; // Dividing minutes by 100 to get the correct decimal value
        }
    });

    total_net += tableTotal;
});

// Convert the total back to hours and minutes format
var hours = Math.floor(total_net);
var minutes = Math.round((total_net % 1) * 100); // Multiply by 100 to get the minutes

if (minutes === 100) {
    hours += 1;
    minutes = 0;
}

$('#total_net').val(hours.toString().padStart(2, '0') + '.' + minutes.toString().padStart(2, '0')).trigger('change');

});

$(document).on('select change'  ,'.start','.dailybreak', function () {

 var $begin = $(this).closest('tr').find('.start').val();
    var $end = $(this).closest('tr').find('.end').val();

    // Calculate time difference
    let valuestart = moment($begin, "HH:mm");
    let valuestop = moment($end, "HH:mm");
    let timeDiff = moment.duration(valuestop.diff(valuestart));

    // Capture the selected daily break in minutes
    var dailyBreakValue = parseInt($(this).closest('tr').find('.dailybreak').val()) || 0;

    // Subtract daily break time from timeDiff in minutes
    var totalMinutes = timeDiff.asMinutes() - dailyBreakValue;

    // Calculate the hours and minutes
    var hours = Math.floor(totalMinutes / 60);
    var minutes = totalMinutes % 60;

    // Format the result as "HH:mm"
    var formattedTime = hours.toString().padStart(2, '0') + '.' + minutes.toString().padStart(2, '0');
if (isNaN(parseFloat(formattedTime))) {
     $(this).closest('tr').find('.timeSum').val('00.00');
}else{
    $(this).closest('tr').find('.timeSum').val(formattedTime);
}
debugger;
var total_net = 0;

$('.table').each(function () {
    var tableTotal = 0;

    $(this).find('.timeSum').each(function () {
        var precio = $(this).val();
        if (!isNaN(precio) && precio.length !== 0) {
            var [hours, minutes] = precio.split('.').map(parseFloat);
            tableTotal += hours + minutes / 100; // Dividing minutes by 100 to get the correct decimal value
        }
    });

    total_net += tableTotal;
});

// Convert the total back to hours and minutes format
var hours = Math.floor(total_net);
var minutes = Math.round((total_net % 1) * 100); // Multiply by 100 to get the minutes

if (minutes === 100) {
    hours += 1;
    minutes = 0;
}

$('#total_net').val(hours.toString().padStart(2, '0') + '.' + minutes.toString().padStart(2, '0')).trigger('change');

});


$(document).on('input','.timeSum', function () {
    // $(".timeSum").change(function(){

    var $addtotal = $(this).closest('tr').find('.timeSum').val();

    alert($addtotal);


    });


// var timeOptions = {
//   interval: 15,
// dropdown: true,
// change: function(time) {
//   sumHours();
// }
// }


// $begin.timepicker(timeOptions);
// $end.timepicker(timeOptions);


// $(document).on('focus', $end, function() {
// $(this).select();  // select entire text on focus
// });


// $begin.on("click, focus", function () {
// $(this).select();
// });


function sumHours () {

    var time1 = $begin.timepicker().getTime();
    var time2 = $end.timepicker().getTime();

    if ( time1 && time2 ) {
      if ( time1 > time2 ) {
        //Correct the day so second entry is always 
        //after first, as in midnight shift. Use a new 
        //date object so original is not incremented.
        v = new Date(time2);
        v.setDate(v.getDate() + 1);
      } else {
        v = time2;
      }

      var diff = ( Math.abs( v - time1) / 36e5 ).toFixed(2);
      $input.val(diff); 
      
    } else {

      $input.val(''); 

      alert($input);
    }
}
$('#total_net').on('keyup',function(){
    debugger;
    var value=$(this).val();
   if($(this).val() == ''){
$(".hasTimepicker").prop("readonly", false);
    //  $(this).val($(this).prop('defaultValue'));
          $('#tBody .hasTimepicker').prop('defaultValue');  
    }else{
  $(".hasTimepicker").prop("readonly", true); 
    }

});

$(document).on('click','.delete_day',function(){
$(this).closest('tr').remove();
 var total_net=0;
 $('.table').each(function() {
    $(this).find('.timeSum').each(function() {
        var precio = $(this).val();
        if (!isNaN(precio) && precio.length !== 0) {
          total_net += parseFloat(precio);
        }
      });

  });
//   console.log(total_net.toFixed(3));
$('#total_net').val(total_net.toFixed(2)).trigger('change');
  var firstDate = $('.date input').first().val(); // Get the value of the first date input
    var lastDate = $('.date input').last().val(); // Get the value of the last date input

    // Function to convert date format from 'd/m/y' to 'm/d/y'
    function convertDateFormat(dateStr) {
        const [day, month, year] = dateStr.split('/');
        return `${month}/${day}/${year}`;
    }

    // Convert first and last dates to 'm/d/y' format
    var firstDateMDY = convertDateFormat(firstDate);
    var lastDateMDY = convertDateFormat(lastDate);
  $('#reportrange').val(firstDateMDY + ' - ' + lastDateMDY);

});
$(function() {
    $('.applyBtn').datepicker({
        onSelect: function(date) {
            alert("Selected date: " + date); // Test to check if the Datepicker is triggering
            // Perform AJAX request to check timesheet_info table
            $.ajax({
                url: 'Chrm/checkTimesheet',
                method: 'POST',
                data: {
                    selectedDate: date,
                    employeeId: $('#templ_name').val() // You'll need to capture the selected employee ID
                },
                success: function(response) {
                    // Process the response here
                    console.log(response); // Log or handle the response as needed
                },
                error: function(xhr, status, error) {
                    // Handle errors here
                }
            });
        }
    });
});
</script>

