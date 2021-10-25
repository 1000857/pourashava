<?php session_start(); ?>
<?php
if (!isset($_SESSION['loggedin'])){
    header('location:signin_form.php');
    exit;
}
?>
<?php include_once 'template2/_head.php'?>

<body>


<!-- Left Panel -->
<?php include_once 'template2/leftNav.php'?>
<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <?php include_once 'template2/header.php'?>
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Allowance Applicant List</h1>
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
    $sql = "SELECT * FROM salary_confirmed ";
    $services = $conn -> query ($sql);
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
                                <th>ID</th>
                                
                                <th>Month</th>
                                
                                
                                <th>Amount</th>
                                
                                <th>Status</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($services as $service){
                                ?>
                                    <tr>
                                        <td><?= $serial++?></td>
                                        

                                       
                                        <td><?= $service['employee_id']?></td>
                                        <td><?= $service['month']?></td>
                                      
                                        
                                        <td><?= $service['amount']?></td>
                                        
                                        
                                        
                                        <td><?php 
                                            if ($service['is_approved'] == '1') {
                                                echo "Received";
                                            }  elseif ($service['is_approved'] == "") {
                                                echo "Pending";
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






                                    
                                        <!--<td>
                                            <a  href="view_allowance.php?appid=<?=$service['id']?>" class="btn btn-info btn-sm">
                                                <i class="fa fa-edit"></i>View
                                            </a>

                                            <a  href="trade_license_approved.php?appid=<?=$service['id']?>" class="btn btn-success btn-sm">
                                                <i class="fa fa-correct"></i>Approved
                                            </a>

                                            <a  href="trade_license_decline.php?appid=<?=$service['id']?>" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>Decline
                                            </a>



                                            
                                        </td>-->
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
<?php include_once 'template2/footer.php'?>
