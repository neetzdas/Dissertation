<div class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1>Registered Electricity Customers</h1>
      </div>
    </div>
  </div>
</div>

<div class="content">
  <div class="container-fluid">
  	<div class="row">
      <div class="col">
        <div class="card">
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead class="text-center">
                <tr>
                	<th>S.No.</th>
                  <th>Full Name</th>
                  <th>Email Address</th>
                  <th>Contact Number</th>
                  <th>Counter</th>
                  <th>SC No.</th>
                  <th>Consumer Id</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $i_etCustomers = 1;
              
                  foreach ($recordsOfEtCustomers as $etCustomersInRow) {
                  	if(($etCustomersInRow['type'] =='Both') || ($etCustomersInRow['type'] =='Electricity') ){
                      echo '<tr class="col text-center">';
                      echo '<td>' . $i_etCustomers++ . '</td>';
                      echo '<td>' . $etCustomersInRow['fullName'] . '</td>';
                      echo '<td>' . $etCustomersInRow['email'] . '</td>';
                      echo '<td>' . $etCustomersInRow['contactNum'] . '</td>';
                      foreach ($counters as $counter)
                        if ($counter['c_id'] == $etCustomersInRow['c_id']){
                        echo '<td>'.$counter['name'].'</td>';
                        }
                      echo '<td>' . $etCustomersInRow['sc_no'] . '</td>';
                      echo '<td>' . $etCustomersInRow['e_consumer_id'] . '</td>';
                ?>
                <td>
                  <a href="#" onclick="javascript: if(confirm('Do you want to delete it?')){document.location='eCustomersList&removeId=<?php echo $etCustomersInRow['customer_id']?>';}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i>
                  </a>
                </td>
                <?php 
                  echo'</tr>';
                    }
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