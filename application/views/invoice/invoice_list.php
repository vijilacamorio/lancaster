<?php error_reporting(1);  ?>


<script src="<?php echo base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>my-assets/css/css.css" />

<style>
   .table{
   /*display: block;*/
   overflow-x: auto;
   }
   .btnclr{
   background-color:<?php echo $setting_detail[0]['button_color']; ?>;
   color: white;
   }
   .Row {
   display: table;
   width: 100%; /*Optional*/
   table-layout: fixed; /*Optional*/
   border-spacing: 5px; /*Optional*/
   }
   .Column {
   display: table-cell;
   }
   th {
   padding: 10px !important;
   }
   .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
   vertical-align: middle;
   }
   .search_dropdown{
   background:center;
   }
   /*th{*/
   /*color:black;*/
   /*}*/
   .select2{
   display:none;
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
         <img src="<?php echo base_url()  ?>asset/images/sales.png"  class="headshotphoto" style="height:50px;" />
      </div>
      <div class="header-title">
         <div class="logo-holder logo-9">
            <h1>  <?php echo display('manage_invoice') ?></h1>
         </div>
         <small><?php echo ""; ?></small>
         <ol class="breadcrumb"   style=" border: 3px solid #d7d4d6;"   >
            <li><a href="<?php echo base_url(); ?>"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
            <li><a href="<?php echo base_url(); ?>"><?php echo display('invoice') ?></a></li>
            <li class="active" style="color:orange;"><?php echo display('manage_invoice') ?></li>
            <div class="load-wrapp">
               <div class="load-10">
                  <div class="bar"></div>
               </div>
            </div>
         </ol>
      </div>
   </section>
   <section class="content">
      
      <div class="panel panel-bd lobidrag" >
         <div class="panel-heading" style="height: 60px;    border: 3px solid #d7d4d6;">
            <div class="col-sm-12 mob_topview" style="height:69px;">
               <div class="col-sm-4" style="display: flex; justify-content: space-between; align-items: left;">
                  <?php foreach($this->session->userdata('perm_data') as $test) {
                     $split = explode('-', $test);
                     if (trim($split[0]) == 'sales' && $_SESSION['u_type'] == 3 && trim($split[1]) == '1000') {
                         ?>
                  <a href="<?php echo base_url('Cinvoice') ?>" class="btnclr btn btn-default dropdown-toggle boxes filip-horizontal mobile_para"   style="height:fit-content;"  ><i class="far fa-file-alt"> </i> <?php echo display('Create Sale') ?> </a>
                  <?php break;
                     }
                     }
                     if ($_SESSION['u_type'] == 2) { ?>
                  <a href="<?php echo base_url('Cinvoice') ?>" class="btnclr btn btn-default dropdown-toggle boxes filip-horizontal mobile_para"   style="height:fit-content;"  ><i class="far fa-file-alt"> </i> <?php echo display('Create Sale') ?> </a>
                  <?php } ?>
                  &nbsp;&nbsp;
                  <a  class="btnclr btn btn-default dropdown-toggle  boxes filip-horizontal  mobile_para"  style="height:fit-content;"  id="s_icon"><b class="fa fa-search"></b>&nbsp;Advance search  </a>
                  &nbsp;&nbsp;
                  
               </div>
               
         </div>
      </div>
      <!-- Manage Invoice report -->
      <div class="row">
         <div class="col-sm-12"  >
            <div class="panel panel-bd lobidrag"     style="border: 3px solid #d7d4d6;">
               
               <div class="panel-body" style="padding-top: 0px;">
                  <div class="sortableTable__container">
                     <div class="sortableTable__discard">
                     </div>
                     <div id="customers">
                        <table class="table table-bordered" cellspacing="0" width="100%" id="tblInvoice">
                           <thead class="sortableTable">
                              <tr  class="sortableTable__header btnclr">
                                 <th width="3%"><?php echo display('ID') ?></th>
                                 <th width="7%"> <?php echo display('Invoice No')?></th>
                                 <th width="7%">Phone No</th>
                                <th width="7%"><?php echo display('Customer Name')?></th>
                                 <th width="7%"><?php echo display('Sales Invoice date')?></th>
                                 <th width="7%"><?php echo display('Grand Total')?></th>
                                 <th width="7%"><?php echo display('Total Amount')?></th>
                                 <th width="7%"><?php echo display('Payment Type')?></th>
                                 <th width="6%"><?php echo display('Invoice ID')?></th>
                                 <th width="7%"><?php echo display('Billing Address')?></th>
                                 <th width="6%"><?php echo display('Tax Details')?></th>
                                 <th width="6%"><?php echo display('Amount Paid')?></th>
                                 <th width="6%"><?php echo display('Balance Amount')?></th>
                                 <th width="6%"><?php echo display('Remarks/Conditions')?></th>
                                 <th width="6%"><?php echo display('Account Details')?></th>
                                 <th width="7%"><?php echo display('Action')?></th>
                              </tr>
                           </thead>
                           
                           
                           
                           
                           
                           
                           <tbody class="sortableTable__body" id="tab">
                              <?php
                                 $count=1;
                                  if(count($sale['rows'])>0){
                                 foreach($sale['rows'] as $k=>$arr){
                                      ?>
                              <tr style="text-align:center" class="task-list-row" data-task-id="<?php echo $count; ?>" data-pname="<?php echo $arr['commercial_invoice_number'];  ?>" data-model="<?php echo $arr['container_no']; ?>" data-category="<?php echo $arr['customer_id']; ?>" data-unit="<?php echo $arr['date'] ?>" data-supplier="<?php echo $arr['payment_terms'];  ?>">
                                 <td data-col="1" class="1" style="text-align:center;" ><?php  echo $count;  ?></td>
                                 <td data-col="2" class="2" style="text-align:center;"><?php   echo $arr['commercial_invoice_number'];  ?></td>
                                 <td data-col="3" class="3" style="text-align:center;" ><?php   echo $arr['container_no'];  ?></td>
                                 
                                                                  <td data-col="15" class="15" style="text-align:center;     text-wrap: nowrap;"><?php   echo $arr['customer_id'];  ?></td>

                                 
                                 <td data-col="4" class="4" style="text-align:center;" ><?php   echo $arr['date'];  ?></td>
                                 <td data-col="7" class="7" style="text-align:center;"><?php  echo $currency; ?><?php   echo $arr['gtotal'];  ?></td>
                                 <td data-col="10" class="10" style="text-align:center;"><?php  echo $currency; ?><?php   echo $arr['gtotal'];  ?></td>
                                 <td data-col="13" class="13" style="text-align:center;"><?php   echo $arr['payment_type'];  ?></td>
                                 <td data-col="14" class="14" style="text-align:center;"><?php   echo $arr['invoice_id'];  ?></td>
                                 <td data-col="17" class="17 ads" style="text-align:center;"><?php   echo $arr['billing_address'];  ?></td>
                                 <td data-col="19" class="19 ads" style="text-align:center;"><?php  echo $currency; ?><?php   echo $arr['total_tax'];  ?></td>
                                 <td data-col="21" class="21" style="text-align:center;"><?php  echo $currency; ?><?php   echo $arr['paid_amount'];  ?></td>
                                 <td data-col="22" class="22" style="text-align:center;"><?php  echo $currency; ?><?php   echo $arr['due_amount'];  ?></td>
                                 <td data-col="23" class="23 ads" style="text-align:center;"><?php   echo $arr['remark'];  ?></td>
                                 <td data-col="24" class="24 ads" style="text-align:center;"><?php   echo $arr['ac_details'];  ?></td>
                                 <td data-col="25" class="25" style="text-align:center;">
                                    <div class="form-group">
                                       <a class="btnclr btn  btn-sm"  href="<?php echo base_url()?>Cinvoice/invoice_inserted_data/<?php echo  $arr['invoice_id'];  ?>"><i class="fa fa-download" aria-hidden="true"></i></a>
                                       <?php    foreach(  $this->session->userdata('perm_data') as $test){
                                          $split=explode('-',$test);
                                          if(trim($split[0])=='sales' && $_SESSION['u_type'] ==3 && trim($split[1])=='0010'){
                                            
                                            
                                             ?>
                                       <a class="btnclr btn  btn-sm invoice_edit"    href="<?php echo base_url()?>Cinvoice/invoice_update_form/<?php echo  $arr['invoice_id'];  ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                       <?php break;}} 
                                          if($_SESSION['u_type'] ==2){ ?>
                                       <a class="btnclr btn  btn-sm invoice_edit"    href="<?php echo base_url()?>Cinvoice/invoice_update_form/<?php echo  $arr['invoice_id'];  ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                       <?php  } ?>
                                       <a class="btnclr btn  btn-sm getinvoice_id"    data-toggle="modal" data-target="#emailmodal" onclick="mail(<?php echo  $arr['invoice_id'];  ?>,'invoice','invoice_id')"><i class="fa fa-envelope" aria-hidden="true" ></i></a>
                                       <?php    foreach(  $this->session->userdata('perm_data') as $test){
                                          $split=explode('-',$test);
                                          if(trim($split[0])=='sales' && $_SESSION['u_type'] ==3 && trim($split[1])=='0001'){
                                            
                                            
                                             ?>
                                       <a class="btnclr btn  btn-sm" onclick="return confirm('<?php echo display('are_you_sure') ?>')"   href="<?php echo base_url(); ?>Cinvoice/sale_invoice_delete/<?php echo $arr["invoice_id"]."/".$arr["commercial_invoice_number"]; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                       <?php break;}} 
                                          if($_SESSION['u_type'] ==2){ ?>
                                       <a class="btnclr btn  btn-sm" onclick="return confirm('<?php echo display('are_you_sure') ?>')"   href="<?php echo base_url(); ?>Cinvoice/sale_invoice_delete/<?php echo $arr["invoice_id"]."/".$arr["commercial_invoice_number"]; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                       <?php  } ?>
                                 </td>
                                 </div>
                              </tr>
                              <?php   
                                 $count++;
                                 
                                      
                                               
                                                 
                                 } }  else{
                                     ?>
                              <tr>
                                 <td colspan="17" style="text-align:center;font-weight:bold;"><?php  echo "No Records Found"  ;?></td>
                              </tr>
                              <?php
                                 }
                                 
                                 ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
   </section>
 

   <!-- The Modal Column Switch -->
   <div id="myModal_colSwitch"  name="mysalesName"      class="modal_colSwitch" >
   <div class="modal-content_colSwitch" style="width:45%;height:35%;">
   <span class="close_colSwitch">&times;</span>
   <div class="col-sm-2"></div>
   <div class="col-sm-4"><br><br>
   <div class="form-group row">
   <input type="checkbox" data-control-column="1" class="1" value="1" />&nbsp; <span style="position: relative; "><?php echo display('ID') ?></span><br><br>
   <input type="checkbox"  data-control-column="3"   class="3"   value="3"/>&nbsp;<span style="position: relative; "><?php echo  ('Phone No')?></span><br><br>
   <input type="checkbox"  data-control-column="7"   class="7"      value="7"/>&nbsp;<span style="position: relative; "><?php echo display('Grand Total')?></span><br><br>
  
     <input type="checkbox"  data-control-column="13"  class="13"   value="13"/>&nbsp;<span style="position: relative; "><?php echo display('Payment type')?></span><br><br>

     <input type="checkbox"  data-control-column="14"  class="14"   value="14"/>&nbsp;<span style="position: relative; "><?php echo display('Invoice ID')?></span><br><br>

  
  
   </div>  
   </div>
   <div class="col-sm-3"><br><br>
   <div class="form-group row">
   <!--<input type="checkbox"  data-control-column="10"  class="10"     value="10"/>&nbsp;<span style="position: relative; top: 4px;"><?php echo display('Total Amount')?></span><br><br>-->
   <input type="checkbox"  data-control-column="17"  class="17"   value="17"/>&nbsp;<span style="position: relative; "><?php echo display('Billing Address')?></span><br><br>
   <input type="checkbox"  data-control-column="19"  class="19" value="19"/>&nbsp;<span style="position: relative; "><?php echo display('Tax Details')?></span><br><br>
   <input type="checkbox"  data-control-column="22"  class="22" value="22"/>&nbsp;<span style="position: relative; "><?php echo display('Balance Amount')?></span><br><br>
   
   
         <input type="checkbox"  data-control-column="23"  class="23" value="23"/>&nbsp;<span style="position: relative;"><?php echo display('Remarks/Conditions')?></span><br><br>

    
   <input type="checkbox"  data-control-column="24"  class="24" value="24"/>&nbsp;<span style="position: relative;"><?php echo display('Account Details')?></span><br>

 
   </div>
   </div>
   </div>
   </div>
   </section>
   </div> 
   </div>
   </div>
   </div>
</div>
</div>
</div>
</div>
<input type="hidden" id="total_invoice" value="<?php echo $total_invoice;?>" name="">
<input type="hidden" id="currency" value="{currency}" name="">
<input type="hidden" id="base_url" value="<?php  echo base_url();  ?>">
</div>
</div>
</section>
<input type ="hidden" name="csrf_test_name" id="csrf_test_name" value="<?php echo $this->security->get_csrf_hash();?>">
</div>
<!-- Manage Invoice End -->
<script type="text/javascript" src="<?php echo base_url()?>my-assets/js/profarma.js"></script>
<script>
   $(document).on('keyup', '#filterinput', function(){
    
      var value = $(this).val().toLowerCase();
      var filter=$("#filterby").val();
      $("#ProfarmaInvList tr:not(:eq(0))").filter(function() {
          $(this).toggle($(this).find("td."+filter).text().toLowerCase().indexOf(value) > -1)
      });
   });
</script>
<script>
   function reload(){
       location.reload();
   }
       var csrfName = '<?php echo $this->security->get_csrf_token_name();?>';
   var csrfHash = '<?php echo $this->security->get_csrf_hash();?>';
   $editor = $('#submit'),
     $editor.on('click', function(e) {
       if (this.checkValidity && !this.checkValidity()) return;
       e.preventDefault();
       var yourArray = [];
       //loop through all checkboxes which is checked
       $('.modal-content_colSwitch input[type=checkbox]:not(:checked)').each(function() {
         yourArray.push($(this).val());//push value in array
       });
      
       values = {
       
         extralist_text: yourArray
       
       };
       console.log(values)
       var json=values;
       var data = {
           page:$('#url').val(),
             content: yourArray
          
          };
          data[csrfName] = csrfHash;
   $.ajax({
       
       type: "POST",  
       url:'<?php echo base_url();?>Cinvoice/setting',
      
       data: data,
       dataType: "json", 
       success: function(data) {
           if(data) {
              console.log(data);
           }
       }  
   });
     });
   
     $( document ).ready(function() {
      
      var page=$('#url').val();
      page=page.split('/');
       var data = {
           'menu':page[0],
           'submenu':page[1]
            
          
          };
         
          data[csrfName] = csrfHash;
       $.ajax({
       
       type: "POST",  
       url:'<?php echo base_url();?>Cinvoice/get_setting',
      
       data: data,
       dataType: "json", 
       success: function(data) {
        var menu=data.menu;
        var submenu=data.submenu;
        if(menu=='Sale' && submenu=='New Sale'){
        var s=data.setting;
   s=JSON.parse(s);
   console.log(s);
   for (var i = 0; i < s.length; i++) {
       console.log(s[i]);
       $('td.'+s[i]).hide(); // hide the column header th
       $('th.'+s[i]).hide();
   $('tr').each(function(){
        $(this).find('td:eq('+$('td.'+s[i]).index()+')').hide();
   });
       }
       for (var i = 0; i < s.length; i++) {
           if( $('.'+s[i]))
     $('.'+s[i]).prop('checked', false); //check the box from the array, note: you need to add a class to your checkbox group to only select the checkboxes, right now it selects all input elements that have the values in the array 
       }  
   }
       }
   });
   
   
   });
   
   
   
   
   
   
   
   
   
   
   
   $(document).ready(function() {
    //   $('#emailmodal').modal('show');
    
       var localStorageName = "mysalesName"; // Set your desired localStorage name
   
      $("input:checkbox").each(function() {
          var columnValue = $(this).attr("value");
          var columnSelector = ".table ." + columnValue;
        //   var isChecked = localStorage.getItem(columnSelector) === "true";
          
                    var isChecked = localStorage.getItem(localStorageName  + columnSelector) === "true";
   
          
          // Check if the checkbox is checked or the stored state is true
          if (isChecked || $(this).prop("checked")) {
              $(columnSelector).show(); // Show the column
          } else {
              $(columnSelector).hide(); // Hide the column
          }
          $(this).prop("checked", isChecked);
      });
      // When a checkbox is clicked, update localStorage and toggle column visibility
      $("input:checkbox").click(function() {
          var columnValue = $(this).attr("value");
          var columnSelector = ".table ." + columnValue; // Corrected class name construction
          var isChecked = $(this).is(":checked");
        //   localStorage.setItem(columnSelector, isChecked); // Store checkbox state in localStorage
          
                    localStorage.setItem(localStorageName + columnSelector, isChecked); // Store checkbox state in localStorage
   
          
          // Toggle column visibility based on the checkbox state
          if (isChecked) {
              $(columnSelector).show(); // Show the column
          } else {
              $(columnSelector).hide(); // Hide the column
          }
      });
   });
   
   
   
   
   
   
   
   
   
   ///************** */
   
   
   $("#search").on("keyup", function() {
   var value = $(this).val().toLowerCase();
    $("#ProfarmaInvList tr:not(:eq(0))").filter(function() {
   
    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
   });
   });
   
   var
   filters = {
    user: null,
    status: null,
    milestone: null,
    priority: null,
    tags: null
   };
   
   function updateFilters() {
   $('.task-list-row').hide().filter(function() {
    var
      self = $(this),
      result = true; // not guilty until proven guilty
    
    Object.keys(filters).forEach(function (filter) {
      if (filters[filter] && (filters[filter] != 'None') && (filters[filter] != 'Any')) {
        result = result && filters[filter] == self.data(filter);
      
      }
    });
   
    return result;
   }).show();
   }
   
   function changeFilter(filterName) {
   filters[filterName] = this.value;
   updateFilters();
   }
      
    // Assigned User Dropdown Filter
    $('#pname-filter').on('change', function() {
        // alert('hi');
      changeFilter.call(this, 'pname');
    });
    
    // Task Status Dropdown Filter
    $('#model-filter').on('change', function() {
      changeFilter.call(this, 'model');
    });
    
    // Task Milestone Dropdown Filter
    $('#category-filter').on('change', function() {
      changeFilter.call(this, 'category');
    });
    
    // Task Priority Dropdown Filter
    $('#unit-filter').on('change', function() {
      changeFilter.call(this, 'unit');
    });
    
    // Task Tags Dropdown Filter
    $('#supplier-filter').on('change', function() {
      changeFilter.call(this, 'supplier');
    });
   
   
   function search() {
   var input_pname,
    input_model,
    input_category,
    input_unit,
    input_supplier,
   
    filter_pname,filter_model,filter_category,filter_unit,filter_supplier,
    table,
    tr,
    td,
    i,
   
   input_pname = document.getElementById("myInput1");
   input_model = document.getElementById("myInput2");
   input_category = document.getElementById("myInput3");
   input_unit = document.getElementById("myInput4");
   input_supplier = document.getElementById("myInput5");
   
   filter_pname = input_pname.value.toUpperCase();    
   filter_model = input_model.value.toUpperCase();
   filter_category = input_category.value.toUpperCase();    
   filter_unit = input_unit.value.toUpperCase();
   filter_supplier = input_supplier.value.toUpperCase();
   
   
   
   table = document.getElementById("ProfarmaInvList");
   tr = table.getElementsByTagName("tr");
   for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    td1 = tr[i].getElementsByTagName("td")[2];
    td2 = tr[i].getElementsByTagName("td")[14];
    td3 = tr[i].getElementsByTagName("td")[3];
    td4 = tr[i].getElementsByTagName("td")[11];
   
    if (td && td1 && td2 && td3 && td4) {
      input_pname = (td.textContent || td.innerText).toUpperCase();
      input_model = (td1.textContent || td1.innerText).toUpperCase();
      input_category = (td2.textContent || td2.innerText).toUpperCase();
      input_unit = (td3.textContent || td3.innerText).toUpperCase();
      input_supplier = (td4.textContent || td4.innerText).toUpperCase();
      if (
        input_pname.indexOf(filter_pname) > -1 &&
        input_model.indexOf(filter_model) > -1 &&
        input_category.indexOf(filter_category) > -1 &&
        input_unit.indexOf(filter_unit) > -1 &&
        input_supplier.indexOf(filter_supplier) > -1
      ) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
   }
   }
   
   
   
     $(document).ready(function(){
    $('#search_area').hide();
   });
   $('#s_icon').click(function(){
       $('#search_area').toggle();
   });
   
       
</script>
<script type="text/javascript">
   var csrfName = $('.txt_csrfname').attr('name'); 
    var csrfHash = $('.txt_csrfname').val();
    var base_url=$('#base_url').val();
    $('.getinvoice_id').on('click', function() {
   
        var rowinvoiceId = $(this).closest('tr').find('#rowinvoice_id').val();
        var pathname = window.location.pathname;
        var str = pathname.substring(pathname.lastIndexOf("/")+1);
        // alert(str)
        $('#url_id').val(str); 
       $.ajax({
           url:"<?php echo base_url(); ?>Cinvoice/Get_attachments",
           type: 'POST',
           dataType: 'json',
           data: {[csrfName]: csrfHash,rowinvoiceId:rowinvoiceId,str:str},
           success: function(data){
   
           $('#attach').html("");
            for(var i = 0; i < data.length; i++) {
               console.log(data[i]['files']);
               if(data[i]['files']){
                  $('#attach').append('<input type="hidden" value="'+str+'" id="test"/><input type="hidden" name="files[]" class="upload" id="attachment" style="visibility: hidden; position: absolute;" multiple/> <a href='+base_url+'uploads/'+encodeURI(data[i]["files"])+' class="file-block" target=_blank><span class="file-delete"><span><i class="fa fa-trash-o"></i></span></span>'+encodeURI(data[i]["files"])+'</a>');
               }else{
   
                  $('#attach').html("No attachment Found");
               }
   
   
            }
   
           }
       });
        
    });
   
   
    $(document).ready(function(){
   $('#daterangepicker-field').val(<?php  echo $start;  ?>);
   
   });
   
    
        
        
        $(document).ready(function() {
    // Function to store the visibility state of rows in localStorage
    function storeVisibilityState() {
        var visibilityStates = {};
        $("#ProfarmaInvList tr").each(function(index, element) {
            var row = $(element);
            var rowID = index;
            var isVisible = row.is(':visible');
            visibilityStates[rowID] = isVisible;
        });
        // Store the visibility states in localStorage
        localStorage.setItem("visibilityStates", JSON.stringify(visibilityStates));
    }
   
    // Apply the stored visibility state on page load
    function applyVisibilityState() {
        var storedVisibilityStates = JSON.parse(localStorage.getItem("visibilityStates")) || {};
        $("#ProfarmaInvList tr").each(function(index, element) {
            var row = $(element);
            var rowID = index;
            if (storedVisibilityStates.hasOwnProperty(rowID) && !storedVisibilityStates[rowID]) {
                row.hide();
            } else {
                row.show();
            }
        });
    }
   
    // Event listener for row clicks to toggle row visibility
    $(".invoice_edit").on('click', function() {
        var row = $(this);
        storeVisibilityState(); // Store the updated visibility state
    });
   
    // Event listener for submitting edited data
    $(".final_submit").on('submit', function(event) {
        event.preventDefault();
        var editedData = $("#editedData").val();
        // Store the edited data in localStorage
        localStorage.setItem("editedData", editedData);
    });
   
    // Display the stored edited data
    function displayEditedData() {
        var editedData = localStorage.getItem("editedData");
        if (editedData) {
            $("#displayEditedData").text(editedData);
        }
    }
   
    applyVisibilityState(); // Apply the stored visibility state on page load
    displayEditedData(); // Display the stored edited data on page load
   });
   
        
        
        
        
        
        function removeItemFromLocalStorage() {
         
          const keyToRemove = 'visibilityStates';
        
          // Check if the item exists in localStorage
          if (localStorage.getItem(keyToRemove)) {
            // Remove the item from localStorage
            localStorage.removeItem(keyToRemove);
            console.log("Item removed from localStorage");
          } else {
            console.log("Item not found in localStorage");
          }
        }
        
        // Add a click event listener to the button
        const removeButton = document.getElementById('removeButton');
        removeButton.addEventListener('click', removeItemFromLocalStorage);
    
   
</script>
<style>
   #numrows{
   width: 75px !important;
   }
   /* pagecontroller pagecontroller-n */
   .pagecontroller {
   margin: 5px;
   }
   /* .filip-horizontal:hover{
   background-color: crimson;
   transition: all 1s;
   -webkit-transform: rotateY(-360deg);
   -ms-transform: rotateY(-360deg);
   transform: rotateY(-360deg);
   } */
   .ads{
   max-width: 0px !important;
   white-space: nowrap;
   overflow: hidden;
   text-overflow: ellipsis;
   }
   @media (max-width:1024px){
   #insert_sale{
   display: flex !important;
   justify-content: flex-end !important;
   }
   .mob_topview{
   position: relative;
   right: 33px;
   }
   #removeButton{
   position: absolute;
   left: 145px;
   }
   .fa.fa-gear::before {
   position: absolute;
   left: 111px;
   }
   .mobile_daterangepicker{
   position: relative;
   right: 36px;
   }
   .mob_search{
   position: absolute;
   left: 108px;
   font-size: 11px;
   }
   .mobile_para{
   font-size: 11px !important; 
   }
   }
</style>
<script>
      var supplierDataTable;
   $(document).ready(function() {
      
         if ($.fn.DataTable.isDataTable('#tblInvoice')) {
            $('#tblInvoice').DataTable().clear().destroy();
         }
         var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
         var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
         supplierDataTable = $('#tblInvoice').DataTable({
            "processing": true,
            "serverSide": true,
            "lengthMenu": [
               [10, 25, 50, 100],
               [10, 25, 50, 100]
            ],
            "ajax": {
               "url": "<?php echo base_url('Cinvoice/getInvoiceData?id='); ?>",
               "type": "POST",
               "data": function(d) {
                     d['<?php echo $this->security->get_csrf_token_name(); ?>'] =
                        '<?php echo $this->security->get_csrf_hash(); ?>';
               },
               "dataSrc": function(json) {
                  csrfHash = json[
                        '<?php echo $this->security->get_csrf_token_name(); ?>'];
                     return json.data;
               }
            },
            "columns": [{
                     "data": "sl"
               },
               {
                     "data": "supplier_name"
               },
               {
                     "data": "address"
               },
               {
                     "data": "mobile"
               },
               {
                     "data": "businessphone"
               },
               {
                     "data": "primaryemail"
               },
			   {
                     "data": "city"
               },
			   {
                     "data": "state"
               },
			    {
                     "data": "country"
               },
			    {
                     "data": "credit_limit"
               },
			   {
                     "data": "previous_balance"
               },
			   {
                     "data": "vendor_type"
               },
               {
                     "data": "secondaryemail"
               },
               {
                     "data": "contactperson"
               },
               {
                     "data": "fax"
               },
               {
                     "data": "taxcollected"
               },
               {
                     "data": "zip"
               },
               {
                     "data": "details"
               },
               {
                     "data": "currency_type"
               },
               {
                     "data": "paymentterms"
               },
               {
                     "data": "button"
               },
            ],
            "columnDefs": [{
               "orderable": false,
               "targets": [0, 13],
               searchBuilder: {
                     defaultCondition: '='
               },
               "initComplete": function() {
                     this.api().columns().every(function() {
                        var column = this;
                        var select = $(
                                 '<select><option value=""></option></select>'
                           )
                           .appendTo($(column.footer()).empty())
                           .on('change', function() {
                                 var val = $.fn.dataTable.util
                                    .escapeRegex(
                                       $(this).val()
                                    );
                                 column.search(val ? '^' + val + '$' :
                                    '', true, false).draw();
                           });
                        column.data().unique().sort().each(function(d, j) {
                           select.append('<option value="' + d +
                                 '">' + d + '</option>')
                        });
                     });
               },
            }],
            "pageLength": 10,
            "colReorder": true,
            "stateSave": true,
            "stateSaveCallback": function(settings, data) {
               localStorage.setItem('customer', JSON.stringify(data));
            },
            "stateLoadCallback": function(settings) {
               var savedState = localStorage.getItem('customer');
               return savedState ? JSON.parse(savedState) : null;
            },
            "dom": "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>" +
               "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-6'i><'col-sm-6'p>>",
            "buttons": [{
                     "extend": "copy",
                     "className": "btn-sm",
                     "exportOptions": {
                        "columns": ':visible'
                     }
               },
               {
                     "extend": "csv",
                     "title": "Report",
                     "className": "btn-sm",
                     "exportOptions": {
                        "columns": ':visible'
                     }
               },
               {
                     "extend": "pdf",
                     "title": "Report",
                     "className": "btn-sm",
                     "exportOptions": {
                        "columns": ':visible'
                     }
               },
               {
                     "extend": "print",
                     "className": "btn-sm",
                     "exportOptions": {
                        "columns": ':visible'
                     },
                     "customize": function(win) {
                        $(win.document.body)
                           .css('font-size', '10pt')
                           .prepend(
                                 '<div style="text-align:center;"><h3>Manage company</h3></div>'
                           )
                           .append(
                                 '<div style="text-align:center;"><h4>amoriotech.com</h4></div>'
                           );
                        $(win.document.body).find('table')
                           .addClass('compact')
                           .css('font-size', 'inherit');
                        var rows = $(win.document.body).find('table tbody tr');
                        rows.each(function() {
                           if ($(this).find('td').length === 0) {
                                 $(this).remove();
                           }
                        });
                        $(win.document.body).find('div:last-child')
                           .css('page-break-after', 'auto');
                        $(win.document.body)
                           .css('margin', '0')
                           .css('padding', '0');
                     }
               },
               {
                     "extend": "colvis",
                     "className": "btn-sm"
               }
            ]
         });
   });
   function deleteSupplier(id){
      var csrfName = '<?php echo $this->security->get_csrf_token_name();?>';
      var csrfHash = '<?php echo $this->security->get_csrf_hash();?>';
      var succalert = '<div class="alert alert-success alert-dismissible" role="alert">';
      var failalert = '<div class="alert alert-danger alert-dismissible" role="alert">';
      if(id !=""){
         $.ajax({
            type:"POST",
            dataType:"json",
            url:"<?php echo base_url(); ?>Csupplier/supplier_delete",
            data:{id:id,<?php echo $this->security->get_csrf_token_name();?>:csrfHash},
            success:function (response) {
               if(response.status =='success'){
                     $('.error_display').html(succalert+response.msg+'</div>');
                     window.setTimeout(function(){
                        supplierDataTable.ajax.reload(null, false);
                        $('.error_display').html('');
                     },2500);
               }else{
                     $('.error_display').html(failalert+response.msg+'</div>'); 
               }
            }
         });
      }
   }
</script>