<div class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1>Manage Drinking Water Consumers</h1>
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
            <h3 class="card-title">List of Drinking Water Consumers</h3>
            <div class="card-tools">
              <a href="addDwConsumer" class="btn btn-success">Add New</a>
            </div>
          </div>
          
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead class="text-center">
                <tr>
                  <th>S.No.</th>
                  <th>Full Name</th>
                  <th>Email</th>
                  <th>Contact Number</th>
                  <th>Merchant</th>
                  <th>Consumer Id</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $i_dwConsumers = 1;
              
                  foreach($recordsOfdwConsumers as $dwConsumersInRow){
                    echo '<tr class="col text-center">';
                    echo '<td>' . $i_dwConsumers++ . '</td>';
                    echo '<td>' . $dwConsumersInRow['fullName'] . '</td>';
                    echo '<td>' . $dwConsumersInRow['email'] . '</td>';
                    echo '<td>' . $dwConsumersInRow['contactNum'] . '</td>';
                    foreach ($merchants as $merchant)
                      if ($merchant['m_id'] == $dwConsumersInRow['m_id']){
                        echo '<td>'.$merchant['name'].'</td>';
                      }
                    echo '<td>' . $dwConsumersInRow['consumer_id'] . '</td>';
                ?>
                <td>
                  <a href="updateDwConsumer&updateId=<?php echo $dwConsumersInRow['dconsumer_id']?>" data-toggle="tooltip" title="Edit" class="btn btn-info btn-sm"><i class="far fa-edit"></i>
                  </a>
      
                  <a href="#" onclick="javascript: if(confirm('Do you want to delete it?')){document.location='addDwConsumer&removeId=<?php echo $dwConsumersInRow['dconsumer_id']?>';}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i>
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