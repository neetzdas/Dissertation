<div class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1>Manage Admin</h1>
      </div>
    </div>
  </div>
</div>
   
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="card card-primary">
          <form action="addingAdmin" method="post" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <label>Full Name</label>
                <input type="text" id="fullName" name="fullName" class="form-control" required = ""  >
              </div>

              <div class="form-group">
                <label>Type</label>
                <select id = "type" name="type" class="form-control floating" >
                  <option value="" selected disabled style="display:none">Select the type</option>
                  <option value="Electricity" >Electricity</option>
                  <option value="Drinking water">Drinking water</option>
                </select>
              </div>

              <div class="form-group">
                <label>Email Address</label>
                <input type="email" id="email" name="email" class="form-control" required = "" >
              </div>

              <div class="form-group">
                <label>Contact Number</label>
                <input type="text" id="contact_num" name="contact_num" class="form-control" required = "" >
              </div>

              <div class="form-group">
                <label>Password</label>
                <input type="password" id="password" name="password" class="form-control" required = "" >
              </div>
            </div>
                
            <div class="card-footer">
              <button class="btn btn-primary" type="submit" name="save_btn">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>    