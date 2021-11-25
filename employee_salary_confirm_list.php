
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
                    <h1>Salary Confirmation List</h1>
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
    $sql = "SELECT employee.id as id, employee.First_name as fname, employee.Email as Email, employee.Phone as Phone, employee.Post as Post, salary_confirmed.month, salary_confirmed.amount, salary_confirmed.is_approved, salary_confirmed.employee_id FROM salary_confirmed
        INNER JOIN employee ON salary_confirmed.employee_id = employee.employee_id";
    $services = $conn -> query ($sql);
    $serial = 1;
    }
    
?>
                    
<form action="employee_salary_confirm_search.php" method="GET">
        <div class="container">
                       <div class="search-box">

                          <input type="text" name="search" class="search-input" placeholder="Search..">

                          <button class="btn btn-info">
                            <i class="fa fa-search" ></i>
                          </button>
                       </div>
                    </div>
       </form>
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
                                <th>Post</th>
                                <th>Phone</th>
                                <th>Month</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Action</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($services as $service){
                                ?>
                                    <tr>
                                        <td><?= $serial++?></td>
                                       

                                       
                                        <td><?= $service['fname']?></td>
                                        <td><?= $service['Email']?></td>
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
                                        ?></td>
                                        <td><?= $service['Phone']?></td>
                                        <td><?= $service['month']?></td>
                                        <td><?= $service['amount']?></td>
                                        
                                        <td><?php 
                                            if ($service['is_approved'] =="") {
                                                echo "Pending";
                                             
                                            } elseif ($service['is_approved'] = 1) {
                                                echo "Received";
                                            } 
                                        ?></td>
                                        <td>
                                           

                                            <a  href="employee_salary_approved.php?appid=<?=$service['employee_id']?>" class="btn btn-success btn-sm">
                                                <i class="fa fa-check"> </i>Received
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
