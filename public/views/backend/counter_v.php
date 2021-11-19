<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Manage Counters</h1>
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
            <h3 class="card-title">Manage Counter Form</h3>
          </div>
          <form action="managingCounter" method="post" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                
                <input type="hidden" name="c_id" value="<?php if(isset($dataOfCounter['c_id']))echo $dataOfCounter['c_id']; ?>" />
                
                <label>Name</label>
                <input type="text" id="name" name="name" class="form-control" required = "" value="<?php if(isset($dataOfCounter['name']))echo $dataOfCounter['name']; ?>" >
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
            <h3 class="card-title">List of Counters</h3>
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
                  $i_counter = 1;

                  foreach ($recordsOfCounter as $counterInRow) {
                    echo '<tr class="col text-center">';
                    echo '<td>' . $i_counter++ . '</td>';
                    echo '<td>' . $counterInRow['name'] . '</td>';
                ?>
                <td>
                  <a href="managingCounter&updateId=<?php echo $counterInRow['c_id']?>" data-toggle="tooltip" title="Edit" class="btn btn-info btn-sm"><i class="far fa-edit"></i>
                  </a>
                  <a href="#" onclick="javascript: if(confirm('Do you want to delete it?')){document.location='managingCounter&removeId=<?php echo $counterInRow['c_id']?>';}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i>
                  </a>
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