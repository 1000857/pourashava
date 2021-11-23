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
                    <h1>Rickshaw/Van Registration Form</h1>
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
        $rickshaws = $_SESSION['files'];
        unset($_SESSION['files']);
        $serial = 1;
    }else{
    include_once 'db_con.php';
    $conn = connect();
    $sql = "SELECT * FROM rickshaw";
   
    $rickshaws = $conn -> query ($sql);
    
    $serial = 1;
    }
    
?>

    <div class="content mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <form  action="rickshaw_search.php" method="GET">
                        <strong class="card-title">
                            <label>সেবা সমূহ <span class="required"></span></label>
                                            
                                                
         <select name="seba_type" class="form-control" required="">
                                                 <option value=""selected="">চিহ্নিত করুন</option>
                                                    <option value="rickshaw_cer" >Rickshaw</option>
                                                    <option value="van_cer">Van</option>
                                                    
                                                </select>                                            
                                                <input type="submit" value="Search" /></strong>

    
                      </form>
                    </div>
                    <div class="card-body text-center">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 3px;">Sl</th>
                                <th>Owner's Photo</th>
                                <th>Owner's Name</th>
                                
                                <th>Father</th>
                               
                            
                                <th>NID/Birth Certificate No.</th>
                                <th>Birth Date</th>
                                <th>Registration Type</th>
                                 <th>Status</th>
                               
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($rickshaws as $rickshaw){
                                ?>
                                    <tr>
                                        <td><?= $serial++?></td>
                                        <td><img  style="height:90px" src="images/application/rickshaw/<?= $rickshaw['pic']?>" alt=""></td>
                                        <td><?= $rickshaw['owner_name']?></td>
                                        
                                        <td><?= $rickshaw['father']?></td>
                                       
                                        
                                        <td><?= $rickshaw['nid']?></td>
                                        <td><?= $rickshaw['dob']?></td>
                                        <td><?= $rickshaw['reg']?></td>
                                        <td>
                                        <?php 
                                            if ($rickshaw['is_approved'] == '1') {
                                                echo "Approved";
                                            } elseif ($rickshaw['is_approved'] == '0') {
                                                echo "Declined";
                                            } elseif ($rickshaw['is_approved'] == "") {
                                                echo "Pending";
                                            } 
                                        ?>
                                            
                                        </td>
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
                                            <a  href="view_rickshaw_form.php?appid=<?=$rickshaw['id']?>" class="btn btn-info btn-sm">
                                                <i class="fa fa-edit"></i>View
                                            </a>

                                            <a  href="rickshaw_approved.php?appid=<?=$rickshaw['id']?>" class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>Approved
                                            </a>

                                            <a  href="rickshaw_decline.php?appid=<?=$rickshaw['id']?>" class="btn btn-danger btn-sm">
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
