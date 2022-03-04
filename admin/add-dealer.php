<?php
session_start();
include("../db.php");
include "sidenav.php";
include "topheader.php";
if(isset($_POST['btn_save']))
{
$dealer_id=$_POST['dealer_id'];
$dealer_name=$_POST['dealer_name'];
$dealer_contact=$_POST['dealer_contact'];


 
mysqli_query($con,"insert into dealer (`dealer_id`, `dealer_name`, `dealer_contact`) values ($dealer_id,'$dealer_name',$dealer_contact)") 
			or die ("Query 1 is inncorrect........");
 //header("location: sumit_form.php?success=1");
mysqli_close($con);
}


?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="row">
            
            </div>
          <div class="col-md-6">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add New Dealer</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <form action="" method="post" name="form" enctype="multipart/form-data">
                    <div class="row">
                      
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Add Dealer ID</label>
                          <input type="number" id="dealer_id" name="dealer_id" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Add Dealer Name</label>
                          <input type="text" name="dealer_name" id="dealer_name"  class="form-control" required>
                        </div>
                      </div>
                  

                        <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Add Dealer Contact No.</label>
                          <input type="text" name="dealer_contact" id="dealer_contact"  class="form-control" required>
                        </div>
                      </div>
                    </div>

                                     </div>
                    
                    <button type="submit" name="btn_save" id="btn_save" class="btn btn-primary pull-right">Add Dealer</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>






            </div>
        
 </div>

     </div>

      <?php
include "footer.php";
?>