<div class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1>Add New Drinking Water Bill</h1>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <form action="addDelDwBill" method="POST" enctype="multipart/form-data">
            <div class="card-body">
              
              <div class="form-group">
                <label>Consumer Id</label>
                <select id = "dconsumer_id" name="dconsumer_id" class="form-control floating select2" required="">
                  <option value="" selected disabled style="display:none">Select Consumer Id</option>
                  <?php
                    $cusStmt = $dwConsumerTbl->funcAllSelect();
                    foreach($cusStmt as $cusRow)
                      echo '<option value="'.$cusRow['dconsumer_id'].'">'.$cusRow['fullName'].' - '.$cusRow['consumer_id'].'</option>';
                                            
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
                <input type="date" id="reading_date" name="reading_date" class="form-control" required >
              </div>

              <div class="form-group">
                <label>Due Date</label>
                <input type="date" id="due_date" name="due_date" class="form-control" required >
              </div>

              <div class="form-group">
                <label>Consumed Unit</label>
                <input type="number" id="consumed_unit" name="consumed_unit" class="form-control" required >
              </div>

              <div class="form-group">
                <label>Bill Amount</label>
                <input type="number" id="bill_amt" name="bill_amt" class="form-control">
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