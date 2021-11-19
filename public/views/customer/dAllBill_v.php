<section class="ftco-section sec1 mb-4">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="row justify-content-center secheading">
          <h4>Your Drinking Water Bills</h4>
        </div>
        <div class="row tbl">
          <div class="col electricity">
            <h5>Drinking Water</h5>
            <table class="table table-hover text-nowrap">
              <thead class="text-center">
                <tr>
                  <th>Consumer Id</th>
                  <th>Reading Date</th>
                  <th>Due Date</th>
                  <th>Consumed Unit</th>
                  <th>Payable Amount</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  if(!empty($dwBillRecords)){
                    foreach ($dwBillRecords as $dwConsumersInRow){
                      echo '<tr class="col text-center">';
                      echo '<td>' . $consumer_id . '</td>';
                      echo '<td>' . $dwConsumersInRow['reading_date'] . '</td>';
                      echo '<td>' . $dwConsumersInRow['due_date'] . '</td>';
                      echo '<td>' . $dwConsumersInRow['consumed_unit'] . '</td>';
                      echo '<td>' . $dwConsumersInRow['bill_amt'] . '</td>';
                ?>
                <td>
                  <?php 
                    if($dwConsumersInRow['status'] == 0){
                      echo 'Not Paid';
                    }
                    else{
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
