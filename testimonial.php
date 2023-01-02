<?php 
session_start();
include 'connection.php';
include 'header.php';


?>


        <!-- Contact Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Testimonial</div>
                    <h2 class="mb-5">Express your opinion on the site, so that others can see you</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                        <form method="post" action="testimonialImplemntaion.php">
                            <div class="row g-3">
                           
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a testimonial here" name="message" id="message" style="height: 150px"></textarea>
                                        <label for="message">Write Here !</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->



<?php include 'footer.php' ?>