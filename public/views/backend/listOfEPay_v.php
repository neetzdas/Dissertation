<div class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1>List of Electricity Payments</h1>
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
            <table class="table table-head-fixed text-nowrap">
              <thead class="text-center">
                <tr>
                  <th>S.No.</th>
                  <th>Consumer ID</th>
                  <th>Customer Name</th>
                  <th>Meter Reading Date</th>
                  <th>Bill Added On</th>
                  <th>Consumed Unit</th>
                  <th>Paid Amount</th>
                  <th>Payment Done on</th>
                  <th>Paid By</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $i_ePays = 1;
              
                  foreach ($ePayRecords as $ePaysInRow){
                    if(($ePaysInRow['type'] =='Both') || ($ePaysInRow['type'] =='Electricity')){
                      echo '<tr class="col text-center">';
                      echo '<td>' . $i_ePays++ . '</td>';
                      echo '<td>' . $ePaysInRow['consumer_id'] . '</td>';
                      foreach($eConsumers as $eConsumer){
                        if ($eConsumer['econsumer_id'] == $ePaysInRow['econsumer_id']){
                              echo '<td>'.$eConsumer['fullName'].'</td>';
                        }
                      }
                      echo '<td>' . $ePaysInRow['reading_date'] . '</td>';
                      echo '<td>' . $ePaysInRow['billing_date'] . '</td>';
                      echo '<td>' . $ePaysInRow['consumed_unit'] . '</td>';
                      echo '<td>' . $ePaysInRow['paid_amt'] . '</td>';
                      echo '<td>' . $ePaysInRow['paid_date'] . '</td>';
                      echo '<td>' . $ePaysInRow['fullName'] . '<br>' . $ePaysInRow['email'] . '</td>';
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