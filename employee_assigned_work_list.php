
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
                    <h1>Assigned Work</h1>
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
    $sql = "SELECT employee.First_name , employee.Post, employee.Phone, employee_assign.work,  employee_assign.date, employee_assign.amount, employee_assign.is_done FROM employee
        INNER JOIN employee_assign ON employee.id = employee_assign.employee_id";
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
                                <th>Work Title</th>
                                <th>Working Date</th>
                                <th>Budget</th>
                                <th>Post</th>
                                <th>Status</th>
                               
                                
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($services as $service){
                                ?>
                                    <tr>
                                        <td><?= $serial++?></td>
                                       

                                       
                                        <td><?= $service['First_name']?></td>
                                        <td><?= $service['work']?></td>
                                        <td><?= $service['date']?></td>
                                        <td><?= $service['amount']?></td>
                                        <td><?php 
                                            if ($service['Post'] == '4') {
                                                echo "Mayor";
                                            } elseif ($service['Post'] == '5') {
                                                echo "License Inspector";
                                            }
                                            elseif ($service['Post'] == '6') {
                                                echo "Tax Collector";
                                            }
                                            elseif ($service['Post'] == '7') {
                                                echo "Architect";
                                            }
                                            elseif ($service['Post'] == '8') {
                                                echo "Ass. Architect";
                                            }
                                            elseif ($service['Post'] == '9') {
                                                echo "Administrative Officer";
                                            } 
                                            elseif ($service['Post'] == '10') {
                                                echo "Doctor";
                                            }
                                            elseif ($service['Post'] == '30') {
                                                echo "Cleaner";
                                            }
                                            elseif ($service['Post'] == '31') {
                                                echo "Sweeper";
                                            } 
                                            elseif ($service['Post'] == '32') {
                                                echo "Electrician";
                                            }   
                                        ?></td>
                                        <td><span class="badge <?php if($service['is_done'] == '1') {
                                            echo 'badge-success';
                                        } elseif($service['is_done'] == ""){
                                            echo 'badge-danger';
                                        }  ?>">
                                        <?php 
                                            if ($service['is_done'] == '1') {
                                                echo "Completed";
                                            } 
                                            elseif ($service['is_done'] == "") {
                                                echo "Not Completed";
                                            } 
                                        ?>
                                            </span></td>
                                        
                                        
                                        
                                        
                                        
                                        
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
