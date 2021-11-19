<div class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1>List of Admin</h1>
      </div>
    </div>
  </div>
</div>

<div class="content">
  <div class="container-fluid">
  	<div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title" >List of Admin</h4>
            <div class="card-tools">
              <a href="addingAdmin" class="btn btn-success">Add New</a>
            </div>
          </div>
          <div class="card-body table-responsive p-0">
            <table class="table table-hover">
              <thead class="text-center">
                <tr>
                	<th>S.No.</th>
                  <th>Full Name</th>
                  <th>Type</th>
                  <th>Email Address</th>
                  <th>Contact Number</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $i_admin = 1;
              
                  foreach ($recordsOfAdmin as $adminInRow){
                    echo '<tr class="col text-center">';
                    echo '<td>' . $i_admin++ . '</td>';
                    echo '<td>' . $adminInRow['fullName'] . '</td>';
                    echo '<td>' . $adminInRow['type'] . '</td>';
                    echo '<td>' . $adminInRow['email'] . '</td>';
                    echo '<td>' . $adminInRow['contact_num'] . '</td>';
                ?>
                <td>
                  <a href="updatingAdmin&updateId=<?php echo $adminInRow['admin_id']?>" data-toggle="tooltip" title="Edit" class="btn btn-info btn-sm"><i class="far fa-edit"></i>
                  </a>
      
                  <a href="#" onclick="javascript: if(confirm('Do you want to delete it?')){document.location='addingAdmin&removeId=<?php echo $adminInRow['admin_id']?>';}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i>
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