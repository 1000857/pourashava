
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
                    <h1>Issue Tax</h1>
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
    $sql = "SELECT * FROM house WHERE is_approved = 1";
    $services = $conn -> query ($sql);
    $serial = 1;
    
    
?>

    <div class="content mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    
                    <form action="tax_confirm.php" method="POST">
                        <div class="card-header">
                        
                        <strong class="card-title">
                            <label>Year <span class="required"></span></label>
                                            
                                                
                
                        <label>Year:<span class="required">*</span></label>
                            <input type="month" name="year" class="field-long" placeholder="Input year" /></br>
                            <label>Amount:<span class="required">*</span></label>
                            <input type="number" name="amount" class="field-long" placeholder="Insert Amount" /></br></strong>
        
                      
                        
                    
                    </div>
                        

                    <div class="card-body text-center">
                        

                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 3px;">Sl</th>
                                <th>Action</th>
                                <th>Tax Type</th>
                                
                                <th>Name</th>
                                <th>Father</th>
                                <th>NID/Birth Certificate No.</th>
                                <th>Birth Date</th>
                                <th>Status</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($services as $service){
                                ?>
                                    <tr>
                                        <td><?= $serial++?></td>
                                        <td>
                                           
                                              <input type="checkbox" id="tax" name="tax[ ]" value=" <?=$service['id']?> "></br>Issue Tax<br>
                                              
                                           
                                            </td>

                                       
                                        <td><?= $service['type']?></td>
                                        
                                        <td><?= $service['name']?></td>
                                        
                                        <td><?= $service['father']?></td>
                                        
                                        
                                        <td><?= $service['nid']?></td>
                                        <td><?= $service['dob']?></td>

                                        <td><?php 
                                            if ($service['is_approved'] == '1') {
                                                echo "Varified";
                                            } elseif ($service['is_approved'] == '0') {
                                                echo "Declined";
                                            } elseif ($service['is_approved'] == "") {
                                                echo "Pending";
                                            } 
                                        ?></td>
                                         








                                    
                                      
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
