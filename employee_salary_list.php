
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
                    <h1>Salary List</h1>
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
                    
                    <form action="employee_salary_confirm.php" method="POST">
                        <div class="card-header">
                        
                        <strong class="card-title">
                            <label>MONTH <span class="required"></span></label>
                                            
                                                
                    <select name="month" class="field-divided" required="">
                             <option value=""selected="">SELECT</option>
                                <option value="January" >January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                                
                            </select></br>
                        
                            <label>Amount:<span class="required">*</span></label>
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
                                <th>Post</th>
                                <th>Phone</th>
                                
                                
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($services as $service){
                                ?>
                                    <tr>
                                        <td><?= $serial++?></td>
                                        <td>
                                           
                                              <input type="checkbox" id="salary2" name="salary[ ]" value=" <?=$service['Employee_id']?> "></br>Issue Salary
                                              
                                           
                                            </td>
                                        <td><img  style="height:90px" src="images/employee/<?= $service['Pic']?>" alt=""></td>

                                       
                                        <td><?= $service['Employee_id']?></td>
                                        <td><?= $service['First_name']?></td>
                                        
                                        
                                        <td><?= $service['Email']?></td>
                                        
                                        
                                        
                                        
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
                                        ?></td>
                                        <td><?= $service['Phone']?></td>
                                
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
