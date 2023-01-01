<?php 
session_start();
include 'connection.php';
include 'header.php';
$a = $connection;

?>
<div class="container-xxl py-6">
    <div class="container">
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <!-- <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Our Team</div> -->
            <h2 class="d-inline-block border rounded-pill text-primary px-4 mb-5">Our Products</h2>
        </div>
        <!-- <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <h5>Full Name</h5>
                    <p class="mb-4">Designation</p>
                    <img class="img-fluid rounded-circle w-100 mb-4" src="asessts1/img/team-1.jpg" alt="">
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <h5>Full Name</h5>
                    <p class="mb-4">Designation</p>
                    <img class="img-fluid rounded-circle w-100 mb-4" src="asessts1/img/team-2.jpg" alt="">
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item">
                    <h5>Full Name</h5>
                    <p class="mb-4">Designation</p>
                    <img class="img-fluid rounded-circle w-100 mb-4" src="asessts1/img/team-3.jpg" alt="">
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item">
                    <h5>Full Name</h5>
                    <p class="mb-4">Designation</p>
                    <img class="img-fluid rounded-circle w-100 mb-4" src="asessts1/img/team-4.jpg" alt="">
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container">
            <!-- <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Glass Craft</div>
            </div> -->
            <div class="row g-4">

                <?php
                $sql = "select * from product";
                $result = mysqli_query($connection,$sql);
                while($row = mysqli_fetch_array($result)){
                
                echo '<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <h5>'.$row['ProductName'].'</h5>
                        <p class="mb-4"></p>
                        <a><img class="img-fluid rounded-circle w-100 mb-4" src=uploads/'.$row['Imagepath'].'  style="max-width:150px;max-height:150px;min-height:150px;min-width:150px"></a>
                        <h6>'.$row['ProductPrice'].' JD</h6>



                        <div class="d-flex justify-content-center">

                        <form method="post" action="addcart.php">
                        <input type="submit" class="btn btn-outline-success" value="'.$row['ProductID'].'"  name="cart" style="background-color:white" </>
                            <h5>&nbsp;</h5>
                            <input type="submit" class="btn btn-outline-success" style="background-color:white" name="HandId" value="⭐" onclick="fav()" />
                            </form>
                        </div>

                    </div>
                </div>';
            }
                ?>

               
                

                

                <div class="hotel py-2 px-2 pb-4 border-bottom">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script type="text/javascript" href="http://code.jquery.com/jquery-1.10.2.js%22%3E"> </script>


   <script>
       function Add() {
           Swal.fire(
 'The product has been added to the cart',
 'Have a nice day',
 'success'
)
       }
       </script>
        <script>
        function fav() {
            Swal.fire(
  'The product has been added to your favourites',
  'Have a nice day',
  'success'
)
        }
        </script>
       

<?php include 'footer.php' ?>