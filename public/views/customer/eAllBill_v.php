<section class="ftco-section sec1 mb-4">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="row justify-content-center secheading">
          <h4>Your Electricity Bills</h4>
        </div>
        <div class="row tbl">
          <div class="col electricity">
            <h5>Electricity</h5>
            <table class="table table-hover text-nowrap">
              <thead class="text-center">
                <tr>
                  <th>Consumer Id</th>
                  <th>SC No.</th>
                  <th>Reading Date</th>
                  <th>Due Date</th>
                  <th>Consumed Unit</th>
                  <th>Total Amount</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  if(!empty($eBillRecords)){
                    foreach ($eBillRecords as $eConsumersInRow) {
                      echo '<tr class="col text-center">';
                      echo '<td>' . $consumer_id . '</td>';
                      echo '<td>' . $sc_no . '</td>';
                      echo '<td>' . $eConsumersInRow['reading_date'] . '</td>';
                      echo '<td>' . $eConsumersInRow['due_date'] . '</td>';
                      echo '<td>' . $eConsumersInRow['consumed_unit'] . '</td>';
                      echo '<td>' . $eConsumersInRow['bill_amt'] . '</td>';
                ?>
                <td>
                  <?php 
                    if($eConsumersInRow['status'] == 0){
                      echo 'Not Paid';
                    }
                    else {
                      echo 'Paid';
                    }
                  ?>
                </td>
                <?php 
                  echo'</tr>';
                    }
                  }
                  else{
                    echo '<tr class="col text-center"><td colspan="7">There are no records found between the choosen dates!!</td></tr>';
                  }

                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>