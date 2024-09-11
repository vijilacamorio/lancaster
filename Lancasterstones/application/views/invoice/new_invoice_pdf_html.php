<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .invoice-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .invoice-table {
            width: 100%;
            border-collapse: collapse;
        }
        .invoice-table th, .invoice-table td {
/*            border: 1px solid #ddd;*/
            padding: 8px;
        }
        .textdirleft{
            text-align: left;
        }
        .textdirright{
            text-align: right;
        }
        .right-image {
            max-width: 100px; 
            height: auto;
        }
        
       /* .invoice-table th {
            background-color: #f4f4f4;
        }*/
    </style>
</head>
<body>
    <div class="invoice-header">
         <img src="<?php echo  base_url().$logo; ?>"   style='width:10%; float:left;' />
     </div>

     <div class="invoice-header">
         <img src="<?php echo  base_url().$logo; ?>"   style='width:10%; float:left;' />
     </div>
     
    <div class="brand-section">
      <div class="row" >

 
         <?php if(empty($header)){ ?>
         <div class="col-sm-3 text-center" style="color:black;">
            <h3><?php echo "SALE INVOICE"; ?></h3>
         </div>
         <?php } 
            else
            {  ?>
                 <h3 style="text-align: center;color:black;" ><?php echo $header; ?></h3>

         <?php } ?>




         <div class="col-sm-4"><img src="<?php //echo  base_url().$logo; ?>"        style='width:30%; float:right;'       /></div>
         <div class="col-sm-5" style="color:black;font-weight:bold;" id='company_info'>
            <b><?php echo display('Company name') ?> : </b><?php echo $company[0]['company_name']; ?><br>
            <b>  <?php echo display('Address ') ?>: </b><?php echo $company[0]['address']; ?><br>
            <b> <?php echo display('Email ') ?>: </b><?php echo $company[0]['email']; ?><br>
            <b>  <?php echo display('Contact ') ?>: </b><?php echo $company[0]['mobile']; ?><br>
         </div>
      </div>
   </div>



    <table class="invoice-table">
        <thead>
            <tr>
                <th class="textdirleft"><?php echo display('Invoice Number') ?></th>
                <th class="textdirleft">:</th>
                <td class="text-left"><?php  echo $all_invoice[0]['commercial_invoice_number'] ; ?></td>
                <th class="textdirright"><?php echo display('Customer Name') ?></th>
                <th class="textdirleft">:</th>
                <td class="text-right"><?php echo $customer_name; ?></td>
            </tr>
            <tr>
                <th class="textdirleft"><?php echo display('B/L No') ?></th>
                <th class="textdirleft">:</th>
                <td class="text-left"><?php  echo $all_invoice[0]['bl_no'] ; ?></td>
                <th class="textdirright"><?php echo display('Payment Due date') ?></th>
                <th class="textdirleft">:</th>
                <td class="text-right"><?php  echo $all_invoice[0]['payment_due_date'] ; ?></td>
            </tr>
            <tr>
                <th class="textdirleft"><?php echo display('ETA') ?></th>
                <th class="textdirleft">:</th>
                <td class="text-left"><?php echo $all_invoice[0]['eta'] ; ?></td>
                <th class="textdirright"><?php echo display('Port of Discharge') ?></th>
                <th class="textdirleft">:</th>
                <td class="text-right"><?php  echo $invoice_detail[0]['Port_of_discharge']  ; ?></td>
            </tr>
            <tr>
                <th class="textdirleft">Account Category</th>
                <th class="textdirleft">:</th>
                <td class="text-left"><?php echo $all_invoice[0]['account_category'] ; ?></td>
                <th class="textdirright">Account Sub Category</th>
                <th class="textdirleft">:</th>
                <td class="text-right"><?php  echo $invoice_detail[0]['sub_category']  ; ?></td>
            </tr>
            <tr>
                <th class="textdirleft">Account Sub Category</th>
                <th class="textdirleft">:</th>
                <td class="text-left"><?php echo $all_invoice[0]['account_subcat'] ; ?></td>
                <th class="textdirright"><?php echo display('Sales Invoice date') ?></th>
                <th class="textdirleft">:</th>
                <td class="text-right"><?php  echo $invoice_detail[0]['date']  ; ?></td>
            </tr>

            <tr>
                <th class="textdirleft"><?php echo display('Container Number') ?></th>
                <th class="textdirleft">:</th>
                <td class="text-left"><?php echo $container_no; ?></td>
                <th class="textdirright"><?php echo display('Payment Terms') ?></th>
                <th class="textdirleft">:</th>
                <td class="text-right"><?php  echo $payment_terms; ?></td>
            </tr>

            <tr>
                <th class="textdirleft"><?php echo display('ETD') ?></th>
                <th class="textdirleft">:</th>
                <td class="text-left"><?php  echo $all_invoice[0]['etd'] ; ?></td>
                <th class="textdirright"><?php echo display('Payment Type') ?></th>
                <th class="textdirleft">:</th>
                <td class="text-right"><?php  echo $paytype ; ?></td>
            </tr>


            <!-- <tr>
                <th class="textdirleft"><?php echo display('Billing Address') ?></th>
                <th class="textdirleft">:</th>
                <td class="text-left"><?php  echo $all_invoice[0]['billing_address'] ; ?></td>
               <th class="textdirright"><?php echo display('Shipping Address') ?></th>
               <th class="textdirleft">:</th>
               <td class="text-right"><?php  echo $all_invoice[0]['shipping_address']; ?></td>
            </tr> -->

        </thead>
    </table>


    <table class="table table-bordered normalinvoice table-hover" id="normalinvoice_<?php  echo $m; ?>" >
         <thead style="background-color:<?php echo '#' .$color; ?>">
            <tr class="avoid-page-break">
               <th rowspan="1"  class="text-center text-white" style="font-size:10px;" >S.No</th>
               <th rowspan="1" class="absorbing-column text-center text-white;" style="font-size:10px; " >Product Name</th>
               <th rowspan="1" class="text-center text-white" style="font-size:10px; " >Description</th>
               <th rowspan="1" class="text-center text-white" style="font-size:10px; " >Thickness</th>
               <th rowspan="1" class="text-center text-white" style="font-size:10px; ">Bundle No</th>
               <th rowspan="1" class="text-center text-white" style="font-size:10px;">Slab No</th>
               <th colspan="2" class="text-center text-white" style="font-size:10px; ">Net Measure<br/>Width&#9474;Height</th>
               <th rowspan="1" class="text-center text-white" style="font-size:10px; ">Net Sq. Ft</th>
               <th rowspan="1"  class="text-center text-white" style="font-size:10px; ">Sales Price per Sq. Ft</th>
                <th rowspan="1"  class="text-center text-white" style="font-size:10px; ">Total</th>
            </tr>
         </thead>
         <tbody id="addPurchaseItem_<?php echo $m;  ?>">
            <?php  $n=0; ?>
            <?php foreach($all_invoice as $inv){
               $a = substr($inv['tableid'], 0, 1);
               if($a==$m){ ?>
               <tr  class="avoid-page-break">
               <td style="font-size: 9px;"><?php echo $n+1; ?></td>
               <td style="font-size: 9px;word-wrap: break-word;"><?php  echo $inv['product_name'];  ?></td>
               <td style="font-size: 9px;word-wrap: break-word;"><?php  echo $inv['description'];  ?></td>
               <td style="font-size: 9px;"><?php  echo $inv['thickness'];  ?></td>
               <td style="font-size: 9px;"><?php  echo $inv['bundle_no'];  ?></td>
               <td style="font-size: 9px;"><?php echo $n+1; ?></td>
               <td style="font-size: 9px;" class="net_width"><?php  echo $inv['n_width'];  ?></td>
               <td style="font-size: 9px;" class="net_height"><?php  echo $inv['n_height'];  ?></td>
               <td style="font-size: 9px;" class="net_sq_ft"> <?php  echo $inv['net_sqft'];  ?></td>
               <td style="font-size: 9px;"><?php  echo $currency; ?><?php  echo $inv['sales_price_sqft'];  ?></td>
               <td style="font-size: 9px;"><?php  echo $currency; ?><?php  echo $inv['sales_slab_price'];  ?></td>
               <td style="text-align:start;" > <span style="font-size: 9px;"><?php  echo $currency; ?> <span class="total_price"><?php  echo  $inv['total_price'];  ?></span></span></td>
            </tr>
            <?php $n++;   } }  ?>
         </tbody>
         <tfoot>
            <tr class="avoid-page-break" >
               <td style="text-align:right;font-size: 9px;" colspan="8"><b><?php echo display('Net Sq.Ft') ?> :</b></td>
               <td >
                  <input type="text" id="overall_net_<?php echo $m; ?>" name="overall_net[]"  class="overall_net"  style="width: 60px;font-size: 9px;"   readonly="readonly"  /> 
               </td>
               <td style="text-align:right;font-size: 8px;" colspan="2"><b><?php echo display('TOTAL') ?> :</b></td>
               <td style="text-align:start;font-size: 8px;">
                  <input type="text" id="Total_<?php echo $m; ?>" name="total[]"   class="b_total"   style="padding-top: 6px;width: 50px;font-size: 9px;"    readonly="readonly"  />
               </td>
            </tr>
         </tfoot>
      </table>


      <table border="0" class="overall table table-hover">
         <tr class="avoid-page-break">
            <td  colspan="2" style="vertical-align:top;text-align:right;border:none;"><b><?php  echo display('Overall TOTAL');?> :</b></td>
            <td colspan="1" style="border:none;"><?php  echo $currency ; ?><?php echo $all_invoice[0]['total_amount']; ?> </td>
            <td style="text-align:right;border:none;" colspan="5"><b><?php echo  display('tax')." (".$tax_des;  ?></b>:</td>
            <td style='border:none;'><?php  echo $currency; ?><?php echo $tax_amt;  ?></td>
         </tr>
         <tr class="avoid-page-break">
            <td  colspan="2" style="vertical-align:top;text-align:right;border:none;"><b><?php  echo display('Overall Gross Sq.Ft');?> :</b></td>
            <td colspan="1" style="border:none;"><?php echo  $invoice_detail[0]['total_gross'];  ?></td>
            <td colspan="5" style="text-align:right;border:none;"><b><?php  echo display('GRAND TOTAL');?> :</b></td>
            <td colspan="1" style="border:none;"><?php  echo $currency ; ?><?php  echo $all_invoice[0]['gtotal'];    ?></td>
         </tr>
         <tr class="avoid-page-break">
            <td  colspan="2" style="vertical-align:top;text-align:right;border:none;"><b>Overall Net Sq.Ft :</b></td>
            <td colspan="1" style="border:none;"><?php echo  $invoice_detail[0]['total_net'];  ?>   </td>
            <td colspan="5" style="text-align:right;border:none;"><b><?php  echo display('GRAND TOTAL');?> :</b><br/><b><?php  echo display('Preferred Currency');?></b></td>
            <td colspan="1" style="border:none;">
               <table>
                  <tr class="avoid-page-break">
                     <td class="cus" name="cus" style="border:none;"></td>
                     <td style="border:none;text-align:left;"> <?php echo $customer_currency." ".$all_invoice[0]['gtotal_preferred_currency'] ;?></td>
                  </tr>
               </table>
            </td>
         </tr>
         <tr class="avoid-page-break">
            <td colspan="2"  style="vertical-align:top;text-align:right;border:none;"><b><?php  echo display('Overall Weight');?> :</b></td>
            <td colspan="1" style="border:none;"><?php echo  $invoice_detail[0]['total_weight'];  ?> </td>
            <td colspan="5" class="amt" style="text-align:right;border:none;"><b><?php  echo display('Amount Paid');?> :</b></td>
            <td style="border:none;">
               <table border="0">
                  <tr class="amt avoid-page-break" >
                     <td class="cus" name="cus" style="text-align:left;"></td>
                     <td>  <?php echo $customer_currency." ".$paid_amount ;?></td>
                  </tr>
               </table>
            </td>
         </tr>
         <tr class="avoid-page-break">
            <td colspan="2"  style="vertical-align:top;text-align:right;border:none;"></td>
            <td colspan="1" style="border:none;"></td>
            <td class="amt" colspan="5"  style="vertical-align:top;text-align:right;border:none;"><b><?php echo display('balance_ammount');  ?> :</b></td>
            <td class="amt" style="border:none;" colspan="1">
               <table border="0">
                  <tr class="amt avoid-page-break">
                     <td class="cus" name="cus" style="border:none;"></td>
                     <td style="border:none;">
                        <?php echo $supplier_currency." ".$purchase_detail[0]['due_amount'];  ?>     
                     <td style='border:none;'>
                        <?php echo $customer_currency." ".$due_amount;?>
                     </td>
                  </tr>
               </table>
      </table>

 
</body>
</html>
