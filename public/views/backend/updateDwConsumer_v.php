<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col">
        <h1>Update Drinking Water Consumers</h1>
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
            $dataOfDwC = $dwConsumerTbl->funcSelect('dconsumer_id', $_GET['updateId'])->fetch(); 
          ?>
          <form action="updateDwConsumer" method="POST" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <input type="hidden" name="dconsumer_id" value="<?php if(isset($dataOfDwC['dconsumer_id'])) echo $dataOfDwC['dconsumer_id']; ?>" />

                <label>Full Name</label>
                <input type="text" id="fullName" name="fullName" class="form-control" required = "" value="<?php if(isset($dataOfDwC['fullName'])) echo $dataOfDwC['fullName']; ?>" >
              </div>

              <div class="form-group">
                <label>Email Address</label>
                <input type="text" id="email" name="email" class="form-control" required = "" value="<?php if(isset($dataOfDwC['email'])) echo $dataOfDwC['email']; ?>">
              </div>

              <div class="form-group">
                <label>Contact Number</label>
                <input id="contactNum" type="text" class="form-control" name="contactNum" required ="" value="<?php if(isset($dataOfDwC['contactNum'])) echo $dataOfDwC['contactNum']; ?>">
              </div>

              <div class="form-group">
                <label>Merchant Name</label>
                <select id = "m_id" name="m_id" class="form-control floating select2" required="">
                  <option value="" selected disabled style="display:none">Select merchant</option>
                  <?php
                    $merchantStmt = $merchantTbl->funcAllSelect();
                    foreach($merchantStmt as $merchantRow){
                      echo '<option value="'.$merchantRow['m_id'].'"';
                      if ($dataOfDwC['m_id']== $merchantRow['m_id']){
                          echo 'selected';
                      }
                      echo'>';
                      echo $merchantRow['name'];
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
                <label>Consumer Id</label>
                <input id="consumer_id" type="number" placeholder="Consumer Id" class="form-control" name="consumer_id" value="<?php if(isset($dataOfDwC['consumer_id']))  echo $dataOfDwC['consumer_id']; ?>" required >
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