<div class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1>List Of Enquiries</h1>
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
            <table class="table table-hover">
              <thead class="text-center">
                <tr>
                	<th>S.No.</th>
                  <th>Full Name</th>
                  <th>Email Address</th>
                  <th>Contact Number</th>
                  <th>Message</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $i_enquiry = 1;
              
                  foreach($recordsOfEnquiry as $enquiryInRow){
                    echo '<tr class="col text-center">';
                    echo '<td>' . $i_enquiry++ . '</td>';
                    echo '<td>' . $enquiryInRow['fullName'] . '</td>';
                    echo '<td>' . $enquiryInRow['email'] . '</td>';
                    echo '<td>' . $enquiryInRow['contactNum'] . '</td>';
                    echo '<td>' . $enquiryInRow['description'] . '</td>';
                ?>
                <td>
                  <?php 
                    if($enquiryInRow['status'] == 0){
                      echo 'Not Read';
                    }
                    else{
                      echo 'Read';
                    }
                  ?>
                </td>
                <td>
                  <a href="listOfEnquiries&readId=<?php echo $enquiryInRow['enquiry_id']?>" data-toggle="tooltip" title="Edit" class="btn btn-info btn-sm"><i class="far fa-eye"></i>
                  </a>
                  <a href="#" onclick="javascript: if(confirm('Do you want to delete it?')){document.location='listOfEnquiries&removeId=<?php echo $enquiryInRow['enquiry_id']?>';}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i>
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