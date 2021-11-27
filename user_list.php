
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
                    <h1>Form management</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <a class="btn btn-primary" href="admin_signup_form.php" value="" ><i class="fa fa-plus-square"></i> Add User </a>
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
    $sql = "SELECT * FROM member ORDER BY id DESC";
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
                                
                                <th>Name</th>
                                <th>Email</th>
                                <th>Birth Date</th>
                                <th>Gender</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Action</th>
                                 
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($services as $service){
                                ?>
                                    <tr>
                                        <td><?= $serial++?></td>
                                        
                                        <td><?= $service['First_name']?></td>
                                        
                                        
                                        <td><?= $service['Email']?></td>
                                        <td><?= $service['Birthday']?></td>
                                        <td><?= $service['Gender']?></td>
                                        
                                        <td><?= $service['Phone']?></td>
                                        
                                        <td> <?php 
                                            if ($service['User_role'] == '1') {
                                                echo "Admin";
                                            } elseif ($service['User_role'] == '') {
                                                echo "User";
                                            } 
                                        ?></td>
                                    
                                        <td>
                                            <a  href="user_delete_action.php?user_id=<?=$service['id']?>" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>Delete
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
