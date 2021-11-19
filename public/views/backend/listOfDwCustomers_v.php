<div class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1>Registered Drinking Water Customers</h1>
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
                <th>Merchant</th>
                <th>Consumer Id</th>
              	<th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $i_dwCustomers = 1;
              
                foreach ($recordsOfdwCustomers as $dwCustomersInRow){
                	if(($dwCustomersInRow['type'] =='Both') || ($dwCustomersInRow['type'] =='Drinking Water')){
                    echo '<tr class="col text-center">';
                    echo '<td>' . $i_dwCustomers++ . '</td>';
                    echo '<td>' . $dwCustomersInRow['fullName'] . '</td>';
                    echo '<td>' . $dwCustomersInRow['email'] . '</td>';
                    echo '<td>' . $dwCustomersInRow['contactNum'] . '</td>';
                    foreach ($merchants as $merchant)
                      if ($merchant['m_id'] == $dwCustomersInRow['m_id']){
                        echo '<td>'.$merchant['name'].'</td>';
                      }
                    echo '<td>' . $dwCustomersInRow['dw_consumer_id'] . '</td>';
              ?>
              <td>
                <a href="#" onclick="javascript: if(confirm('Do you want to delete it?')){document.location='dwCustomersList&removeId=<?php echo $dwCustomersInRow['customer_id']?>';}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></a>
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