<div class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1>List of Drinking Water Payments</h1>
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
                  $i_dwPays = 1;
              
                  foreach ($dwPayRecords as $dwPaysInRow){
                    if(($dwPaysInRow['type'] =='Both') || ($dwPaysInRow['type'] =='Drinking Water')){
                      echo '<tr class="col text-center">';
                      echo '<td>' . $i_dwPays++ . '</td>';
                      echo '<td>' . $dwPaysInRow['consumer_id'] . '</td>';
                      foreach($dwConsumers as $dwConsumer){
                        if ($dwConsumer['dconsumer_id'] == $dwPaysInRow['dconsumer_id']){
                              echo '<td>'.$dwConsumer['fullName'].'</td>';
                            }
                      }
                      echo '<td>' . $dwPaysInRow['reading_date'] . '</td>';
                      echo '<td>' . $dwPaysInRow['billing_date'] . '</td>';
                      echo '<td>' . $dwPaysInRow['consumed_unit'] . '</td>';
                      echo '<td>' . $dwPaysInRow['paid_amt'] . '</td>';
                      echo '<td>' . $dwPaysInRow['paid_date'] . '</td>';
                      echo '<td>' . $dwPaysInRow['fullName'] . '<br>' .$dwPaysInRow['email']. '</td>';
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