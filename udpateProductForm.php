<?php
session_start();
include 'connection.php';

if(isset($_POST['updateproduct'])){
    $prodId = $_SESSION['ProductID'];
    $pName = $_POST['pname'];
    $pSale = $_POST['psale'];
    $pPrice = $_POST['pprice'];
    $pCategory = $_POST['tree'];
    $image=$_FILES['pimage'];
    $img =$image['name'];
    $sqlimg = "select Imagepath from product where ProductID  = '$prodId'";
    $res = mysqli_query($connection,$sqlimg);
    $rowimg =mysqli_fetch_array($res);
    $imagepath = $rowimg['Imagepath'];


    if(empty($img)){
        $img = $imagepath;
        }
        else{
            copy($image['tmp_name'], 'uploads/'.$image['name']);
        }
    $sqlcat = "select CategoryID from category where CategoryName = '$pCategory'";
    $result = mysqli_query($connection,$sqlcat);
    $rwo = mysqli_fetch_array($result);
    $catid = $rwo['CategoryID'];
    echo $catid;
    $sql = "update  product set ProductName = '$pName', ProductPrice = '$pPrice',CategoryID  = '$catid', ProductSale = '$pSale' , Imagepath = '$img' where ProductID  = '$prodId'";
    mysqli_query($connection,$sql);
    header('location:productadmin.php');


}
else{
    include 'headerAdmin.php';

}


?>

<body class="inner_page login">
   <div class="full_container">
      <div class="container">
         <div class="center verticle_center full_height">
            <div class="login_section">

               <div class="login_form">
                  <form method="post"  enctype="multipart/form-data">
                     <fieldset>
                        <?php
                            $prodId = $_SESSION['ProductID'];
                            $sql = "select * from product where ProductID  = '$prodId'";
                            $result = mysqli_query($connection,$sql);
                            $row = mysqli_fetch_array($result);
                        echo '
                        <div class="field">
                        <label class="label_field">Product Name</label>
                        <input type="text" name="pname" value ="'.$row['ProductName'].'" />
                     </div>
                     <div class="field">
                        <label class="label_field">Product Sale</label>
                        <input type="text" name="psale" value ="'.$row['ProductSale'].'" />
                     </div>
                     <div class="field">
                        <label class="label_field">Product  Price</label>
                        <input type="text" name="pprice"  value ="'.$row['ProductPrice'].'"/>
                     </div>
                     <div class="field">
                        <label class="label_field">Product Iamge</label>
                        <input type="file" name="pimage" />
                     </div>
                     <div class="field">
                     <div class="dropdown_section">
                        <div class="dropdown dropright">
                        <label class="label_field">Category</label>
                           <select class="btn btn-success dropdown-toggle" data-toggle="dropdown" name="tree">
                              <option class="dropdown-item" value="Arabic Trees">Arabic Trees</option>
                              <option class="dropdown-item" value="English Trees">English Trees</option>

                           </select>
                        </div>
                     </div>
                     </div>
                        ';
                        
                        ?>
                      
                        <br><br>
                       
                        <form method="post">
                        <div class="field margin_0">
                           <label class="label_field hidden">hidden label</label>
                           <button class="main_bt" name='updateproduct'>Udpate</button>
                        </div>
                        </form>
                     </fieldset>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- jQuery -->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <!-- wow animation -->
   <script src="js/animate.js"></script>
   <!-- select country -->
   <script src="js/bootstrap-select.js"></script>
   <!-- nice scrollbar -->
   <script src="js/perfect-scrollbar.min.js"></script>
   <script>
      var ps = new PerfectScrollbar('#sidebar');
   </script>
   <!-- custom js -->
   <script src="js/custom.js"></script>
</body>

</html>