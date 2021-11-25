
<?php include_once 'template/_head.php'?>

<body>


<!-- Left Panel -->
<?php include_once 'template/leftNav.php'?>
<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <?php include_once 'template/header.php'?>
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Complain</h1>
                </div>
            </div>
        </div>
        
    </div>
    <?php
        if(isset($_SESSION['msg'])){ 
    ?>
            <div>
                <p><?= $_SESSION['msg'];?></p>
            </div>
            <?php
            unset ($_SESSION['msg']);
        }
    ?>
<?php 
                                    
   
    include_once 'db_con.php';
    $conn = connect();
    $sql = "SELECT * FROM complain";
    $services = $conn -> query ($sql);
    $serial = 1;
   
       
    
?>
                    
    
    <div class="content mt-3">
        
       

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                        

                    <div class="card-body text-center">
                        

                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 3px;">Sl</th>
                                
                                
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Description</th>
                              
                                <th>Action</th>
                               
                                
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($services as $service){
                                ?>
                                    <tr>
                                        <td><?= $serial++?></td>
                                       

                                       
                                        <td><?= $service['name']?></td>
                                        <td><?= $service['email']?></td>
                                        <td><?= $service['phone']?></td>
                                        <td><?= $service['description']?></td>
                                        
                                        
                                        
                                        
                                        <td>
                                            

                                            <a  href="employee_assign_form.php" class="btn btn-success btn-sm">
                                            <i class="fa fa-check"> </i>Assign Staff
                                            </a>

                                            


                                            
                                        </td>
                                        
                                        
                                    </tr>
                                 
                                <?php } ?>
                            </tbody>
                        </table>
                        
    
                    </div>
                </div>
            </div>
        </div>

        <!--/.col-->


    </div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->
<?php include_once 'template/footer.php'?>
