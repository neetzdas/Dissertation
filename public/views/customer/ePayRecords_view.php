<section class="ftco-section sec1 mb-4">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="row justify-content-center secheading">
          <h4>Your Payment Records</h4>
        </div>
        <div class="row tbl">
          <div class="col electricity">
            <h5>Electricity</h5>
            <div class="card-body table-responsive p-0">
              <table class="table table-head-fixed text-nowrap">
                <thead class="text-center">
                  <tr>
                    <th>S.No.</th>
                  	<th>Consumer Id</th>
                    <th>Customer Name</th>
                    <th>Counter Name</th>
                    <th>Reading Date</th>
                    <th>Consumed Unit</th>
                    <th>Per Unit Price</th>
                    <th>Paid Amount</th>
                    <th>Payment Made on</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $i_ePays = 1;

                    if($ePayRecords->rowCount()>0){
                      foreach ($ePayRecords as $ePaysInRow){ 
                        echo '<tr class="col text-center">';
                        echo '<td>' . $i_ePays++ . '</td>';
                        echo '<td>' . $ePaysInRow['consumer_id'] . '</td>';
                        echo '<td>' . $ePaysInRow['fullName'] . '</td>';
                        foreach ($counters as $counter){
                          if ($counter['c_id'] == $ePaysInRow['c_id']){
                            echo '<td>'.$counter['name'].'</td>';
                          }
                        }
                        echo '<td>' . $ePaysInRow['reading_date'] . '</td>';
                        echo '<td>' . $ePaysInRow['consumed_unit'] . '</td>';
                        echo '<td>' . $ePaysInRow['per_unit_price'] . '</td>';
                        echo '<td>' . $ePaysInRow['paid_amt'] . '</td>';
                        echo '<td>' . $ePaysInRow['paid_date'] . '</td>';
                        echo'</tr>';
                      }
                    }
                    else{
                      echo '<tr class="col text-center"><td colspan="10">You do not have any payment records!!</td></tr>';
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
</section>