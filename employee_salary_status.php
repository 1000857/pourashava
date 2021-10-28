<?php session_start(); ?>
<?php
if (!isset($_SESSION['loggedin'])){
    header('location:employee_signin_form.php');
    exit;
}
?>
<?php include_once 'template2/head.php'?>

<body>


<!-- Left Panel -->
<?php include_once 'template2/Nav.php'?>
<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <?php include_once 'template2/header2.php'?>
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>MY SALARY STATUS</h1>
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
          $userid = $_SESSION['user_id'];

          $sql = "SELECT salary_confirmed.* FROM salary_confirmed INNER JOIN employee ON employee.Employee_id = salary_confirmed.employee_id where employee.id =$userid";
          $users = $conn -> query ($sql);

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
                                <th>OFFICE ID</th>
                                
                                <th>MONTH</th>
                                
                                
                                <th>AMOUNT</th>
                                
                                <th>STATUS</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($users as $user){
                            ?>
                                    <tr>
                                        <td><?= $serial++?></td>
                                        

                                       
                                        <td><?= $user['employee_id']?></td>
                                        <td><?= $user['month']?></td>
                                      
                                        
                                        <td><?= $user['amount']?></td>
                                        
                                        
                                        
                                        <td><?php 
                                            if ($user['is_approved'] == '1') {
                                                echo "Received";
                                            }  elseif ($user['is_approved'] == "") {
                                                echo "Not Received";
                                            } 
                                        ?></td>
                                         
                                            
                                        
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
<?php include_once 'template2/footer2.php'?>
