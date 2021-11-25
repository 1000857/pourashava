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
          $userid = $_SESSION['user_id'];

          $sql = "SELECT employee_assign.* FROM employee_assign where employee_assign.employee_id =$userid";
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
                                <th>Work Title</th>
                                
                                <th>DATE</th>
                                
                                
                                <th>BUDGET</th>
                                
                                <th>STATUS</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($users as $user){
                            ?>
                                    <tr>
                                        <td><?= $serial++?></td>
                                        

                                       
                                        <td><?= $user['work']?></td>
                                        <td><?= $user['date']?></td>
                                      
                                        
                                        <td><?= $user['amount']?></td>
                                        
                                        
                                        
                                        <td><span class="badge <?php if($user['is_done'] == '1') {
                                            echo 'badge-success';
                                        } elseif($user['is_done'] == ""){
                                            echo 'badge-danger';
                                        }  ?>">
                                        <?php 
                                            if ($user['is_done'] == '1') {
                                                echo "Completed";
                                            } 
                                            elseif ($user['is_done'] == "") {
                                                echo "Not Completed";
                                            } 
                                        ?>
                                            </span></td>
                                         <td>
                                              <a  href="employee_work_done.php?appid=<?=$user['employee_id']?>" class="btn btn-success btn-sm">
                                                <i class="fa fa-check"> </i>Done
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
<?php include_once 'template2/footer2.php'?>
