<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col">
        <h1>Update Electricity Consumers</h1>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="card card-primary">
          <?php 
            $dataOfEC = $eConsumerTbl->funcSelect('econsumer_id', $_GET['updateId'])->fetch(); 
          ?>
          <form action="updateEConsumer" method="post" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <input type="hidden" name="econsumer_id" value="<?php if(isset($dataOfEC['econsumer_id'])) echo $dataOfEC['econsumer_id']; ?>" />

                <label>Full Name</label>
                <input type="text" id="fullName" name="fullName" class="form-control" required = "" value="<?php if(isset($dataOfEC['fullName'])) echo $dataOfEC['fullName']; ?>" >
              </div>

              <div class="form-group">
                <label>Email Address</label>
                <input type="text" id="email" name="email" class="form-control" required = "" value="<?php if(isset($dataOfEC['email'])) echo $dataOfEC['email']; ?>">
              </div>

              <div class="form-group">
                <label>Contact Number</label>
                <input id="contactNum" type="text" class="form-control" name="contactNum" required="" value="<?php if(isset($dataOfEC['contactNum'])) echo $dataOfEC['contactNum']; ?>">
              </div>

              <div class="form-group">
                <label>Counter Name</label>
                <select id = "c_id" name="c_id" class="form-control floating select2" required="">
                  <option value="" selected disabled style="display:none">Select counter</option>
                  <?php
                    $counterStmt = $counterTbl->funcAllSelect();
                    foreach($counterStmt as $counterRow){
                      echo '<option value="'.$counterRow['c_id'].'"';
                      if ($dataOfEC['c_id']== $counterRow['c_id']){
                        echo 'selected';
                      }
                      echo'>';
                      echo $counterRow['name'];
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
                <label>SC No.</label>
                <input id="sc_no" type="text" placeholder="SC No." class="form-control" name="sc_no" value="<?php if(isset($dataOfEC['sc_no'])) echo $dataOfEC['sc_no']; ?>" required>
              </div>

              <div class="form-group">
                <label>Consumer Id</label>
                <input id="consumer_id" type="number" placeholder="Consumer Id" class="form-control" name="consumer_id" value="<?php if(isset($dataOfEC['consumer_id']))  echo $dataOfEC['consumer_id']; ?>" required >
              </div>
            </div>
              
            <div class="card-footer">
              <button class="btn btn-primary" type="submit" name="save_btn">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>    