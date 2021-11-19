<div class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1>List of Electricity Bills</h1>
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
            <a href="addDelEBill" class="btn btn-success">Add New</a>
          </div>
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead class="text-center">
                <tr>
                	<th>S.No.</th>
                  <th>Customer Name</th>
                  <th>Consumer ID</th>
                  <th>Reading Date</th>
                  <th>Bill Added On</th>
                  <th>Due Date</th>
                  <th>Consumed Unit</th>
                  <th>Bill Amount</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $i_eBills = 1;
                  foreach ($eBillRecords as $eBillsInRow){
                    echo '<tr class="col text-center">';
                    echo '<td>' . $i_eBills++ . '</td>';
                    echo '<td>' . $eBillsInRow['fullName'] . '</td>';
                    echo '<td>' . $eBillsInRow['consumer_id'] . '</td>';
                    echo '<td>' . $eBillsInRow['reading_date'] . '</td>';
                    echo '<td>' . $eBillsInRow['billing_date'] . '</td>';
                    echo '<td>' . $eBillsInRow['due_date'] . '</td>';
                    echo '<td>' . $eBillsInRow['consumed_unit'] . '</td>';
                    echo '<td>' . $eBillsInRow['bill_amt'] . '</td>';
                ?>
                <td>
                  <?php 
                    if($eBillsInRow['status'] == 0){
                      echo 'Not Paid';
                    }
                    else{
                      echo 'Paid';
                    }
                  ?>
                </td>
                
                <td>
                  <a href="updatingEBill&updateId=<?php echo $eBillsInRow['eBill_id']?>" data-toggle="tooltip" title="Edit" class="btn btn-info btn-sm"><i  class="far fa-edit"></i>
                  </a>
                  <a href="#" onclick="javascript: if(confirm('Do you want to delete it?')){ document.location='addDelEBill&removeId=<?php echo $eBillsInRow['eBill_id']?>';}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i>
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