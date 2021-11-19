<div class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h3>Change Profile Picture</h3>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="card card-primary">
          <form action="changePic" method="post" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <?php $pic= $customerTbl->funcSelect('customer_id', $_GET['updateId'])->fetch();?>
                <input type="hidden" name="customer_id" value="<?php if(isset($pic['customer_id']))echo $pic['customer_id']; ?>" />
                <?php
                  if(file_exists('../../images/' . $_SESSION['image'])){
                    echo '<img style="width: 200px; clear: both" src="../../images/' . $_SESSION['image'] . '"/>';
                  } 
                ?>

                <label>Image</label> 
                <input type="file" id="image" class="form-control" name="image"/>
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