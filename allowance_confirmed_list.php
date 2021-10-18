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
                    <h1>Allowance Confirmation List</h1>
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
    $sql = "SELECT allowance.id as id, allowance.first_name as fname, allowance.nid as nid, allowance.dob as dob, allowance.phone as phone, allowance_confirmed.month, allowance_confirmed.amount FROM allowance_confirmed
        INNER JOIN allowance ON allowance_confirmed.applicant_id = allowance.id";
    $services = $conn -> query ($sql);
    $serial = 1;
    }
    
?>
                    
<form action="allowance_confirm_search.php" method="GET">
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

                    
                    <form action="allowance_confirm.php" method="POST">
                  
                        
                       
                        

                    <div class="card-body text-center">
                        

                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 3px;">Sl</th>
                                
                                
                                <th>Name</th>
                                <th>NID</th>
                                <th>DOB</th>
                                <th>Phone</th>
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
                                       

                                       
                                        <td><?= $service['fname']?></td>
                                        <td><?= $service['nid']?></td>
                                        <td><?= $service['dob']?></td>
                                        <td><?= $service['phone']?></td>
                                        <td><?= $service['month']?></td>
                                        <td><?= $service['amount']?></td>
                                        <td>
                                           

                                            <a  href="allowance_approved.php?appid=<?=$service['id']?>" class="btn btn-success btn-sm">
                                                <i class="fa fa-check"> </i>Received
                                            </a>

                                            


                                            
                                        </td>
                                        
                                        
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
<?php include_once 'template/footer.php'?>
