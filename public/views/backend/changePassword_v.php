<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-1">
      <div class="col-sm-6">
        <h1 class="m-0">Change Password</h1>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <form action="changePassword" method="post" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
              	<?php $dataOfPassword= $adminTbl->funcSelect('admin_id', $_GET['updateId'])->fetch(); ?>
                <input type="hidden" name="admin_id" value="<?php if(isset($dataOfPassword['admin_id']))echo $dataOfPassword['admin_id']; ?>" />

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
