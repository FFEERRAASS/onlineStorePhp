<?php
session_start();
include 'connection.php';
include 'headerAdmin.php';



?>

<body class="inner_page login">
   <div class="full_container">
      <div class="container">
         <div class="center verticle_center full_height">
            <div class="login_section">

               <div class="login_form">
                  <form method="post" action="addProduct.php" enctype="multipart/form-data">
                     <fieldset>
                        <div class="field">
                           <label class="label_field">Product Name</label>
                           <input type="text" name="pname" />
                        </div>
                        <div class="field">
                           <label class="label_field">Product Sale</label>
                           <input type="text" name="psale" />
                        </div>
                        <div class="field">
                           <label class="label_field">Product  Price</label>
                           <input type="text" name="pprice" />
                        </div>
                        <div class="field">
                           <label class="label_field">Product Iamge</label>
                           <input type="file" name="pimage" required />
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
                        <br><br>
                       

                        <div class="field margin_0">
                           <label class="label_field hidden">hidden label</label>
                           <button class="main_bt" name='addproduct'>Add Product</button>
                        </div>
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