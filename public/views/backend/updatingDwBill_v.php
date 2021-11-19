<div class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1>Update Drinking Water Bill</h1>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="card card-primary">
          <form action="updatingDwBill" method="post" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <?php 
                  $dataOfDwBill= $dwBillTbl->funcSelect('dwBill_id', $_GET['updateId'])->fetch(); 
                ?>
                <input type="hidden" name="dwBill_id" value="<?php if(isset($dataOfDwBill['dwBill_id']))echo $dataOfDwBill['dwBill_id']; ?>" />

                <label>Consumer Id</label>
                <select id = "dconsumer_id" name="dconsumer_id" class="form-control floating select2" required="">
                  <option value="" selected disabled style="display:none">Select Consumer Id</option>
                  <?php
                    $cusStmt = $dwConsumerTbl->funcAllSelect();
                    foreach($cusStmt as $cusRow){
                      echo '<option value="'.$cusRow['dconsumer_id'].'"';
                      if ($dataOfDwBill['dconsumer_id']== $cusRow['dconsumer_id']){
                        echo 'selected';}
                        echo'>';
                        echo $cusRow['fullName'].' - '.$cusRow['consumer_id'];
                        echo '</option>';
                      }
                          
                  ?>
                </select>
             
                <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
                <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
                <script>
                    $('.select2').select2();
                </script>
              </div>

              <div class="form-group">
                <label>Meter Reading Date</label>
                <input type="date" id="reading_date" name="reading_date" class="form-control" required value="<?php if(isset($dataOfDwBill['reading_date']))echo $dataOfDwBill['reading_date']; ?>">
              </div>

              <div class="form-group">
                <label>Due Date</label>
                <input type="date" id="due_date" name="due_date" class="form-control" required value="<?php if(isset($dataOfDwBill['due_date']))echo $dataOfDwBill['due_date']; ?>">
              </div>

              <div class="form-group">
                <label>Consumed Unit</label>
                <input type="number" id="consumed_unit" name="consumed_unit" class="form-control" required value="<?php if(isset($dataOfDwBill['consumed_unit']))echo $dataOfDwBill['consumed_unit']; ?>">
              </div>

              <div class="form-group">
                <label>Bill Amount</label>
                <input type="number" id="bill_amt" name="bill_amt" class="form-control" value="<?php if(isset($dataOfDwBill['bill_amt']))echo $dataOfDwBill['bill_amt']; ?>">
              </div>

              <div class="card-footer">
                <button class="btn btn-primary" type="submit" name="save_btn">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
