<section class="ftco-section sec1 mb-4">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="row justify-content-center secheading">
          <h4>Your Unpaid Bills</h4>
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
                  <th>Payable Amount</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  if(!empty($eBillRecords)){
                    foreach ($eBillRecords as $eConsumersInRow){
                      echo '<tr class="col text-center">';
                      echo '<td>' . $consumer_id . '</td>';
                      echo '<td>' . $sc_no . '</td>';
                      echo '<td>' . $eConsumersInRow['reading_date'] . '</td>';
                      echo '<td>' . $eConsumersInRow['due_date'] . '</td>';
                      echo '<td>' . $eConsumersInRow['consumed_unit'] . '</td>';
                      echo '<td>' . $eConsumersInRow['bill_amt'] . '</td>';
                ?>
                <td>
                  <a href="ePayment&payingId=<?php echo $eConsumersInRow['eBill_id']?>" data-toggle="tooltip" title="Pay" class="btn btn-info btn-sm"><i class="fas fa-dollar-sign"></i>
                  </a>
                </td>
                <?php 
                  echo'</tr>';
                    }
                  }
                  else{
                    echo '<tr class="col text-center"><td colspan="7">You do not have any unpaid bills!!</td></tr>';
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