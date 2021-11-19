<?php
  $urlPaypal = 'https://www.sandbox.paypal.com/cgi-bin/webscr';  
  $emailOfPaypal = 'sb-oqrvm6092273@business.example.com';
?>
<div class="loginContent">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 offset-md-2">           
        <div class="shadow-lg p-3 mb-3 bg-white rounded">
          <div class="row justify-content-center">
            <div class="col-md-12 col-lg-6 loginRight">
              <div class="loginHeader">
                <p>Your Bill Details</p>
                <hr>
              </div>
              <form action="<?php echo $urlPaypal ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <?php $dataOfDwBill= $dwBillTbl->funcSelect('dwBill_id', $_GET['payingId'])->fetch(); 
                    ?>
                    <input type="hidden" name="dwBill_id" value="<?php if(isset($dataOfDwBill['dwBill_id']))echo $dataOfDwBill['dwBill_id']; ?>" />

                    <label>Consumer Id</label>
                    <select id = "dconsumer_id" name="dconsumer_id" class="form-control floating select2" required="" disabled="disabled">
                      <option value="" selected disabled style="display:none">Select Consumer Id</option>
                      <?php
                        $cusStmt = $dwConsumerTbl->funcAllSelect();
                        foreach($cusStmt as $cusRow){
                          echo '<option value="'.$cusRow['dconsumer_id'].'"';
                          if ($dataOfDwBill['dconsumer_id']== $cusRow['dconsumer_id']){
                            echo 'selected';
                          }
                            echo'>';
                            echo $cusRow['fullName'].' - '.$cusRow['consumer_id'];
                            echo '</option>';
                          }
                      ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Consumed Unit</label>
                    <input type="number" id="consumed_unit" name="consumed_unit" class="form-control" required value="<?php if(isset($dataOfDwBill['consumed_unit']))echo $dataOfDwBill['consumed_unit']; ?>" readonly>
                  </div>

                  <div class="form-group">
                    <label>Payable Amount</label>
                    <input type="number" id="bill_amt" name="bill_amt" class="form-control" required = "" value="<?php if(isset($dataOfDwBill['bill_amt']))echo $dataOfDwBill['bill_amt']; ?>" readonly>
                  </div>

                  <input type="hidden" name="business" value="<?php echo $emailOfPaypal; ?>">
                  <input type="hidden" name="item_name" value="BillPay">
                  <input type="hidden" name="bill_id" value="<?php if(isset($dataOfDwBill['bill_amt']))echo $dataOfDwBill['dwBill_id']; ?>">
                  <input type="hidden" name="amount" value="<?php if(isset($dataOfDwBill['bill_amt']))echo $dataOfDwBill['bill_amt']; ?>">
                  <input type="hidden" name="currency_code" value="USD">  

                  <input type='hidden' name='cancel_return' value="<?php if(isset($dataOfDwBill['dwBill_id'])) echo 'http://localhost/dissertation/public/public_html/customer/dwPayment&payingId='.$dataOfDwBill['dwBill_id'].'&cancel'; ?>">
                  <input type='hidden' name='return' value="<?php if(isset($dataOfDwBill['dwBill_id'])) echo 'http://localhost/dissertation/public/public_html/customer/dwPayDone?dwbill_id='.$dataOfDwBill['dwBill_id'];?>">

                  <input type="hidden" name="cmd" value="_xclick">
                  
                  <div class="form-group">
                    <button id="submit" name="ePay" class="btn btn-block btn-info">Pay With PayPal</button>
                    <a href="eSearch" class="btn btn-block btn-secondary">Cancel</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>