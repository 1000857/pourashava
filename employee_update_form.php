
<?php include_once 'template/_head.php'?>

<body>


<!-- Left Panel -->
<?php include_once 'template/leftNav.php'?>
<!-- Left Panel -->

<!-- Left Panel -->
<div id="right-panel" class="right-panel">

    <!-- Header-->
    <?php include_once 'template/header.php'?>
    <!-- Header-->

<?php 

$epid = $_GET['emp_id'];

    if(!$_SESSION['loggedin']){
        header("location:sign_in_form.php");
    }

    include_once 'db_con.php';
    $conn = connect();
    $sql = "SELECT * FROM employee Where id = '$epid'";
    $services = $conn -> query ($sql);
    $serial = 1;
   
    
    
                                
?>
<div class="col-lg-12">
    <div class="card">
    <div class="card-header">
        <strong>CREATE STAFF</strong>
    </div>
<div class="card-body card-block">
                <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset ($_SESSION['msg']);
                }
                ?>

                <?php
                 foreach ($services as $service){
                                ?>
    <form action="employee_update.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
       
   
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Staff ID</label></div>
            <div class="col-12 col-md-9"><input type="number" id="text-input" name="eid" placeholder="Staff ID" class="form-control" value ="<?=$service['Employee_id']?>"><small class="form-text text-muted"></small>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">First Name</label></div>
            <div class="col-12 col-md-9"><input type="text" id="text-input" name="fname" placeholder="First Name" class="form-control" value ="<?=$service['First_name']?>"><small class="form-text text-muted"></small>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Last Name</label></div>
            <div class="col-12 col-md-9"><input type="text" id="text-input" name="lname" placeholder="Last Name" class="form-control" value ="<?=$service['Last_name']?>"><small class="form-text text-muted"></small>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email </label></div>
            <div class="col-12 col-md-9"><input type="email" id="email-input" name="email" placeholder="Enter Email" class="form-control" value ="<?=$service['Email']?>"><small class="help-block form-text">Please enter your email</small></div>
        </div>
        
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Birth Date</label></div>
            <div class="col-12 col-md-9"><input type="date" id="text-input" name="bdate" placeholder="Birth Day" class="form-control" value ="<?=$service['Birthday']?>"><small class="form-text text-muted"></small></div>
        </div>
        
            
            
           
           
            
            
            <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Phone</label></div>
            <div class="col-12 col-md-9"><input type="text" id="text-input" name="phone" placeholder="Phone Number" class="form-control" value ="<?=$service['Phone']?>"><small class="form-text text-muted"></small></div>
            </div>
            
            
            
            
                   
               

                    
                   <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>
        <input type="hidden" name="eidd" value="<?=$epid?>">
            </form><?php } ?> 
        </div>
        
    </div>

                    
<?php include_once 'template/footer.php'?>
<!-- end document-->