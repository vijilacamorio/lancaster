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
         <div class="panel-heading" style="height: 60px;border: 3px solid #d7d4d6;">
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
                        </table>
                     </div>
                  </div>
   </section>
   </div> 
<input type ="hidden" name="csrf_test_name" id="csrf_test_name" value="<?php echo $this->security->get_csrf_hash();?>">

<script type="text/javascript" src="<?php echo base_url()?>my-assets/js/profarma.js"></script>


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
               "url": "<?php echo base_url('Cinvoice/getInvoiceData'); ?>",
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
                     "data": "commercial_invoice_number"
               },
               {
                     "data": "container_no"
               },
               {
                     "data": "customer_id"
               },
               {
                     "data": "date"
               },
               {
                     "data": "gtotal"
               },
			   {
                     "data": "total_amount"
               },
			   {
                     "data": "payment_type"
               },
			    {
                     "data": "invoice_id"
               },
			    {
                     "data": "billing_address"
               },
			   {
                     "data": "total_tax"
               },
			   {
                     "data": "paid_amount"
               },
               {
                     "data": "due_amount"
               },
               {
                     "data": "remark"
               },
               {
                     "data": "ac_details"
               },
               {
                     "data": "button"
               },
              
            ],
            "columnDefs": [{
               "orderable": false,
               "targets": [0, 15],
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