
    <?php
session_start();
include("../db.php");

error_reporting(0);
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$order_id=$_GET['order_id'];


} 

///pagination

if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$user_id=$_GET['user_id'];
$order_id=$_GET['order_id'];


/*this is delet quer*/
mysqli_query($con,"DELETE FROM `order_products` WHERE `order_id`=='$order_id'")or die("query is incorrect...");
}






$page=$_GET['page'];

if($page=="" || $page=="1")
{
$page1=0; 
}
else
{
$page1=($page*10)-10; 
}

include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Orders  / Page <?php echo $page;?> </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter " id="">
                    <thead class=" text-primary">
                      <tr><th>Customer Name</th><th>Products</th><th>Contact | Email</th><th>Address</th><th>Quantity</th><th>Amount</th>
                    </tr></thead>
                    <tbody>




<?php 


$result=mysqli_query($con,"SELECT `order_id`, `user_id`, `f_name`, `email`, `address`, `prod_count`, `total_amt` FROM `orders_info`")or die ("query 2 incorrect.......");

                        while(list($order_id,$user_id,$f_name,$email,$address,$prod_count,$total_amt)=
                        mysqli_fetch_array($result)){
                  

                     $result1=mysqli_query($con,"SELECT `order_id`, `product_id`, `qty`, `amt` FROM `order_products` WHERE order_id=$order_id")or die ("query 2 incorrect.......");

                        while (list($order_id,$product_id,$quantity,$amount)=
                        mysqli_fetch_array($result1))
                        {
                       
        $result2=mysqli_query($con,"SELECT `product_title`, `product_price` FROM `products` WHERE product_id =$product_id")or die ("query 2 incorrect.......");

                        while (list($product_title)=
                        mysqli_fetch_array($result2))
                        {
                       echo "<tr><td>$f_name</td><td>$product_title</td><td>$email<br>$contact_no</td><td>$address<br></td><td>$prod_count</td><td>$amount </td>

                        </tr>";


                        }

                        }

                      }
                      
                        mysqli_close($con);
                        
                        ?>





                      
                    </tbody>
                  </table>
                  
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <?php
include "footer.php";
?>