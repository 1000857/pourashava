<?php session_start(); ?>
<?php
if (!isset($_SESSION['loggedin'])){
    header('location:signin_form.php');
    exit;
}
?>
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
                    <h1>Staff List</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <a class="btn btn-primary" href="employee_signup_form.php" value="" ><i class="fa fa-plus-square"></i> Add Employee </a>
                    </ol>
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
    $sql = "SELECT * FROM employee ORDER BY id DESC";
    $services = $conn -> query ($sql);
    $serial = 1;
    }
    
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
                                        ?></td>
                                        
                                            
                                        
                                        <!--<td><?= $service['occupation']?></td>
                                        <td><?= $service['education']?></td>
                                        <td><?= $service['relegion']?></td>
                                        <td><?= $service['present_village']?></td> 
                                        <td><?= $service['present_ward']?></td>
                                        <td><?= $service['present_upozilla']?></td>
                                        <td><?= $service['present_thana']?></td>
                                        <td><?= $service['present_district']?></td>
                                        <td><?= $service['permanent_village']?></td>
                                        <td><?= $service['permanent_ward']?></td>
                                        <td><?= $service['permanent_upozilla']?></td>
                                        <td><?= $service['permanent_thana']?></td>
                                        <td><?= $service['permanent_district']?></td>
                                        <td><?= $service['mobile']?></td>
                                        <td><?= $service['email']?></td>
                                        <td><?= $service['other']?></td>
                                        <td><?= $service['pic']?></td>-->






                                    
                                        <td>
                                            <a  href="view_form.php?appid=<?=$service['id']?>" class="btn btn-info btn-sm">
                                                <i class="fa fa-edit"></i>View
                                            </a>

                                            <a  href="public_approved.php?appid=<?=$service['id']?>" class="btn btn-success btn-sm">
                                                <i class="fa fa-correct"></i>Approved
                                            </a>

                                            <a  href="public_decline.php?appid=<?=$service['id']?>" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>Decline
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
