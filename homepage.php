<?php 
include 'connection.php';

?>
<?php include 'header.php'?>



        <!-- About Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                        <img class="img-fluid" src="asessts1/img/about.png">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">About Us</div>
                        <p class="mb-4">Trees are a natural wonder that bring beauty and life to our world. Their towering presence and intricate branches create a sense of awe and majesty, while their leaves and flowers add a splash of color to the landscape. But trees are more than just a visual delight - they play a vital role in maintaining the health and balance of our planet. They absorb carbon dioxide from the air and produce oxygen, helping to combat climate change and improve air quality. They provide shelter and food for countless species of animals and insects, and their roots help to anchor the soil and prevent erosion. Whether you are walking through a forest, admiring a lone tree in a field, or simply looking out at a tree-lined street, the beauty of trees is something to be cherished and preserved.</p>
                        <div class="row g-3 mb-4">
                            <div class="col-12 d-flex">
                                
                                
                            </div>
                            <div class="col-12 d-flex">
                                
                             
                            </div>
                        </div>
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="about.php">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Newsletter Start -->
        <div class="container-xxl bg-primary my-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container px-lg-5">
                <div class="row align-items-center" style="height: 250px;">
                    <div class="col-12 col-md-6">
                        <h3 class="text-white">Ready to get started</h3>
                        <small class="text-white"></small>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Enter Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                    <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                        <img class="img-fluid mt-5" style="max-height: 250px;" src="asessts1/img/newsletter.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->


        <!-- Service Start -->
        <div class="container-xxl py-6">
            
        </div>
        <!-- Service End -->


        <!-- Features Start -->
        <div class="container-xxl py-6">
            
        </div>
        <!-- Features End -->


        <!-- Client Start -->
        <div class="container-xxl bg-primary my-6 py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="owl-carousel client-carousel">
                    <a href="#"><img class="img-fluid" src="asessts1/img/logo-1.png" alt=""></a>
                    <a href="#"><img class="img-fluid" src="asessts1/img/logo-2.png" alt=""></a>
                    <a href="#"><img class="img-fluid" src="asessts1/img/logo-3.png" alt=""></a>
                    <a href="#"><img class="img-fluid" src="asessts1/img/logo-4.png" alt=""></a>
                    <a href="#"><img class="img-fluid" src="asessts1/img/logo-5.png" alt=""></a>
                    <a href="#"><img class="img-fluid" src="asessts1/img/logo-6.png" alt=""></a>
                    <a href="#"><img class="img-fluid" src="asessts1/img/logo-7.png" alt=""></a>
                    <a href="#"><img class="img-fluid" src="asessts1/img/logo-8.png" alt=""></a>
                </div>
            </div>
        </div>
        <!-- Client End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Testimonial</div>
                    <h2 class="mb-5">What Our Clients Say!</h2>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">

                <?php 
                $testimonial = "select * from testimonial inner join users on users.User_Id = testimonial.userID";
                $result1 =mysqli_query($connection,$testimonial);
                while($row = mysqli_fetch_array($result1) ){

                
                echo '<div class="testimonial-item rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>'.$row['message'].'</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="uploads/'.$row['ImagePath'].'">
                            <div class="ps-3">
                                <h6 class="mb-1">'.$row['FullName'].'</h6>
                                <small>'.$row['Username'].'</small>
                            </div>
                        </div>
                    </div>';
                

                }
                ?>
                   
                </div>
                
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Team Start -->
      
        <!-- Team End -->
        

        <?php include 'footer.php'?>