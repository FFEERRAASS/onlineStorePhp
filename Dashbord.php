<?php
include 'connection.php';
include 'headerAdmin.php';

$sqlcount_user = "SELECT COUNT(*) AS COUNT FROM `users`";
$resultcount = mysqli_query($connection,$sqlcount_user);
$countuser = mysqli_fetch_array($resultcount);

$sqlcount_product = "SELECT COUNT(*) AS COUNT FROM `product`";
$resultcount_product = mysqli_query($connection,$sqlcount_product);
$countproduct = mysqli_fetch_array($resultcount_product);


$sqlmaxproduct = "SELECT MAX(ProductPrice) AS MaxPrice FROM `product` ";
$resultmaxproduct = mysqli_query($connection,$sqlmaxproduct);
$maxproduct = mysqli_fetch_array($resultmaxproduct);

?>



<div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <!-- <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button> -->
                        <div class="logo_section">
                           <a href="index.html"><img class="img-responsive" src="images/logo/logo.png" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/layout_img/user_img.jpg" alt="#" /><span class="name_user">John David</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.html">My Profile</a>
                                       <a class="dropdown-item" href="settings.html">Settings</a>
                                       <a class="dropdown-item" href="help.html">Help</a>
                                       <a class="dropdown-item" href="#"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Dashboard</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row column1">
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-user yellow_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no"><?php echo $countuser['COUNT'];?></p>
                                    <p class="head_couter">Welcome</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-clock-o blue1_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no"><?php echo $countproduct['COUNT'];?></p>
                                    <p class="head_couter">Products</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-cloud-download green_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no"><?php echo $maxproduct['MaxPrice'];?></p>
                                    <p class="head_couter">Collections</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-comments-o red_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">54</p>
                                    <p class="head_couter">Comments</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                     
                  
                     <div class="row column3">
                        <!-- testimonial -->
                        <div class="col-md-12">
                           <div class="dark_bg full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Testimonial</h2>
                                 </div>
                              </div>
                              <div class="full graph_revenue">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="content testimonial">
                                          <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                                             <!-- Wrapper for carousel items -->
                                             <div class="carousel-inner">
                                                <div class="item carousel-item active">
                                                   <div class="img-box"><img src="images/layout_img/user_img.jpg" alt=""></div>
                                                   <p class="testimonial"></p>
                                                   <p class="overview"><b>Feras Al-khuzai</b>Software Enginner</p>
                                                </div>
                                             <?php 
                                             $testimonial = "select * from testimonial inner join users on users.User_Id = testimonial.userID";;
                                             $result = mysqli_query($connection,$testimonial);
                                             while ($row = mysqli_fetch_array($result)){

                                             
                                           
                                                echo '<div class="item carousel-item">
                                                   <div class="img-box"><img src="uploads/'.$row['ImagePath'].'" alt=""></div>
                                                   <p class="testimonial">'.$row['message'].'</p>
                                                   <p class="overview"><b>'.$row['FullName'].'</b>'.$row['Email'].'</p>

                                                  

                                                </div>';
                                                
                                             
                                    
                                             
                                          }
                                             ?>
                                             </div>
                                             <!-- Carousel controls -->
                                             <a class="carousel-control left carousel-control-prev" href="#testimonial_slider" data-slide="prev">
                                             <i class="fa fa-angle-left"></i>
                                             </a>
                                             <a class="carousel-control right carousel-control-next" href="#testimonial_slider" data-slide="next">
                                             <i class="fa fa-angle-right"></i>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end testimonial -->
                        <!-- progress bar -->

                     </div>
                     <div class="row column4 graph">
                        <div class="col-md-12 margin_bottom_30">
                           <div class="dash_blog">
                              <div class="dash_blog_inner">
                                 <div class="dash_head">
                                    <h3><span><i class="fa fa-calendar"></i> 6 July 2018</span><span class="plus_green_bt"><a href="#">+</a></span></h3>
                                 </div>
                                 <div class="list_cont">
                                    <p>Today Tasks for Ronney Jack</p>
                                 </div>
                                 <div class="task_list_main">
                                    <ul class="task_list">
                                    <?php
                                    $quer3= "Select * from contact ";
                                    $result4=mysqli_query($connection,$quer3);
                                    while($row = mysqli_fetch_array($result4)){

                                    
                                       echo'<li>
                                          <p>'.$row['msg'].'</p><br><strong>'.$row['subject'].'</strong>
                                          <p><small>'.$row['fullname'].'</small></p>
                                    </li>';
                                 }
                                 ?>
                                       
                                    </ul>
                                 </div>
                                 <div class="read_more">
                                    <div class="center"><a class="main_bt read_bt" href="contactadmin.php">Read More</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                     </div>
                  </div>
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2018 Designed by html.design. All rights reserved.<br><br>
                           Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>
                        </p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>