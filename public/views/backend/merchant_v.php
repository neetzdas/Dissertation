<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Manage Merchants</h1>
      </div>
    </div>
  </div>
</div>
 
<div class="content">
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Manage Merchant Form</h3>
          </div>
          <form action="managingMerchant" method="POST" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                
                <input type="hidden" name="m_id" value="<?php if(isset($dataOfMerchant['m_id']))echo $dataOfMerchant['m_id']; ?>" />

                <label>Name</label>
                <input type="text" id="name" name="name" class="form-control" required = "" value="<?php if(isset($dataOfMerchant['name']))echo $dataOfMerchant['name']; ?>" >
              </div>
            </div>
               
            <div class="card-footer">
              <button class="btn btn-primary" type="submit" name="save_btn">Submit</button>
            </div>
          </form>
        </div>
      </div>
  	</div>

  	<div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">List of Merchants</h3>
          </div>
          <div class="card-body table-responsive p-0">
            <table class="table table-head-fixed text-nowrap">
              <thead class="text-center">
                <tr>
                	<th>S.No.</th>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $i_merchant = 1;
              
                  foreach ($recordsOfMerchant as $merchantInRow) {
                    echo '<tr class="col text-center">';
                    echo '<td>' . $i_merchant++ . '</td>';
                    echo '<td>' . $merchantInRow['name'] . '</td>';
                ?>
                <td>
                  <a href="managingMerchant&updateId=<?php echo $merchantInRow['m_id']?>" data-toggle="tooltip" title="Edit" class="btn btn-info btn-sm"><i class="far fa-edit"></i>
                  </a>
      
                  <a href="#" onclick="javascript: if(confirm('Do you want to delete it?')){document.location='managingMerchant&removeId=<?php echo $merchantInRow['m_id']?>';}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></a>
                </td>
                <?php 
                  echo'</tr>';
                    }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div> 
  </div>
</div>