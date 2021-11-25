
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
                    <h1>House/Building Permission Applicant List</h1>
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
    $sql = "SELECT * FROM house";
    $services = $conn -> query ($sql);
    $serial = 1;
    }
    
?>

    <div class="content mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <form  action="form_search.php" method="GET">
                        <strong class="card-title">
                            <label>সেবা সমূহ <span class="required"></span></label>
                                            
                                                
         <select name="seba_type" class="form-control" required="">
                                                 <option value=""selected="">চিহ্নিত করুন</option>
                                                    <option value="residence" >Residential </option>
                                                    <option value="business">Business</option>
                                                    <option value="industry">Industrial</option>
                                                    
                                                </select></strong>
                                            <input type="submit" value="Search" />

    
                      </form>
                    </div>
                    <div class="card-body text-center">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 3px;">Sl</th>
                                <th>Photo</th>
                                <th>Building Type</th>
                                <th>Applicants Name</th>
                               
                                <th>Father</th>
                                
                                
                                <th>NID/Birth Certificate No.</th>
                                <th>Birth Date</th>
                                <th>Status</th>
                                
                                 <!--<th>Occupassion</th> 
                                <th>Education Qualification</th>
                                <th>Religion</th>
                                <th>Present Village</th> 
                                <th>Present Ward</th>
                                <th>Present Upazilla</th>
                                <th>Present Thana</th>
                                <th>Present District</th>
                                <th>Permanent Village</th>
                                <th>Permanent Ward</th>
                                <th>Permanent Upazilla</th>
                                <th>Permanent Thana</th>
                                <th>Permanent District</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Attachment</th>
                                <th>Photo</th>-->
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($services as $service){
                                ?>
                                    <tr>
                                        <td><?= $serial++?></td>
                                        <td><img  style="height:90px" src="images/application/house/<?= $service['pic']?>" alt=""></td>
                                        <td><?= $service['type']?></td>
                                        <td><?= $service['name']?></td>
                                        
                                        <td><?= $service['father']?></td>
                                        
                                        
                                        <td><?= $service['nid']?></td>
                                        <td><?= $service['dob']?></td>
                                        <td>
                                        <?php 
                                            if ($service['is_approved'] == '1') {
                                                echo "Approved";
                                            } elseif ($service['is_approved'] == '0') {
                                                echo "Declined";
                                            } elseif ($service['is_approved'] == "") {
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
                                            <a  href="view_house_permission.php?appid=<?=$service['id']?>" class="btn btn-info btn-sm">
                                                <i class="fa fa-edit"></i>View
                                            </a>

                                            <a  href="house_permission_approved.php?appid=<?=$service['id']?>" class="btn btn-success btn-sm">
                                                <i class="fa fa-correct"></i>Approved
                                            </a>

                                            <a  href="house_permission_decline.php?appid=<?=$service['id']?>" class="btn btn-danger btn-sm">
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
