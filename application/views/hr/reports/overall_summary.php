<?php error_reporting(1);  ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.base64.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/drag_drop_index_table.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/html2canvas.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jspdf.plugin.autotable"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jspdf.umd.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>my-assets/js/invoice_tableManager.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
<script type="text/javascript" src="<?php echo base_url()?>my-assets/js/tableManager.js"></script>
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<script type="text/javascript" src="http://mrrio.github.io/jsPDF/dist/jspdf.debug.js"></script>
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="<?php echo base_url() ?>assets/js/dashboard.js" ></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
<link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.2.2/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>my-assets/css/style.css">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="http://www.bacubacu.com/colresizable/js/colResizable-1.5.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>my-assets/css/css.css" />
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>my-assets/css/css.css" />
<script type="text/javascript" src="http://www.bacubacu.com/colresizable/js/colResizable-1.5.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>my-assets/css/css.css" />
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
   .btnclr{
   background-color:<?php echo $setting_detail[0]['button_color']; ?>;
   color: white;
   }
   .table td{
   text-align:center;
   }
   #fetch_tax .table{
   display: block;
   overflow-x: auto;
   }
   .table{

   overflow-x: auto;
   }
   .logo-9 i{
   font-size:80px;
   position:absolute;
   z-index:0;
   text-align:center;
   width:100%;
   left:0;
   top:-10px;
   color:#34495e;
   -webkit-animation:ring 2s ease infinite;
   animation:ring 2s ease infinite;
   }
   .logo-9 h1{
   font-family: 'Lora', serif;
   font-weight:600;
   text-transform:uppercase;
   font-size:40px;
   position:relative;
   z-index:1;
   color:#e74c3c;
   text-shadow: 3px 3px 0 #fff, -3px -3px 0 #fff, 3px -3px 0 #fff, -3px 3px 0 #fff;
   }
   .logo-9{
   position:relative;
   } 
   /*//side*/
   .bar {
   float: left;
   width: 25px;
   height: 3px;
   border-radius: 4px;
   background-color: #4b9cdb;
   }
   .load-10 .bar {
   animation: loadingJ 2s cubic-bezier(0.17, 0.37, 0.43, 0.67) infinite;
   }
   @keyframes loadingJ {
   0%,
   100% {
   transform: translate(0, 0);
   }
   50% {
   transform: translate(80px, 0);
   background-color: #f5634a;
   width: 110px;
   }
   }
</style>
<div class="content-wrapper">
   <section class="content-header">
      <div class="header-icon">
         <figure class="one">
         <img src="<?php echo base_url()  ?>asset/images/salesreport.png"  class="headshotphoto" style="height:50px;" />
      </div>
      <div class="header-title">
         <div class="logo-holder logo-9">
            <h1><?php echo 'State Overall Summary' ?></h1>
         </div>
        
         <ol class="breadcrumb"   style=" border: 3px solid #d7d4d6;"   >
            <li><a href="<?php echo base_url()?>"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
            <li><a href="#"><?php echo display('report') ?></a></li>
            <li class="active" style="color:orange"><?php echo 'Overall Summary';?></li>
            <div class="load-wrapp">
               <div class="load-10">
                  <div class="bar"></div>
               </div>
            </div>
         </ol>
      </div>
   </section>
   <script></script>
   <section class="content">
      <div class="row">
         <div class="col-sm-12">
         </div>
      </div>
      <!-- Sales report -->
      <?php  
         $commercial_invoice_number  = array();
         foreach ($sale_datas as $invoice) {
         $commercial_invoice_number [] = $invoice['customer_name'];
         }
         $unique_commercial_invoice_number = array_unique($commercial_invoice_number);
         
         
         $container_no = array();
         foreach ($sale_datas as $invoice) {
         $container_no[] = $invoice['product_name'];
         }
         $unique_container_no = array_unique($container_no);
         
         
         $customer_name = array();
         foreach ($sale_datas as $invoice) {
         $customer_name[] = $invoice['payment_due_date'];
         }
         $unique_customer_name = array_unique($customer_name);
         
         
         $payment_terms = array();
         foreach ($sale_datas as $invoice) {
         $payment_terms[] = $invoice['details'];
         }
         $unique_payment_terms = array_unique($payment_terms);
         ?>
     
      <div class="row">
         <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd lobidrag" style='height:80px; border: 3px solid #d7d4d6;'>
               <div class='col-sm-12'>
                  <form id="fetch_tax">
                     <table class="table" align="center" style="overflow-x: unset;position: relative;">
                        <tr style='text-align:center;font-weight:bold;' class="filters">
                           <td style='visibility:hidden' class="search_dropdown" style="color: black;">
                              <span>Tax Choice </span>
                              <select id="tax_Choice" name='tax_choice' class="tax_choice form-control" >
                               <option value="All">All</option>
                                 <option value="living_state_tax">Living</option>
                                 <option value="state_tax">Working</option>
                              </select>
                            </td>

                           <td style='visibility:hidden' class="search_dropdown" style="color: black;">
                              <span>State <span class="text-danger">*</span></span>
                              <select id="tax_Choice" name='selectState' class="selectState form-control" >
                                 <option value="">Select Your State</option>
                                 <?php 
                                    foreach ($state_list as $value) {
                                 ?>
                                 <option value="<?php echo $value['state_code']; ?>"><?php echo $value['state']; ?></option>
                                 <?php } ?>
                              </select>
                           </td>

                            <td style='visibility:hidden' class="search_dropdown" style="color: black;">
                              <span>Tax Type </span>
                              <select id="tax_Choice" name='taxType' class="taxType form-control" >
                                 <option value="">Select Your Tax Type</option>
                                 <?php foreach ($state_tax_list as $value) { ?>
                                 <option value="<?php echo $value['tax']; ?>"><?php echo $value['tax']; ?></option>
                                 <?php } ?>
                              </select>
                            </td>
   <td class="search_dropdown" style="color: black;">
                              <input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                              <span><?php echo 'Employee'; ?></span>
                              <select id="customer-name-filter" name="employee_name" class="form-control">
                                 <option value="All">All</option>
                                 <?php
                                
                                    foreach ($emp_name as $emp) {
                                      $emp['first_name']=trim($emp['first_name']);
                                      $emp['last_name']=trim($emp['last_name']);
                                    ?>
                                 <option value="<?php echo $emp['first_name']." ".$emp['middle_name']." ".$emp['last_name']; ?>"><?php echo $emp['first_name']." ".$emp['middle_name']." ".$emp['last_name']; ?></option>
                                 <?php } ?>
                              </select>
                           </td>
                           <td class="search_dropdown" style="color: black; position: relative; top: 4px;">
                              <div id="datepicker-container">
                                 <input type="text" class="form-control daterangepicker-field getdate_reults" id="daterangepicker-field" name="daterangepicker-field" style="margin-top: 15px;padding: 5px; width: 200px; border-radius: 8px; height: 35px;" />
                              </div>
                           </td>
                           <input type="hidden" class="getcurrency" value="<?php echo $currency; ?>">
                           <td style='float: left;width:30px; position: relative; top: 4px;'>
                              <input type="submit"  name="btnSave" class="btn btnclr" style='margin-top: 15px;' value='Search'/>
                           </td>
                        </tr>
                     </table>
               </div>
               <!-- <div class='col-sm-2'> -->
               <div class="dropdown bootcol" id="drop">
               <button class="btnclr btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="position: relative; left: 185px;">
               <span class="fa fa-download"></span> <?php echo display('download') ?>
               </button>
               <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
               <li><a href="#" onclick="generate()"> <img src="<?php echo base_url() ?>assets/images/pdf.png" width="24px"> <?php echo display('PDF') ?></a></li>
               <li class="divider"></li>
               <li><a href="#" id="download"> <img src="<?php echo base_url() ?>assets/images/xls.png" width="24px"> <?php echo display('XLS') ?></a></li>
               </ul>
               &nbsp;  &nbsp;
               &nbsp;
               <button type="button" class="btnclr btn btn-default dropdown-toggle"  onclick="printDiv('printableArea')" style="margin-top: -54px; margin-left: 304px;float:left; position: relative; top: 54px;"><b class="ti-printer"></b>&nbsp;<?php echo display('print') ?></button>
               </div>
               <!-- </div> -->
            </div>
         </div>
      </div>
      <?php //echo form_close() ?>
      <!-- Manage Invoice report -->
      </form>
      <div class="row">
         <div class="col-sm-16 col-md-14">
            <div class="panel panel-bd lobidrag" id="printableArea">
             
                   <div class="row">
         <div class="col-sm-16 col-md-14">
           
          
<div id="tablesContainer" style='padding-left:20px;padding-right:20px;'>
 <div class="panel panel-bd lobidrag">
     <p style='font-weight:bold;text-align:center;font-size: xx-large;'><label >FEDERAL TAX</label></p>
      <table class="table table-bordered" cellspacing="0" width="100%" id="federal_summary">
                           <thead class="sortableTable">
                              <tr class="sortableTable__header btnclr">
                                 <th rowspan="2" class="1 value" data-col="1" style="height: 45.0114px; text-align:center; "> <?php echo 'S.NO'?> </th>
                                 <th rowspan="2" class="2 value" data-col="2" style="text-align:center; width: 250px;"> <?php echo 'Employee Name'?> </th>
                                 <th rowspan="2" class="3 value" data-col="3" style="text-align:center;width: 120px; "> <?php echo 'Employee Tax'?> </th>
                               
                                 <th colspan="2" class="4 value" data-col="4" style="text-align:center;width: 200px;"> <?php echo ('Federal Income Tax')?> </th>
                                 <th colspan="2" class="4 value" data-col="4" style="text-align:center;width: 200px;"> <?php echo ('Social Security Tax')?> </th>
                                 <th colspan="2" class="4 value" data-col="4" style="text-align:center;width: 200px;"> <?php echo ('Medicare Tax')?> </th>
                                 <th colspan="2" class="4 value" data-col="4" style="text-align:center;width: 200px;"> <?php echo ('Unemployment Tax')?> </th>
                              
                              </tr>
                              <tr class="btnclr" >
                                 <th class="4 value" data-col="4" style="text-align:center;width: 200px;"> <?php echo ('Employee Contribution')?> </th>
                                 <th class="4 value" data-col="4" style="text-align:center;width: 200px;"> <?php echo ('Employer Contribution')?> </th>
                                 <th class="4 value" data-col="4" style="text-align:center;width: 200px;"> <?php echo ('Employee Contribution')?> </th>
                                 <th class="4 value" data-col="4" style="text-align:center;width: 200px;"> <?php echo ('Employer Contribution')?> </th>
                                 <th class="4 value" data-col="4" style="text-align:center;width: 200px;"> <?php echo ('Employee Contribution')?> </th>
                                 <th class="4 value" data-col="4" style="text-align:center;width: 200px;"> <?php echo ('Employer Contribution')?> </th>
                                 <th class="4 value" data-col="4" style="text-align:center;width: 200px;"> <?php echo ('Employee Contribution')?> </th>
                                 <th class="4 value" data-col="4" style="text-align:center;width: 200px;"> <?php echo ('Employer Contribution')?> </th>
                              </tr>
                           </thead>
                           <tbody class="sortableTable__body" id="tab">
                              <?php
                                 $count=1;
                                 if(empty($tax)){  
                                  $i=0;
                                    foreach($fed_tax as $f_tax){    ?> 
                              <tr>
                                 <td> <?php echo $count; ?> </td>
                                 <td> <?php echo  $f_tax['first_name']." ".$f_tax['middle_name']." ".$f_tax['last_name']; ?> </td>
                                 <td> <?php echo  $f_tax['employee_tax']; ?> </td>
                                
                                 <td> <?php echo  round($f_tax['f_ftax_sum'],2); ?> </td>
                                 <td> <?php if($mergedArray[$i]['f_ftax_sum_er']){echo  round($mergedArray[$i]['f_ftax_sum_er'],2); }else{echo '0';}?> </td>
                                 <td> <?php echo  round($f_tax['s_stax_sum'],2); ?> </td>
                                 <td> <?php if($mergedArray[$i]['s_stax_sum_er']){echo  round($mergedArray[$i]['s_stax_sum_er'],2); }else{echo '0';}?> </td>
                                 <td> <?php echo  round($f_tax['m_mtax_sum'],2); ?> </td>
                                 <td> <?php if($mergedArray[$i]['m_mtax_sum_er']){echo  round($mergedArray[$i]['m_mtax_sum_er'],2); }else{echo '0';}?> </td>
                                 <td> <?php echo  round($f_tax['u_utax_sum'],2); ?> </td>
                                 <td> <?php if($mergedArray[$i]['u_utax_sum_er']){echo  round($mergedArray[$i]['u_utax_sum_er'],2); }else{echo '0';}?> </td>
                               
                              </tr>
                              <?php $count++;$i++; }}  ?> 
                           </tbody>
                           <tfoot>
                              <?php
                                 $employeeContributionTotal_f = 0;
                                 $employerContributionTotal_ff = 0;
                                   $i=0;
                                 foreach($fed_tax as $f_tax) {
                                     $employeeContributionTotal_f += $f_tax['f_ftax_sum'];
                                     $employerContributionTotal_ff += ($mergedArray[$i]['f_ftax_sum_er']) ? $mergedArray[$i]['f_ftax_sum_er'] : 0;
                                $i++; }
                                   $employeeContributionTotal_s = 0;
                                 $employerContributionTotal_ss = 0;
                                   $i=0;
                                 foreach($fed_tax as $f_tax) {
                                     $employeeContributionTotal_s += $f_tax['s_stax_sum'];
                                     $employerContributionTotal_ss += ($mergedArray[$i]['s_stax_sum_er']) ? $mergedArray[$i]['s_stax_sum_er'] : 0;
                                $i++; }
                                   $employeeContributionTotal_m = 0;
                                 $employerContributionTotal_mm = 0;
                                   $i=0;
                                 foreach($fed_tax as $f_tax) {
                                     $employeeContributionTotal_m += $f_tax['m_mtax_sum'];
                                     $employerContributionTotal_mm += ($mergedArray[$i]['m_mtax_sum_er']) ? $mergedArray[$i]['m_mtax_sum_er'] : 0;
                                $i++; }
                                   $employeeContributionTotal_u = 0;
                                 $employerContributionTotal_uu = 0;
                                   $i=0;
                                 foreach($fed_tax as $f_tax) {
                                     $employeeContributionTotal_u += $f_tax['u_utax_sum'];
                                     $employerContributionTotal_uu += ($mergedArray[$i]['u_utax_sum_er']) ? $mergedArray[$i]['u_utax_sum_er'] : 0;
                                $i++; }
                                 ?> 
                              <tr class="btnclr" >
                                   <td colspan="3" style="text-align:end;" >Total :</td>
                                 <td> <?php echo round($employeeContributionTotal_f,2); ?> </td>
                                 <td> <?php echo round($employerContributionTotal_ff,2); ?> </td>
                                 <td> <?php echo round($employeeContributionTotal_s,2); ?> </td>
                                 <td> <?php echo round($employerContributionTotal_ss,2); ?> </td>
                                 <td> <?php echo round($employeeContributionTotal_m,2); ?> </td>
                                 <td> <?php echo round($employerContributionTotal_mm,2); ?> </td>
                                 <td> <?php echo round($employeeContributionTotal_u,2); ?> </td>
                                 <td> <?php echo round($employerContributionTotal_uu,2); ?> </td>
                               
                              </tr>
                           </tfoot>
                        </table>
  <p style='font-weight:bold;text-align:center;font-size: xx-large;'><label >WORKING STATE TAX </label></p>
    <table class="table table-bordered" cellspacing="0" width="100%" id="StateTaxTable">
        <thead></thead>
        <tbody></tbody>
        <tfoot></tfoot>
    </table>
    
    <p style='font-weight:bold;text-align:center;font-size: xx-large;'><label style='font-weight:bold;text-align:center;'>LIVING STATE TAX </label></p>
    <table class="table table-bordered" cellspacing="0" width="100%" id="LivingStateTaxTable">
        <thead></thead>
        <tbody></tbody>
        <tfoot></tfoot>
    </table>
</div>





</div>
               </div>
   </section>
 
 <input type="hidden" value="Sale/New Sale" id="url"/>
 
 <input type="hidden" value="Sale/New Sale" id="url"/>
   <script src="<?php echo base_url()?>assets/js/jquery.bootgrid.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.0.0-alpha.1/jspdf.plugin.autotable.js"></script>
   <!--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>-->
   <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.0/knockout-debug.js'></script>
   <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
   <!-- <script  src="<?php //echo base_url() ?>my-assets/js/script.js"></script>  -->
   <!--<script type="text/javascript" src="<?php echo base_url()?>my-assets/js/profarma.js"></script>-->
   <!-- <script  src="<?php //echo base_url() ?>my-assets/js/script.js"></script> -->
   <script src="<?php echo base_url()?>assets/js/jquery.bootgrid.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.0.0-alpha.1/jspdf.plugin.autotable.js"></script>
   <!--<script type="text/javascript" src="<?php echo base_url()?>my-assets/js/profarma.js"></script>-->
   
    <script src="https://cdn.jsdelivr.net/npm/table2excel@1.0.4/dist/table2excel.min.js"></script>
   <!-- The Modal Column Switch -->
   <div id="myModal_colSwitch" class="modal_colSwitch" >
   <div class="modal-content_colSwitch" style="width:10%;height:25%;">
   <span class="close_colSwitch">&times;</span>
   <input type="checkbox"  data-control-column="1" checked = "checked" class="1"  value="1"/>Sl.No<br>
   <input type="checkbox"  data-control-column="2" checked = "checked" class="2"  value="2"/>User Name<br>
   <input type="checkbox"  data-control-column="3" checked = "checked" class="3"   value="3"/> Total Invoice<br>
   <input type="checkbox"  data-control-column="4" checked = "checked" class="4"   value="4"/>Total Amount<br>
   </div>
   </div>
   </div>
   </div>
   </div>
</div>
<input type="hidden" id="total_invoice" value="<?php echo $total_invoice;?>" name="">
<input type="hidden" id="currency" value="{currency}" name="">


</section>
<input type ="hidden" name="csrf_test_name" id="csrf_test_name" value="<?php echo $this->security->get_csrf_hash();?>">
</div>
<!-- Manage Invoice End -->
<script type="text/javascript" src="<?php echo base_url()?>my-assets/js/profarma.js"></script>
<script>
$( function() {
    $('#tablesContainer').css('display','none');
      $( ".daterangepicker-field" ).daterangepicker({
        dateFormat: 'mm/dd/yy' // Setting the desired date format
      });
    });
    var csrfName = '<?php echo $this->security->get_csrf_token_name();?>';
    var csrfHash = '<?php echo $this->security->get_csrf_hash();?>';
    $(function() {
    var start = moment().startOf('isoWeek'); // Start of the current week
    var end = moment().endOf('isoWeek'); // End of the current week
    var startOfLastWeek = moment().subtract(1, 'week').startOf('week');
    var endOfLastWeek = moment().subtract(1, 'week').endOf('week').add(1, 'day');
    // Add one extra day
    function cb(start, end) {
    $('#daterangepicker-field').val(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
    }
    $('#daterangepicker-field').daterangepicker({
    startDate: start,
    endDate: end,
    ranges: {
       'Last Week Before': [moment().subtract(2,  'week').startOf('week') , moment().subtract(2, 'week').endOf('week')],
       'Last Week': [startOfLastWeek, endOfLastWeek],
       'This Week': [moment().startOf('week'), moment().endOf('week')],
       'This Month': [moment().startOf('month'), moment().endOf('month')],
       'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    }
    }, cb);
});


$(document).ready(function(){
   // $('#printableArea').hide();
   function removeDuplicates() {
    var selectElement = document.getElementById("customer-name-filter");
    var options = selectElement.options;
    var uniqueValues = [];

    // Iterate over each option
    for (var i = 0; i < options.length; i++) {
        var optionValue = options[i].value;
        
        // Check if the value is not already in the unique array
        if (uniqueValues.indexOf(optionValue) === -1) {
            uniqueValues.push(optionValue);
        }
    }

    // Clear the select element
    selectElement.innerHTML = '';

    // Append unique options back to the select element
    uniqueValues.forEach(function(value) {
        var option = document.createElement('option');
        option.value = value;
        option.textContent = value;
        selectElement.appendChild(option);
    });
}

// Call the function to remove duplicates
removeDuplicates(); 
});


$(document).ready(function () {
    $('#fetch_tax').submit(function (event) {
        event.preventDefault();
        var formData = $(this).serialize();

        $.ajax({
            type: "POST",
            dataType: "json",
            url: "<?php echo base_url('Chrm/state_tax_search_summary'); ?>",
            data: formData,
            success: function (response) {
                $('#tablesContainer').css('display','block');
                populateTables(response);
                federal_summary();
            },
            error: function (xhr, status, error) {
                console.error("Error:", xhr.responseText);
            }
        });
    });
});
function federal_summary(){
   
    
    var dataString = $("#fetch_tax").serialize();
    dataString[csrfName] = csrfHash; // Add CSRF tokens
    
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "<?php echo base_url('Chrm/social_taxsearch'); ?>",
        data: dataString,
        success: function(response) {
            console.log(response);
            
            var employeeData = response.aggregated_employe; // Employee data
            var employerData = response.aggregated_employer; // Employer data

            // Clear table body first
            var tbody = $("#federal_summary tbody").empty();

            // Display employee and employer contributions side by side for each tax type
            for (var i = 0; i < employeeData.length; i++) {
                var employee = employeeData[i];
                var employer = employerData[i] || {}; // Handle missing data gracefully
                
                var row = "<tr>";
                row += "<td style='text-align: center;'>" + (i + 1) + "</td>";
                row += "<td style='text-align: center;'>" + (employee['first_name'] || '') + " " +(employee['middle_name'] || '')+" "+ (employee['last_name'] || '') + "</td>";
                row += "<td style='text-align: center;'>" + (employee['employee_tax'] || '') + "</td>";
                row += "<td style='text-align: center;'>" + (employee['fftax'] ? parseFloat(employee['fftax']).toFixed(2) : '0.00') + "</td>";
                row += "<td style='text-align: center;'>" + (employer['fftax'] ? parseFloat(employer['fftax']).toFixed(2) : '0.00') + "</td>";
                row += "<td style='text-align: center;'>" + (employee['sstax'] ? parseFloat(employee['sstax']).toFixed(2) : '0.00') + "</td>";
                row += "<td style='text-align: center;'>" + (employer['sstax'] ? parseFloat(employer['sstax']).toFixed(2) : '0.00') + "</td>";
                row += "<td style='text-align: center;'>" + (employee['mmtax'] ? parseFloat(employee['mmtax']).toFixed(2) : '0.00') + "</td>";
                row += "<td style='text-align: center;'>" + (employer['mmtax'] ? parseFloat(employer['mmtax']).toFixed(2) : '0.00') + "</td>";
                row += "<td style='text-align: center;'>" + (employee['uutax'] ? parseFloat(employee['uutax']).toFixed(2) : '0.00') + "</td>";
                row += "<td style='text-align: center;'>" + (employer['uutax'] ? parseFloat(employer['uutax']).toFixed(2) : '0.00') + "</td>";
                row += "</tr>";
                tbody.append(row);
            }

            // Display totals
            var totalEmployeeContribution = {
                'FederalIncomeTax': 0,
                'SocialSecurityTax': 0,
                'MedicareTax': 0,
                'UnemploymentTax': 0
            };
            var totalEmployerContribution = {
                'FederalIncomeTax': 0,
                'SocialSecurityTax': 0,
                'MedicareTax': 0,
                'UnemploymentTax': 0
            };

            // Calculate totals
            for (var i = 0; i < employeeData.length; i++) {
                var employee = employeeData[i];
                var employer = employerData[i] || {}; // Handle missing data gracefully
                totalEmployeeContribution['FederalIncomeTax'] += parseFloat(employee['f_ftax']) || 0;
                totalEmployeeContribution['SocialSecurityTax'] += parseFloat(employee['s_stax']) || 0;
                totalEmployeeContribution['MedicareTax'] += parseFloat(employee['m_mtax']) || 0;
                totalEmployeeContribution['UnemploymentTax'] += parseFloat(employee['u_utax']) || 0;

                totalEmployerContribution['FederalIncomeTax'] += parseFloat(employer['fftax']) || 0;
                totalEmployerContribution['SocialSecurityTax'] += parseFloat(employer['sstax']) || 0;
                totalEmployerContribution['MedicareTax'] += parseFloat(employer['mmtax']) || 0;
                totalEmployerContribution['UnemploymentTax'] += parseFloat(employer['uutax']) || 0;
            }

            var tfoot = $("#federal_summary tfoot").empty();
            // Append total row
            var totalRow = "<tr class='btnclr'>";
            totalRow += "<td style='text-align:end;' colspan='3'>Total </td>";
            totalRow += "<td>" + totalEmployeeContribution['FederalIncomeTax'].toFixed(2) + "</td>";
            totalRow += "<td>" + totalEmployerContribution['FederalIncomeTax'].toFixed(2) + "</td>";
            totalRow += "<td>" + totalEmployeeContribution['SocialSecurityTax'].toFixed(2) + "</td>";
            totalRow += "<td>" + totalEmployerContribution['SocialSecurityTax'].toFixed(2) + "</td>";
            totalRow += "<td>" + totalEmployeeContribution['MedicareTax'].toFixed(2) + "</td>";
            totalRow += "<td>" + totalEmployerContribution['MedicareTax'].toFixed(2) + "</td>";
            totalRow += "<td>" + totalEmployeeContribution['UnemploymentTax'].toFixed(2) + "</td>";
            totalRow += "<td>" + totalEmployerContribution['UnemploymentTax'].toFixed(2) + "</td>";
            totalRow += "</tr>";
            tfoot.append(totalRow);
        },
        error: function(xhr, status, error) {
            console.error("Error:", error);
            // Handle the error or display a message to the user
        }
    });
}
function populateTables(response) {
    // Assuming you have jQuery objects for the tables
    var stateTaxTable = $("#StateTaxTable");
    var livingStateTaxTable = $("#LivingStateTaxTable");

    // Populate the State Tax Table
    var stateTaxData = {
        state_tax: response.employer_contribution.state_tax.concat(response.employee_contribution.state_tax)
    };
    populateTable(stateTaxTable, stateTaxData, "STATE TAX");

    // Populate the Living State Tax Table
    var livingStateTaxData = {
        living_state_tax: response.employer_contribution.living_state_tax.concat(response.employee_contribution.living_state_tax)
    };
    populateTable(livingStateTaxTable, livingStateTaxData, "LIVING STATE TAX");
}

function populateTable(table, data, taxTypeLabel) {
    if (!table || !table.find) {
        console.error('Table parameter is not a jQuery object');
        return;
    }

    // Clear existing content
    table.find("thead, tbody, tfoot").empty();

    // Create table headers dynamically
    var taxHeaders = "<tr class='btnclr'><th rowspan='2' style='border-bottom:none;text-align:center'>S.No</th><th rowspan='2' style='border-bottom:none;text-align:center'>Employee Name</th>";

    // Create headers for tax types
    var taxTypeMap = {}; // Initialize or update this as needed
    var taxTypeKeys = Object.keys(data);
    taxTypeKeys.forEach(function (taxType) {
        var taxes = data[taxType].map(item => item.tax.trim() + (item.code ? "-" + item.code.trim() : ""));
        taxes.forEach(function (taxKey) {
            if (!taxTypeMap[taxType]) taxTypeMap[taxType] = [];
            if (!taxTypeMap[taxType].includes(taxKey)) taxTypeMap[taxType].push(taxKey);
        });
    });

    Object.keys(taxTypeMap).forEach(function (taxType) {
        var taxes = taxTypeMap[taxType];
        taxHeaders += "<th colspan='" + (2 * taxes.length) + "' style='text-align:center'>" + taxTypeLabel + "</th>";
    });

    taxHeaders += "</tr><tr class='btnclr'>";

    // Tax names and codes
    Object.keys(taxTypeMap).forEach(function (taxType) {
        var taxes = taxTypeMap[taxType];
        taxes.forEach(function (taxKey) {
            var taxName = taxKey.split('-')[0];
            var code = taxKey.split('-')[1];
            taxHeaders += "<th colspan='2' style='text-align:center'>" + taxName + (code ? "-" + code : "") + "</th>";
        });
    });

    taxHeaders += "</tr><tr class='btnclr'><th></th><th></th>";

    // Employee and Employer Contribution headers
    Object.keys(taxTypeMap).forEach(function (taxType) {
        var taxes = taxTypeMap[taxType];
        taxes.forEach(function () {
            taxHeaders += "<th style='text-align:center'>Employee Contribution</th><th style='text-align:center'>Employer Contribution</th>";
        });
    });

    taxHeaders += "</tr>";
    table.find("thead").append(taxHeaders);

    // Consolidate contributions by employee and tax
    var consolidatedContributions = {};
    Object.keys(data).forEach(function (taxType) {
        data[taxType].forEach(function (item) {
            var employeeName = item.employee_name;
            var taxKey = item.tax.trim() + (item.code ? "-" + item.code.trim() : "");
            if (!consolidatedContributions[employeeName]) {
                consolidatedContributions[employeeName] = {};
            }
            if (!consolidatedContributions[employeeName][taxKey]) {
                consolidatedContributions[employeeName][taxKey] = { employee: "0.000", employer: "0.000" };
            }
            if (taxType === 'state_tax' || taxType === 'living_state_tax') {
                consolidatedContributions[employeeName][taxKey].employer = parseFloat(item.total_amount || 0).toFixed(3) || "0.000";
            } else {
                consolidatedContributions[employeeName][taxKey].employee = parseFloat(item.total_amount || 0).toFixed(3) || "0.000";
            }
        });
    });

    // Populate rows for each employee with S.No
    var tbody = table.find("tbody");
    var serialNumber = 1;
    Object.keys(consolidatedContributions).forEach(function (employeeName) {
        var contributions = consolidatedContributions[employeeName];
        var row = $("<tr>");
        row.append("<td>" + serialNumber++ + "</td>");  // Add serial number column
        row.append("<td>" + employeeName + "</td>");

        Object.keys(taxTypeMap).forEach(function (taxType) {
            var taxes = taxTypeMap[taxType];
            taxes.forEach(function (taxKey) {
                var taxData = contributions[taxKey] || { employee: "0.000", employer: "0.000" };
                row.append("<td>$" + taxData.employee + "</td>");
                row.append("<td>$" + taxData.employer + "</td>");
            });
        });

        tbody.append(row);
    });

    // Populate footer with total contributions
    var tfoot = table.find("tfoot");
    var footerRow = $("<tr class='btnclr'>").append("<td>Total</td><td></td>");
    
    Object.keys(taxTypeMap).forEach(function (taxType) {
        var taxes = taxTypeMap[taxType];
        taxes.forEach(function (taxKey) {
            var totalEmployeeContribution = 0;
            var totalEmployerContribution = 0;
            Object.keys(consolidatedContributions).forEach(function (employeeName) {
                var contribution = consolidatedContributions[employeeName][taxKey];
                if (contribution) {
                    totalEmployeeContribution += parseFloat(contribution.employee || 0);
                    totalEmployerContribution += parseFloat(contribution.employer || 0);
                }
            });
            footerRow.append("<td>$" + totalEmployeeContribution.toFixed(3) + "</td>");
            footerRow.append("<td>$" + totalEmployerContribution.toFixed(3) + "</td>");
        });
    });
    tfoot.append(footerRow);
}



// document.getElementById("btn").addEventListener("click", () => {
//   let table2excel = new Table2Excel();
//   table2excel.export(document.querySelector("#ProfarmaInvList"));
// });


function generateExcel(el) {
    var clon = el.clone();
    var html = clon.wrap('<div>').parent().html();

    //add more symbols if needed...
    while (html.indexOf('á') != -1) html = html.replace(/á/g, '&aacute;');
    while (html.indexOf('é') != -1) html = html.replace(/é/g, '&eacute;');
    while (html.indexOf('í') != -1) html = html.replace(/í/g, '&iacute;');
    while (html.indexOf('ó') != -1) html = html.replace(/ó/g, '&oacute;');
    while (html.indexOf('ú') != -1) html = html.replace(/ú/g, '&uacute;');
    while (html.indexOf('º') != -1) html = html.replace(/º/g, '&ordm;');
    html = html.replace(/<td>/g, "<td>&nbsp;");

    window.open('data:application/vnd.ms-excel,' + encodeURIComponent(html));
}
$("#download").click(function (event) {
 	generateExcel($("#ProfarmaInvList"));
});

    
      </script>

   
</script>
<style>
th,td{
    text-align:center;
}
   .select2{display:none;}
   #pagesControllers{
   padding:20px;
   }
   .dropdown-menu{
    left: 229px !important;
   }
   .dropdown{
    position: relative;
    left: 1193px !important;
    bottom: 68px !important;
   }
</style>