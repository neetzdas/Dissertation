<div class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1>Update Admin</h1>
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
            $dataOfAdmin = $adminTbl->funcSelect('admin_id', $_GET['updateId'])->fetch(); 
          ?>
          <form action="updatingAdmin" method="post" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <input type="hidden" name="admin_id" value="<?php echo $dataOfAdmin['admin_id']; ?>" />

                <label>Full Name</label>
                <input type="text" id="fullName" name="fullName" class="form-control" required = "" value="<?php echo $dataOfAdmin['fullName']; ?>" >
              </div>

              <div class="form-group">
                <label>Type</label>
                <select id = "type" name="type" class="form-control floating" value="<?php echo $dataOfAdmin['type'];?>">
                  <option value="" selected disabled style="display:none">Select the type</option>
                  <option value="Electricity" <?php if ($dataOfAdmin['type']=="Electricity") {echo 'selected';}?>>Electricity</option>
                  <option value="Drinking water" <?php if ($dataOfAdmin['type']=="Drinking water") {echo 'selected';}?>>Drinking water</option>
                </select>
              </div>

              <div class="form-group">
                <label>Email Address</label>
                <input type="email" id="email" name="email" class="form-control" required = "" value="<?php echo $dataOfAdmin['email']; ?>">
              </div>

              <div class="form-group">
                <label>Contact Number</label>
                <input type="text" id="contact_num" name="contact_num" class="form-control" required = "" value="<?php echo $dataOfAdmin['contact_num']; ?>">
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