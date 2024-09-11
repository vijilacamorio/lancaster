<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commercial Invoice</title>
    <style>
        @page { 
            margin: 0px 10px; /* Adjust margins to accommodate header and footer */
        }
        body { 
            font-family: Arial, sans-serif; 
            margin-top: 120px;
            padding: 0;
        }
        header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    height: 90px;
    text-align: center;
    line-height: 20px;
    font-size: 18px;
    background-color: #fff;
    border-bottom: 1px solid #ccc;
    z-index: 1000;
    padding-top: 20px;
    width: 100%;
    box-sizing: border-box;
}
footer { position: fixed; left: 0px; right: 0px; height: 80px;text-align: center; line-height: 20px; font-size: 12px;}
.pagebreak { page-break-after: always; }
.pagebreak:last-child { page-break-after: never; }
        .header-table { 
            margin-top: 100px; /* Ensure content starts below the header */
            font-size: 11px !important; 
 
        }
        table { 
            font-size: 11px ; 
            border-collapse: collapse; 
            width: 95%; 
            margin-bottom: 15px;
            margin-left:20px
        }
        .mainTable th, .mainTable td { 
            border: 1px solid black; 
            padding: 10px; 
            text-align: left; 
            margin-top:50px;
        }
        .invoice-summary th, .invoice-summary td { 
            text-align: center; 
            border: 1px solid darkgray; 
            height:27px;
        }
        .brand-section { 
            margin-top: 20px; 
        }
        .brand-section img { 
            max-width: 100%; 
            height: auto; 
        }
        .company-info, .bill-to { 
            margin-bottom: 15px; 
        }
        .company-info b, .bill-to b { 
            display: block; 
            margin-bottom: 3px; 
        }
        .content {
            page-break-inside: avoid; /* Prevent page breaks inside the content */
            padding-bottom: 5px; /* Ensure content does not overlap footer */
        }
       

    </style>
</head>
<body>
 <?php 
$logoPath =   $logo  ;
if (file_exists($logoPath)) {
    $logo = base64_encode(file_get_contents($logoPath));
} else {
    $logo = '';
}
 
  $myArray = explode('(',$tax_details); 
  $tax_amt=$myArray[0];
  $tax_des=$myArray[1];
?>



    <header>
         <div class="brand-section">
            <div class="row" >
                <div class="col-sm-3" style="color:black;font-weight:bold;margin-right:670px;margin-left:15px;">
               <img src="data:image/png;base64,<?php echo htmlspecialchars($logo, ENT_QUOTES, 'UTF-8'); ?>" alt="Logo">
               </div>

               <div class="col-sm-2" style="color:black;font-weight:bold;margin-top:-85px">
                  <h3  style="text-align: center;font-weight:bold;" >Commerical Invoice</h3>
               </div>

              <div class="col-sm-6" style="text-align:left;margin-left:550px; margin-top:-80px; font-size:15px;" >
                  <b><?php echo display('Invoice Number') ?> :</b><?php  echo $all_invoice[0]['commercial_invoice_number'] ; ?> <br>
                  <b>  <?php echo ('Date') ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</b><?php  echo $invoice_detail[0]['date']  ; ?><br>
               </div>

            </div>
         </div>
      </header>  
      <footer>
      </footer>
   

    <div class="container-fluid">

        <div class="subpage" id="editor-container">
            <div class="brand-section content">
                <div class="row" >
            
                    <div class="col-sm-6"   style="color:black; font-size:12px;">
                        <div class="col-sm-8"  style="margin-left:25px;">
                        <b><span style="font-weight:bold;">Company Information</span><br> 
                        <b><span style="font-weight:bold;"><?php echo $company[0]['company_name']; ?></span><br>
                        <b><span style="font-weight:1;"><?php echo $company[0]['address']; ?><br>
                        <b><span style="font-weight:1;"><?php echo $company[0]['email']; ?><br>
                        <b><span style="font-weight:1;"><?php echo $company[0]['mobile']; ?><br>
                        </div>
                    </div>
                
                    <div class="col-sm-5" style="margin-left:550px;margin-top:-95px; font-size:12px;">
                        <b><span style="font-weight:bold;">Bill To</span><br> 
                        <b><span style="font-weight:bold;"><?php  echo $customer_id; ?></span><br> 
                        <span style="font-weight:1;"> <?php  echo $all_invoice[0]['billing_address'] ; ?><br>
                        <span style="font-weight:1;"> <?php  echo $all_invoice[0]['container_no'] ; ?><br>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <hr style="color:white; margin-top:10px">
    <table class="invoice-summary">
        <thead style="background-color: #424f5c; ">
            <tr>

                <th style="color:white;">Total Amount</th>
                <th style="color:white;" >Total Due</th>
                <th style="color:white;">Payment Terms</th>
            </tr>
        </thead>
        <tbody>
            <tr style="color: black;">
                <td><?php echo $currency . $all_invoice[0]['gtotal']; ?></td>
                <td><?php echo $currency . " " . $due_amount; ?></td>
                <td><?php echo $payment_type; ?></td>
            </tr>
        </tbody>
    </table>
    <div class="pagebreak">
                <table class="mainTable">
                    <thead style="background-color: #424f5c;">
                        <tr style="color:white;text-align:center;">
                            <th style="text-align:center;" >S.No</th>
                            <th style="text-align:center;" >Product Name</th>
                            <th style="text-align:center;" >Description</th>
                            <th style="text-align:center;" >Quantity / <?php echo $unit; ?></th>
                            <th style="text-align:center;" >Rate</th>
                            <th style="text-align:center;">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $n = 0; 
                        foreach ($all_invoice as $inv) { 
                            $n++;
                            echo '<tr style="color: black;">
                                    <td style="text-align:center;" >' . $n . '</td>
                                    <td style="text-align:center;">' . $inv['product_name'] . '</td>
                                    <td style="text-align:center;">' . $inv['description'] . '</td>
                                    <td style="text-align:center;">' . $inv['thickness'] . '</td>
                                    <td style="text-align:center;">' . $currency .$inv['supplier_slab_no'] . '</td>
                                    <td style="text-align:center;">' .$currency .$inv['total_price'] . '</td>
                                    </tr>';
                        
                        } 
                        ?>
                    </tbody>
                    <tfoot>
                        <tr style="color: black;">
                            <td colspan="5" style="text-align: right;"><b><?php  echo display('TOTAL'); ?> :</b></td>
                            <td style="text-align: center;">
                                <input type="text" name="total[]" value="<?php echo $currency . "" .  $total_amount; ?>" style="border: none;" readonly />
                            </td>
                        </tr>
                    </tfoot>
                </table>
                
                        <table style="margin-left:550px;font-size:11px;">
                        
                        <?php if ($company[0]['company_name'] == 'Lancaster Stones LLC'): ?>
                            <?php else: ?>
                                <tr>
                                    <td>
                                        <b><?php echo display('tax') . ' (' . $tax_des . ')'; ?>:</b>
                                        <?php echo $currency . $tax_amt; ?>
                                    </td>
                                </tr>
                            <?php endif; ?>

  
                             <?php if (!empty($landing_cost)) { ?>
                                <tr>
                                <td><b>Additional Cost &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b> <?php echo $currency . "" .  $landing_cost; ?></td>
                                </tr>
                              <?php }  ?>
                            <tr>
                             <td><b><?php echo display('GRAND TOTAL'); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b> <?php echo $currency . $all_invoice[0]['gtotal']; ?></td>
                            </tr>
                            <tr>
                             <td><b><?php echo display('Amount Paid'); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b> <?php echo $currency . " " . $paid_amount; ?></td>
                            </tr>
                        </table>
                        <br>
                        <?php  if($all_invoice[0]['ac_details']!=''){ ?>
                        <table style="margin-left:20px;font-size:11px;">
                        <tr>
                        <b><?php echo display('Account Details/Additional Information'); ?>:</b><br>
                        </tr>
                        <?php
                            $ac_details = $all_invoice[0]['ac_details'];
                            $ac_details = trim($ac_details, ' ,');
                            $details_array = explode(',', $ac_details);
                            $details_array = array_map('trim', $details_array);
                            foreach($details_array as $accval){
                                echo '<tr><td>'.$accval.'</td></tr>';
                            }
                            echo '</table>';
                        }
                        if($all_invoice[0]['remark'] !=""){
                            ?>
                            <table style="margin-left:20px;font-size:11px;">
                        <?php
                         $remark = $all_invoice[0]['remark'];
                            $remark = trim($remark, ' ,');
                            $remarks_array = explode(',', $remark);
                            $remarks_array = array_map('trim', $remarks_array);
                            foreach($remarks_array as $remkey=>$remval){
                                if($remkey =='0'){
                                    echo '<tr><td><b>Remarks/Conditions</b></td></tr>';
                                }
                                echo '<tr><td>'.$remval.'</td></tr>';
                            }
                        }
                       ?>
                    </div>

</body>
</html>
