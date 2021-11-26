
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
                    <h1>Assign Employee</h1>
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
                                    
    if(isset($_SESSION['files'])){
        $services = $_SESSION['files'];
        unset($_SESSION['files']);
        $serial = 1;
    }else{
    include_once 'db_con.php';
    $conn = connect();
    $sql = "SELECT * FROM employee";
    $services = $conn -> query ($sql);
    $serial = 1;
    }
    
?>

    <div class="content mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    
                    <form action="work_distribution.php" method="POST">
                        <div class="card-header">
                        
                        <strong class="card-title">
                            <label>DATE: <span class="required"></span></label>
                            <input type="date" name="date" class="field-long" placeholder="Insert Date" />   
                            <label>WORK: <span class="required"></span></label>
                            <input type="text" name="title" class="field-long" placeholder="Write Working Topic" />              
                                                
                    
                        
                            <label>AMOUNT:<span class="required">*</span></label>
                            <input type="number" name="amount" class="field-long" placeholder="Insert Amount" /></br></strong>
        
                      
                        
                    
                    </div>
                        

                    <div class="card-body text-center">
                        

                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                 <th class="text-center" style="width: 3px;">Sl</th>
                                 <th>Action</th>
                                <th>Photo</th>
                                <th>Employee ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Birth Date</th>
                                <th>Gender</th>
                                <th>Phone</th>
                                <th>Post</th>
                                
                                
                                
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($services as $service){
                                ?>
                                    <tr>
                                        <td><?= $serial++?></td>
                                        <td>
                                              <input type="checkbox" id="allowance" name="work[ ]" value=" <?=$service['id']?> "></br>Assign<br>
                                            </td>
                                        <td><img  style="height:90px" src="images/employee/<?= $service['Pic']?>" alt=""></td>
                                        <td><?= $service['Employee_id']?></td>
                                        <td><?= $service['First_name']?></td>
                                        
                                        
                                        <td><?= $service['Email']?></td>
                                        <td><?= $service['Birthday']?></td>
                                        <td><?= $service['Gender']?></td>
                                        
                                        <td><?= $service['Phone']?></td>
                                        
                                        <td> <?php 
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
                                            }elseif ($service['Post'] == '30') {
                                                echo "Cleaner";
                                            }
                                            elseif ($service['Post'] == '31') {
                                                echo "Sweeper";
                                            } 
                                            elseif ($service['Post'] == '32') {
                                                echo "Electrician";
                                            }  
                                        ?></td>
                                        
                            
                                        
                                       
                                    </tr>
                                 </form>
                                <?php } ?>
                            </tbody>
                        </table>
                        
    <input class="btn btn-success btn-sm" type="submit" name="Submit" value="Submit" />
                    </div>
                </div>
            </div>
        </div>

        <!--/.col-->


    </div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->
<?php include_once 'template/footer.php'?>
