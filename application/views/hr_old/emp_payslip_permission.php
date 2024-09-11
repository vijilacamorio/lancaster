
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
    .btnclr{
       background-color:<?php echo $setting_detail[0]['button_color']; ?>;
       color: <?php echo $setting_detail[0]['button_color']; ?>;

   }
th,td{
    text-align:center;
}
    .select2-selection{
        display :none;
    }
</style>

<div class="content-wrapper">

    <section class="content-header" style="height:70px;">

        <div class="header-icon">

            <i class="pe-7s-note2"></i>

        </div>

        <div class="header-title">

            <h1>Payment Administration</h1>

            <small></small>

            <ol class="breadcrumb">

                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>

                <li><a href="#">HRM</a></li>

                <li class="active" style="color:orange">Payment Administration</li>

            </ol>

        </div>

    </section>

    <section class="content">

        <!-- New category -->
        <div class="row">
            <div class="col-sm-12">                
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading" style="height:50px;">
                        <div class="panel-title">
                            <a style="float:right;background-color:#38469f;color:white;" href="<?php echo base_url('Chrm/manage_timesheet') ?>" class="btn  m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo "Manage TimeSheet" ?> </a>
                        </div>
                    </div>
                    <!-- <?php// echo form_open('Cquotation/insert_quotation', array('class' => 'form-vertical', 'id' => 'insert_quotation')) ?> -->
                  
                    <!-- <form id="insert_timesheet"  method="post">   -->
                  
                    <?php echo form_open_multipart('Chrm/second_pay_slip','id="validate"' ) ?>

                  
                  
                    <div class="panel-body">
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="customer" class="col-sm-4 col-form-label">Employee Name<i class="text-danger">*</i></label>
                                <div class="col-sm-8">

<input  type="hidden"   readonly id="tsheet_id" value="<?php echo $time_sheet_data[0]['timesheet_id'];?>" name="tsheet_id" />
<input  type="hidden"   readonly id="unique_id" value="<?php echo $time_sheet_data[0]['unique_id'];?>" name="unique_id" />
                                        
         <select name="templ_name" id="templ_name" class="form-control"    tabindex="3" style="width100">
        <option value="<?php  echo $employee_name[0]['id'] ;?>"> <?php echo $employee_name[0]['first_name']." ".$employee_name[0]['last_name'] ?></option>
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

                                                 <option value="<?php echo $time_sheet_data[0]['duration'];?>">  <?php echo $time_sheet_data[0]['duration'];?>  </option>
                                                
                                           
                                           
                                                 <?php foreach($duration as $inv){ ?>
          <option value="<?php echo $inv['duration_name'] ; ?>"><?php echo $inv['duration_name'] ; ?></option>
                               <?php    }?>
                                           


                                                </select>   
                                </div>                
                            </div>
                        </div>











                        <div class="form-group row">
                            
                        <div class="col-sm-6">
                                <label for="customer" class="col-sm-4 col-form-label">Job title<i class="text-danger">*</i></label>
                                <div class="col-sm-8">
                                        <input type="text" name="job_title" id="job_title" readonly  placeholder="Job title" value="<?php  echo $employee_name[0]['designation']; ?>" class="form-control">
                                        
                                </div>
                            </div>

                     <div class="col-sm-6">
                                <label for="customer" class="col-sm-4 col-form-label">Payment terms<i class="text-danger">*</i></label>
                                <div class="col-sm-7">
                               
                                    <?php   if ($this->session->userdata('u_type') == 3){ ?>
                                        <input type="text" name="cname" value="<?php echo $this->session->userdata('user_name') ?>" class="form-control" readonly>
                                        <input type="hidden" name="customer_id" value="<?php echo $this->session->userdata('user_id') ?>" class="form-control">
                                    <?php  } else { ?>
                                        <select name="payment_term" id="terms"  class="form-control" onchange="get_customer_info(this.value)"  style="width: 420px;"  data-placeholder="<?php echo display('select_one'); ?>">

                                           
                                        <option value="<?php echo $time_sheet_data[0]['payment_term'] ; ?>"> <?php echo $time_sheet_data[0]['payment_term'] ; ?> </option>
                                                    
                                                

                                            

                                                <?php foreach($payment_terms as $inv){ ?>
          <option value="<?php echo $inv['payment_terms'] ; ?>"><?php echo $inv['payment_terms'] ; ?></option>
                               <?php    }?>
                                           


                                        </select>
                                    <?php } ?>
                                </div>









                        </div>




                            </div>










                            <div class="form-group row">
                            <div class="col-sm-6">
                            <label for="dailybreak" class="col-sm-4 col-form-label">Date Range</label>
                            <div class="col-sm-8">
                                <input id="reportrange" type="text" readonly  name="date_range" value="<?php echo $time_sheet_data[0]['month'] ; ?>" class="form-control"/>
    
                          
                             
</div>
                            </div>



















                            
                       



                        <div class="form-group row">
                         

                            </div>



                        <div class="table-responsive work_table col-md-12">
		                    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="PurList"> 
								<thead>
									<tr style="text-align:center;">
										<th style='height:25px;color:black;' class="col-md-2">Date</th>
										<th style='height:25px;color:black;' class="col-md-1">Day</th>
										 <th class="col-md-1">Daily Break in mins</th>
										<th style='height:25px;color:black;' class="col-md-2">Start Time (HH:MM)</th>
										<th style='height:25px;color:black;' class="col-md-2">End Time (HH:MM)</th>
										<th style='height:25px;color:black;' class="col-md-5"> Hours</th>
											<th style='height:25px;color:black;' class="col-md-5">Action</th>
									</tr>
								</thead>
								<tbody id="tBody">
                                     <?php
    // Assuming $time_sheet_data contains your data

    // Function to compare dates for sorting
    function compareDates($a, $b) {
        $dateA = DateTime::createFromFormat('d/m/Y', $a['Date']);
        $dateB = DateTime::createFromFormat('d/m/Y', $b['Date']);
        
        if ($dateA === false || $dateB === false) {
            return 0; // Handle invalid dates here if needed
        }

        return $dateA <=> $dateB;
    }

    // Sorting the $time_sheet_data array based on the 'Date' field
    usort($time_sheet_data, 'compareDates');

    // Variable to track printed dates
    $printedDates = array();

    // Rendering the sorted table rows
    foreach($time_sheet_data as $tsheet) {
        if(!empty($tsheet['hours_per_day']) && !in_array($tsheet['Date'], $printedDates)) {
            // Add the date to the printed dates array
            $printedDates[] = $tsheet['Date'];
?>
            <tr>
                <td class="date">
                    <input type="text" <?php if ($tsheet['uneditable'] == 1) { echo 'readonly'; } ?> value="<?php echo empty($tsheet['Date']) ? 'readonly' : $tsheet['Date']; ?>" name="date[]">
                </td>
                <td class="day">
                    <input type="text" <?php if ($tsheet['uneditable'] == 1) { echo 'readonly'; } ?> value="<?php echo empty($tsheet['Day']) ? 'readonly' : $tsheet['Day']; ?>" name="day[]">
                </td>
                  <td style="text-align:center;" class="daily-break">
                    <select name="dailybreak[]" class="form-control datepicker dailybreak" style="width: 100px;margin: auto; display: block;">
                       <option value="<?php echo $tsheet['daily_break']; ?>"><?php echo $tsheet['daily_break']; ?></option>
                        <?php foreach ($dailybreak as $dbd) { ?>
                            <option value="<?php echo $dbd['dailybreak_name']; ?>"><?php echo $dbd['dailybreak_name']; ?></option>
                        <?php } ?>
                    </select>
                </td>
                <td class="start-time">
                    <input <?php if ($tsheet['uneditable'] == 1) { echo 'readonly'; } ?> name="start[]" class="hasTimepicker start" value="<?php echo empty($tsheet['Day']) ? 'readonly' : $tsheet['time_start']; ?>" type="time">
                </td>
                <td class="finish-time">
                    <input <?php if ($tsheet['uneditable'] == 1) { echo 'readonly'; } ?> name="end[]" class="hasTimepicker end" value="<?php echo empty($tsheet['Day']) ? 'readonly' : $tsheet['time_end']; ?>" type="time">
                </td>
                <td class="hours-worked">
                    <input readonly name="sum[]" class="timeSum" value="<?php echo empty($tsheet['Day']) ? 'readonly' : $tsheet['hours_per_day']; ?>" type="text">
                </td>
                <td>
                    <a style='color:white;' class="delete_day btnclr btn  m-b-5 m-r-2"><i class="fa fa-trash" aria-hidden="true"></i> </a>
         </td>
            </tr>
<?php
        }
    }
?>
								</tbody>
                               
                                <tfoot>
          
                                <tr style="text-align:end"> 
                                             <td colspan="5" class="text-right" style="font-weight:bold;">Total Hours :</td> 
                    <td style="text-align: center;"> <input  type="text"   readonly id="total_net" value="<?php echo $time_sheet_data[0]['total_hours'] ; ?>" name="total_net" />    </td> 
                                            </tr> 

                 
                                </tfoot>


		                    </table>

                                             
                                          
                                        
		                </div>



                        <div class="form-group row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4" style="    border: 5px solid gainsboro;
    border-radius: 20px;">


   

                            <div class="">
                        <div class="panel-title">



         <br/>

 <div class="form-group row">
    <div class="col-sm-12">
<div class="col-sm-6">
<label for="administrator_person">Administrator Name<i class="text-danger">*</i></label> 
</div>
<div class="col-sm-4">
<select name="administrator_person" id="administrator_person"  class="form-control"   data-placeholder="<?php echo display('select_one'); ?>">                                   
<option value="<?php  echo $time_sheet_data[0]['admin_name']; ?>"><?php  echo $time_sheet_data[0]['admin_name']; ?> </option>
        <?php foreach($administrator as $adv){ ?>
<option value="<?php echo $adv['adm_id'] ; ?>"><?php echo $adv['adm_name'] ; ?></option>
<?php    }?>

</select>
</div>
<div class="col-sm-2">
<a  class="client-add-btn btn" aria-hidden="true" style="color:white;background-color:#38469f;"  data-toggle="modal" data-target="#add_admst" ><i class="fa fa-plus"></i></a>
</div>
</div>
<div>
</div>
</div>











<div class="panel-title">
<div class="col-sm-12">
<div class="col-sm-6">
<label for="selector">Payment Method
<i class="text-danger">*</i>
</label>
        </div>
        <div class="col-sm-6">
<select id="selector" name="payment_method" onchange="yesnoCheck(this);"  class="form-control" >
    <option value="<?php  echo $time_sheet_data[0]['payment_method']; ?>"><?php  echo $time_sheet_data[0]['payment_method']; ?></option>
    <option value="Cheque">Cheque/Check </option>
    <option value="Bank">Bank</option>
    <option value="Cash">Cash</option>
</select>
<!-- <label for="selector">Select ID Proof</label> -->
</div>
        </div></div>
<div id="adc" >
    <br/>
        <div class="col-sm-12" style="padding-top:20px;">
<div class="col-sm-6">
<label for="aadhar">Cheque No<i class="text-danger">*</i></label> 
        </div>
       <div class="col-sm-6"> 
<input type="number" id="cheque_no" name="cheque_no"  value="<?php  echo $time_sheet_data[0]['cheque_no']; ?>"  class="form-control" requried /><br />
        </div>
        <div class="col-sm-6">
<label for="aadhar">Cheque Date<i class="text-danger">*</i></label> 
 </div>
    <div class="col-sm-6"> 
<input type="date" id="cheque_date" name="cheque_date" value="<?php  echo $time_sheet_data[0]['cheque_date']; ?>"  class="form-control"  requried/><br />
        </div></div>
</div>
<div id="pc" >
     <div class="col-sm-12" style="padding-top:20px;">
<div class="col-sm-6">
<label for="pan">Bank Name<i class="text-danger">*</i></label> 
</div>
<div class="col-sm-6">
<input type="text" id="bank_name" name="bank_name" value="<?php  echo $time_sheet_data[0]['bank_name']; ?>"  class="form-control" requried /><br />
        </div>
<div class="col-sm-6">
<label for="pan">Payment Reference No<i class="text-danger">*</i></label> 
        </div>
<div class="col-sm-6">
<input type="text" id="payment_refno" name="payment_refno" value="<?php  echo $time_sheet_data[0]['payment_ref_no']; ?>"  class="form-control"  requried/><br />
</div>
</div>
</div>
<div id="ps" style="display:none;">
      <div class="col-sm-12" style="padding-top:20px;">
    <div class="col-sm-6">
<label for="pass">Cash<i class="text-danger">*</i></label> 
</div>
<div class="col-sm-4">
<input type="text" id="cash" name="cash"  class="form-control"  value="Cash" readonly /><br />
</div>


</div>
</div>


</div>
            </div>

 

  <div class="col-sm-12" style="padding-top:20px;">
    <div class="col-sm-10">

                        <input type="submit" style="float:right;color:white;background-color: #38469f;" value="Generate pay slip"   class="btn btn-info m-b-5 m-r-2"/> 
   </div>    </div> 
                    </div>               
                    <!-- <?php //echo form_close() ?> -->
                    <?php echo form_close() ?>

                                    <!-- </form> -->

            </div>

                </div>
            </div>
        </div>
    </section>


</div>



<script>
    function yesnoCheck(that) 
{
  if (that.value == "Cheque") 
    {
        document.getElementById("adc").style.display = "block";
         document.getElementById("pc").style.display = "none";
          // document.getElementById("ps").style.display = "none";
    }
    else   if (that.value == "Bank")
    {
          document.getElementById("adc").style.display = "none";
         document.getElementById("pc").style.display = "block";
        //   document.getElementById("ps").style.display = "none";
      
    }
    else if (that.value == "Cash")
    {
        document.getElementById("adc").style.display = "none";
         document.getElementById("pc").style.display = "none";
         //  document.getElementById("ps").style.display = "block";
    }

    else
    {
              document.getElementById("adc").style.display = "none";
         document.getElementById("pc").style.display = "none";
          // document.getElementById("ps").style.display = "none";
    }
}

   $(document).ready(function(){


var that=$('#selector').val();
  

    if (that == "Cheque") 
    {
        $('#adc').show();
      $('#pc').hide();
    //  $('#ps').hide();
      
    }
    else   if (that == "Bank")
    {
             $('#adc').hide();
      $('#pc').show();
     // $('#ps').hide();

        
      
    }
    else if (that == "Cash")
    {
        $('#adc').hide();
      $('#pc').hide();
    //  $('#ps').show();
     
    }else{
           $('#adc').hide();
      $('#pc').hide();
     // $('#ps').hide();
    }

  
 })
</script>



<!------ add new Duration-->  
<div class="modal fade" id="add_admst" role="dialog">

<div class="modal-dialog" role="document">

    <div class="modal-content">

        <div class="modal-header" style="color:white;background-color:#38469f;" >

            

            <a href="#" class="close" data-dismiss="modal">&times;</a>

            <h4 class="modal-title"><?php echo ('Add New Administrator ') ?></h4>

        </div>

        

        <div class="modal-body">

            <div id="customeMessage" class="alert hide"></div>

  <form id="insert_adm" method="post">

    <div class="panel-body">

<input type ="hidden" name="csrf_test_name" id="" value="<?php echo $this->security->get_csrf_hash();?>">

        <div class="form-group row">

            <label for="adms_name" class="col-sm-4 col-form-label" ><?php echo ('Administrator Name') ?> <i class="text-danger">*</i></label>
            <div class="col-sm-6">
                <input class="form-control" name ="adms_name" id="adms_name" type="text" placeholder="Administrator Name"   required="" tabindex="1">

            </div>



     
</div>


<input type ="hidden" name="csrf_test_name" id="" value="<?php echo $this->security->get_csrf_hash();?>">



<div class="form-group row">

<label for="address" class="col-sm-4 col-form-label" ><?php echo ('Administrator Address') ?> </label>

<div class="col-sm-6">

    <input class="form-control" name ="address" id="address" type="text" placeholder="Administrator Adress"  required="" tabindex="1">

</div>




</div>







    </div>
        </div>

        <div class="modal-footer">
            <a href="#" class="btn" style="color:white;background-color:#38469f;" data-dismiss="modal"><?php echo display('Close') ?> </a>
            <input type="submit" class="btn" style="color:white;background-color: #38469f;" value=<?php echo display('Submit') ?>>
        </div>

                                </form>

    </div><!-- /.modal-content -->

</div><!-- /.modal-dialog -->

</div><!-- /.modal -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js"></script>
<script>
 var csrfName = '<?php echo $this->security->get_csrf_token_name();?>';
var csrfHash = '<?php echo $this->security->get_csrf_hash();?>';

      
    $('#insert_adm').submit(function (event) {
        event.preventDefault();

var dataString = {
    dataString : $("#insert_adm").serialize()
};
dataString[csrfName] = csrfHash;
$.ajax({
    type:"POST",
    dataType:"json",
    url:"<?php echo base_url(); ?>Chrm/insert_data_adsr",
    data:$("#insert_adm").serialize(),
    success:function (data1) {

    var $select = $('select#administrator_person');
        $select.empty();
$('#add_admst').modal('hide');
          for(var i = 0; i < data1.length; i++) {
    var option = $('<option/>').attr('value', data1[i].adm_name).text(data1[i].adm_name);
    $select.append(option); // append new options
}
    }
});
});

var data = {
  
    value:$('#customer_name').val()
};
var csrfName = '<?php echo $this->security->get_csrf_token_name();?>';
var csrfHash = '<?php echo $this->security->get_csrf_hash();?>';

// $(function() {

// // //

// $('#reportrange').daterangepicker({
//     startDate: start,
//     endDate: end,
//     ranges: {
//        'Today': [moment(), moment()],
//        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
//        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
//        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
//        'This Month': [moment().startOf('month'), moment().endOf('month')],
//        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
//     }
// }, //cb
// );

// //cb(start, end);

// });
$('body').on('input select change','#reportrange',function(){
    var date = $(this).val();
  
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
                    <select name="dailybreak[]" class="form-control datepicker dailybreak" style="width: 100px;margin: auto; display: block;">
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
</script>