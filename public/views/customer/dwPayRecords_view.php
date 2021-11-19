<section class="ftco-section sec1 mb-4">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="row justify-content-center secheading">
          <h4>Your Payment Records</h4>
        </div>
        <div class="row tbl">
          <div class="col electricity">
            <h5>Drinking Water</h5>
            <div class="card-body table-responsive p-0">
              <table class="table table-head-fixed text-nowrap">
                <thead class="text-center">
                  <tr>
                    <th>S.No.</th>
                  	<th>Consumer Id</th>
                    <th>Customer Name</th>
                    <th>Merchant Name</th>
                    <th>Reading Date</th>
                    <th>Consumed Unit</th>
                    <th>Paid Amount</th>
                    <th>Payment Made on</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $i_dwPays = 1;
                    if($dwPayRecords->rowCount()>0){
                      foreach ($dwPayRecords as $dwPaysInRow){
                        echo '<tr class="col text-center">';
                        echo '<td>' . $i_dwPays++ . '</td>';
                        echo '<td>' . $dwPaysInRow['consumer_id'] . '</td>';
                        echo '<td>' . $dwPaysInRow['fullName'] . '</td>';
                        foreach ($merchants as $merchant){
                          if ($merchant['m_id'] == $dwPaysInRow['m_id']){
                            echo '<td>'.$merchant['name'].'</td>';
                          }
                        }
                        echo '<td>' . $dwPaysInRow['reading_date'] . '</td>';
                        echo '<td>' . $dwPaysInRow['consumed_unit'] . '</td>';
                        echo '<td>' . $dwPaysInRow['paid_amt'] . '</td>';
                        echo '<td>' . $dwPaysInRow['paid_date'] . '</td>'; 
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
  </div>
</section>
