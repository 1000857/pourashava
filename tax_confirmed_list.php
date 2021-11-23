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
                    <h1>Tax Confirmation List</h1>
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
    $sql = "SELECT house.id as id, house.name as fname, house.nid as nid, house.dob as dob, house.phone as phone, tax.year, tax.amount, tax.is_approved, tax.applicant_id FROM tax
        INNER JOIN house ON tax.applicant_id = house.id";
    $services = $conn -> query ($sql);
    $serial = 1;
    }
    
?>
                    
<form action="tax_confirmed_search.php" method="GET">
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
                                <th>NID</th>
                                <th>DOB</th>
                                <th>Phone</th>
                                <th>Year</th>
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
                                        <td><?= $service['nid']?></td>
                                        <td><?= $service['dob']?></td>
                                        <td><?= $service['phone']?></td>
                                        <td><?= $service['year']?></td>
                                        <td><?= $service['amount']?></td>
                                        
                                        <td><?php 
                                            if ($service['is_approved'] =="") {
                                                echo "Pending";
                                             
                                            } elseif ($service['is_approved'] == 1) {
                                                echo "Received";
                                            } 
                                        ?></td>
                                        <td>
                                           <?php if ($service['is_approved'] == 1) { ?>
                                               <a  href="view_tax_certificate.php?appid=<?=$service['id']?>" class="btn btn-info btn-sm">
                                                <i class="fa fa-edit"></i>View
                                            </a>
                                           <?php } else { ?>
                                                <a  href="tax_approved.php?appid=<?=$service['applicant_id']?>" class="btn btn-success btn-sm">
                                                    <i class="fa fa-check"> </i>Received
                                                </a>

                                            <?php } ?>
                                            


                                            
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
