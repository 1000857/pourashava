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
    include_once 'db_con.php';
    $conn = connect();
    $sql = "SELECT * FROM service";
    $services = $conn -> query ($sql);
    $serial = 1;
    ?>

    <div class="content mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title"><label>সেবা সমূহ <span class="required"></span></label>
                                            
                                                
         <select name="seba_type" class="form-control" required="">
                                                 <option value=""selected="">চিহ্নিত করুন</option>
                                                    <option value="ci_cer" >নাগরিকত্ব সনদ</option>
                                                    <option value="death_cer">মৃত্যু সনদ</option>
                                                    <option value="ch_cer">চারিত্রিক সনদ</option>
                                                    
                                                    <option value="homeless">ভূমিহীন সনদ</option>
                                                    
                                                    <option value="disable">প্রকৃত বাকঁ ও শ্রবন প্রতিবন্ধী</option>
                                                    <option value="hindu">সনাতন ধর্ম  অবলম্বী</option>
                                                    <option value="permit">অনুমতি পত্র</option>
                                                    <option value="transcript">প্রত্যয়ন পত্র</option>
                                                </select></strong>
                                            

    
                      
                    </div>
                    <div class="card-body text-center">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 3px;">Sl</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Father</th>
                                <th>Mother</th>
                                <th>Husband/Wife</th>
                                <th>NID/Birth Certificate No.</th>
                                <th>Birth Date</th>
                                <th>Gender</th>
                                <th>Occupassion</th>
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
                                <th>Photo</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($services as $service){
                                ?>
                                    <tr>
                                        <td><?= $serial++?></td>
                                        <td><?= $service['first_name']?></td>
                                        <td><?= $service['last_name']?></td>
                                        <td><?= $service['father']?></td>
                                        <td><?= $service['mother']?></td>
                                        <td><?= $service['husband_wife']?></td>
                                        <td><?= $service['nid']?></td>
                                        <td><?= $service['birth_day']?></td>
                                        <td><?= $service['gender']?></td>
                                        <td><?= $service['occupation']?></td>
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
                                        <td><?= $service['pic']?></td>






                                    
                                        <td>
                                            <a  href="#" class="btn btn-info btn-sm">
                                                <i class="fa fa-edit"></i>View
                                            </a>
                                            <form class="" action="user_delete_action.php" method="post" style="display:inline">
                                                <input type="hidden" name="user_id" value="">
                                                <button title="Approved" type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                                    <i class="fa fa-trash"></i>Approve
                                                </button>
                                            </form>
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
