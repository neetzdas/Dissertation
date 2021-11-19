<div class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h3>Change Password</h3>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="card card-primary">
          <form action="changePassword" method="post" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
              	<?php $dataOfPassword = $customerTbl->funcSelect('customer_id', $_GET['updateId'])->fetch(); ?>
                <input type="hidden" name="customer_id" value="<?php if(isset($dataOfPassword['customer_id']))echo $dataOfPassword['customer_id']; ?>" />

                <label>Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
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