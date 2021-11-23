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
                    <h1>Form management</h1>
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
    $sql = "SELECT * FROM service";
    $services = $conn -> query ($sql);
    $serial = 1;
    }
    
?>

     <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <form  action="form_search.php" method="GET">
                        <strong class="card-title">
                            <label>SERVICE LIST <span class="required"></span></label>
                                            
                                                
                            <select name="seba_type" class="form-control" required="">
                                <option value=""selected="">SELECT</option>
                                <option value="nagorik_cer" >NATIONALITY CERTIFICATE</option>
                                <option value="ch_cer">CHARACTER CERTIFICATE</option>
                                <option value="birth_cer">BIRTH CERTIFICATE</option>
                            </select>
                        </strong>
                        <input class="btn btn-warning btn-sm" type="submit" value="Search"/>
                        </form>

                    </div>

                    <div class="card-body text-center">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 3px;">Sl</th>
                                <th>Photo</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Father</th>
                                <th>Mother</th>
                                
                                <th>NID/Birth Certificate No.</th>
                                <th>Birth Date</th>
                                <th>Gender</th>
                                <th>Status</th>
                                 
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($services as $service){
                                ?>
                                    <tr>
                                        <td><?= $serial++?></td>
                                        <td><img  style="height:90px" src="images/application/<?= $service['pic']?>" alt=""></td>
                                        <td><?= $service['first_name']?></td>
                                        <td><?= $service['last_name']?></td>
                                        <td><?= $service['father']?></td>
                                        <td><?= $service['mother']?></td>
                                        
                                        <td><?= $service['nid']?></td>
                                        <td><?= $service['birth_day']?></td>
                                        <td><?= $service['gender']?></td>
                                        
                                        <td><span class="badge <?php if($service['is_approved'] == '1') {
                                            echo 'badge-success';
                                        } elseif($service['is_approved'] == '0'){
                                            echo 'badge-danger';
                                        } else {
                                            echo 'badge-info';
                                        } ?>">
                                        <?php 
                                            if ($service['is_approved'] == '1') {
                                                echo "Varified";
                                            } elseif ($service['is_approved'] == '0') {
                                                echo "Declined";
                                            } elseif ($service['is_approved'] == "") {
                                                echo "Pending";
                                            } 
                                        ?>
                                            </span>
                                        </td>
                                        

                                    
                                        <td>
                                        <a  href="view_form.php?appid=<?=$service['id']?>" class="btn btn-info btn-sm">
                                            <i class="fa fas fa-file"></i> View
                                        </a>

                                        <a  href="public_approved.php?appid=<?=$service['id']?>" class="btn btn-success btn-sm">
                                            <i class="fa fas fa-check"></i> 
                                        </a>

                                        <a  href="public_decline.php?appid=<?=$service['id']?>" class="btn btn-danger btn-sm">
                                            <i class="fa fas fa-times"></i> 
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


    </div>
    </div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->
<?php include_once 'template/footer.php'?>
