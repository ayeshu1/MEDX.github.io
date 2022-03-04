 <?php
session_start();
include("../db.php");
include "sidenav.php";
include "topheader.php";
if(isset($_POST['btn_save']))
{
$brands_id=$_POST['brands_id'];
$brands_title=$_POST['brands_title'];



 
mysqli_query($con,"insert into brands (`brand_id`, `brand_title`) values ($brands_id,'$brands_title')") 
			or die ("Query 1 is inncorrect........");
// header("location: manage_users.php"); 
mysqli_close($con);
}


?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="row">
          <div class="col-md-6">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add New Brand</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <form action="" method="post" name="form" enctype="multipart/form-data">
                    <div class="row">
                      
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Add Brand ID</label>
                          <input type="number" id="brands_id" name="brands_id" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Add Brand Title</label>
                          <input type="text" name="brands_title" id="brands_title"  class="form-control" required>
                        </div>
                      </div>
                    </div>
                                     </div>
                    
                    <button type="submit" name="btn_save" id="btn_save" class="btn btn-primary pull-right">Add Brand</button>
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