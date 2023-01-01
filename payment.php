<?php 
session_start();
include 'connection.php';
include 'header.php';
?>



<section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">

            <div class="row">

              <div class="col-lg-7">
                <h5 class="mb-3"><a asp-action="Index" asp-controller="HandcraftFps" class="text-body"><i
                      class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                <hr>

                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                    <p class="mb-1">Shopping cart</p>
                    <p class="mb-0">You have 4 items in your cart</p>
                  </div>
                  <div>
                    <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!"
                        class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
                  </div>
                </div>
              
               <?php
               $userid=$_SESSION['UserID'];
               $sql = "select * from shopping_cart inner join product on shopping_cart.ProductID = product.ProductID where shopping_cart.UserID =$userid ";
               $result=mysqli_query($connection,$sql);
               while($row = mysqli_fetch_array($result)){               
               echo'
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                        <div>
                        <a><img class="img-fluid rounded-circle w-100 mb-4" src=uploads/'.$row['Imagepath'].'  style="width:60px;height:60px;min-height:50px;min-width:50px"></a>
                        </div>
                        <div class="ms-3">
                          <h5>'.$row['ProductName'].'</h5>
                              <p class="small mb-0">Mutasem</p>
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center">
                        <div >
                          

                        </div>
                            <div class="d-flex flex-row align-items-center" style="width: 150px;">
                                    <h6 >&nbsp;</h6>
                            </div>
                        <div class="d-flex flex-row align-items-center">
                                    
                            </div>
                            <div class="d-flex flex-row align-items-center" style="width: 150px;">
                                <h6 >&nbsp;</h6>
                             </div>
                             <div class="d-flex flex-row align-items-center" style="width: 150px;">
                                     <h6  class="cart__price"></h6><h6 style="font-family:"Bradley Hand ITC";font-size:13px"> '.$row['ProductPrice'].'$ for one</h6>
                            </div>
                             <input type="hidden" class="cartsid" name = "id"   />
                                                               
                            <a asp-action="DeleteItems" asp-route-id=@item.OrderId style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                      </div>
                    </div>
                  </div>
                </div>';}
                ?>
               
             
                    <button href="#" onclick="AddQty()" class="btn btn-success"><i class="fa fa-spinner "></i> Update </button>
               
                    <!-- <h6>
                            <form method="post" action="doneorder.php">
                                    <input  class="qty" id="qty" style="width: 50px;border-radius:5px;text-align:center" type="number" min = "1" value="" onchange="Calc()" >
                                    </form>  
                                </h6>                                    <h6 style="font-family:"Bradley Hand ITC";font-size:13px">Quantity</h6> -->
              </div>
              <div class="col-lg-5">

                <div class="card bg-primary text-white rounded-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <h5 class="mb-0">Card details</h5>
                      
                    </div>

                    <p class="small mb-2">Card type</p>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-visa fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-amex fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>

                    <form class="mt-4" method="post" action="doneorder.php">
                      <div class="form-outline form-white mb-4">
                        <input type="text" name="fullname" id="typeName" class="form-control form-control-lg" siez="17"
                          placeholder="Cardholder's Name" />
                        <label class="form-label" for="typeName">Cardholder's Name</label>
                      </div>

                      <div class="form-outline form-white mb-4">
                        <input type="text" name="iban" id="typeText" class="form-control form-control-lg" siez="17"
                          placeholder="1234 5678 9012 3457"  maxlength="19" />
                        <label class="form-label" for="typeText">Card Number</label>
                      </div>

                      <div class="row mb-4">
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <input type="text" name="date" id="typeExp" class="form-control form-control-lg"
                              placeholder="MM/YYYY"  />
                            <label class="form-label" for="typeExp">Expiration</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <input type="password" name="cvv" id="typeText" class="form-control form-control-lg"
                              placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                            <label class="form-label" for="typeText">Cvv</label>
                          </div>
                        </div>
                      </div>
                        <!-- <div class="cart__total">
                        <h6>Cart total : </h6>
                        
                        <textarea name="total" id="totalofsum" rows="1" cols="8" style="border-radius:5px"></textarea>
                            
                        
                        
                        </div> -->
                        <button type="submit" class="btn btn-light" style="color:forestgreen" name="submit" >🛒 Check Out</button> 

                         
                    </form>

                    

                  </div>
                </div>
                <hr>
                 <h5 class="mb-3"><a   class="text-body">Previous Purchases <i
                      class="fas fa-long-arrow-alt-right me-2"></i></a></h5>
                
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 <script>
        function Calc(){
            var sumAllProduct = 0
            const quantites = document.getElementsByClassName('qty');
            const prices = document.getElementsByClassName('prc');
            const eachPrice = document.getElementsByClassName('cart__price');
            for(var i=0; i<quantites.length; i++ ) {
                sumAllProduct += Number(prices[i].innerText) * Number(quantites[i].value);
                eachPrice[i].innerText = Number(prices[i].innerText) * Number(quantites[i].value) ;
            }
            document.getElementById('totalofsum').innerText = sumAllProduct;
            document.getElementsByClassName('cart__price') = eachPrice;
        }
        function AddQty()
       {
          const quantites = document.getElementsByClassName('qty');
          const cartsid = document.getElementsByClassName('cartsid');
          for(var i = 0; i< quantites.length;i++)
          {
              var id = cartsid[i].value;
              var qty = quantites[i].value;
             $.ajax({
                url: "/Home/UpdataQty",
                type: "POST",
                data: { id:id, qty:qty},
                success: function (data) {
                    console.log(data);
                   }
                });
          }
       }
</script>
<?php include 'footer.php' ?>