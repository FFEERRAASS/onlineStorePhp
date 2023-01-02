<?php
include 'connection.php';
include 'headerAdmin.php';
?>
 <link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet" />
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap4.min.js "></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap4.min.js "></script>
<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Tables</h2>
                           </div>
                        </div>
<div class="col-md-10" style="margin-left: 300px;margin-right:550px">
                           <div class="white_shd full margin_bottom_60">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Users</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table" id="example">
                                       <thead class="thead-dark">
                                          <tr>
                                            
                                             <th>FullName</th>
                                             <th>Subject</th>
                                             <th>Email</th>
                                             <th>Message</th>
                                             
                                          </tr>
                                       </thead>
                                       <tbody>
                                        <?php 
                                       
                                       $quer3= "Select * from contact ";
                                       $result4=mysqli_query($connection,$quer3);
                                       while($row = mysqli_fetch_array($result4)){
   
                                       
                                          echo '<tr>
                                           
                                             <td>'.$row['fullname'].'</td>
                                             <td>'.$row['subject'].'</td>
                                             <td>'.$row['email'].'</td>
                                             <td>'.$row['msg'].'</td>

                                          </tr>';
                                        }
                                        ?>
                                       </tbody>
                                    </table>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                        </div>
                           </div>
                        </div>
                        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js" defer></script>

<script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js" defer></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                
                'pdfHtml5',
                 
            ]
            
        });
    });
</script>