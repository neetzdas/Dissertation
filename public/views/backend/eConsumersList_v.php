<div class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1>Manage Electricity Consumers</h1>
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
            <h3 class="card-title">List of Electricity Consumers</h3>
            <div class="card-tools">
              <a href="addEConsumer" class="btn btn-success">Add New</a>
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
                  <th>Counter</th>
                  <th>SC No.</th>
                  <th>Consumer Id</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $i_eConsumers = 1;
              
                  foreach ($recordsOfEConsumers as $eConsumersInRow) {
                    echo '<tr class="col text-center">';
                    echo '<td>' . $i_eConsumers++ . '</td>';
                    echo '<td>' . $eConsumersInRow['fullName'] . '</td>';
                    echo '<td>' . $eConsumersInRow['email'] . '</td>';
                    echo '<td>' . $eConsumersInRow['contactNum'] . '</td>';
                    foreach ($counters as $counter)
                      if($counter['c_id'] == $eConsumersInRow['c_id']){
                        echo '<td>'.$counter['name'].'</td>';
                      }
                    echo '<td>' . $eConsumersInRow['sc_no'] . '</td>';
                    echo '<td>' . $eConsumersInRow['consumer_id'] . '</td>';
                ?>
                <td>
                  <a href="updateEConsumer&updateId=<?php echo $eConsumersInRow['econsumer_id']?>" data-toggle="tooltip" title="Edit" class="btn btn-info btn-sm"><i class="far fa-edit"></i>
                  </a>
      
                  <a href="#" onclick="javascript: if(confirm('Do you want to delete it?')){document.location='addEConsumer&removeId=<?php echo $eConsumersInRow['econsumer_id']?>';}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i>
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