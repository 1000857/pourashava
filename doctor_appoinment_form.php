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

<!-- Left Panel -->
<div id="right-panel" class="right-panel">

    <!-- Header-->
    <?php include_once 'template/header.php'?>
    <!-- Header-->

<div class="col-lg-10">
    <div class="card">
    <div class="card-header">
        <strong>CREATE DOCTOR APPOINMENT SLOT</strong>
    </div>
<div class="card-body card-block">
                <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset ($_SESSION['msg']);
                }
                ?>
    <form action="doctor_appoinment.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
         <?php
          include_once 'db_con.php';
          $conn = connect();
         

          $sql = "SELECT * FROM employee WHERE Post= 10";
          $users = $conn -> query ($sql);

          $serial = 1;
          
      ?>
      
    <div class="row form-group">
        
        <div class="col col-md-3"><label for="select" class=" form-control-label">Doctor Name</label></div>
        <div class="col-12 col-md-9">
            <select name="doctor" id="select" class="form-control">
                <option value="">Please select</option>
                <?php
                                foreach ($users as $user){
                            ?>
                
                <option value="<?= $user['id']?>"><?= $user['First_name']?> <?= $user['Last_name']?></option>
                    <?php } ?>
                
            </select>
        </div>
    
    </div>
        
      
      
      
      
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Date</label></div>
            <div class="col-12 col-md-9"><input type="date" id="text-input" name="date" placeholder="Date" class="form-control"><small class="form-text text-muted"></small></div>
        </div>

        <div class="row form-group">
        <div class="col col-md-3"><label class=" form-control-label">Time Slot</label></div>

        <div class="col col-md-9">
            <div class="form-check">
                <div class="checkbox">
                    <label for="checkbox1" class="form-check-label ">
                        <input type="checkbox" id="checkbox1" name="slot[]" value="10:00" class="form-check-input">10:00AM
                </div>
                <div class="checkbox">
                    <label for="checkbox2" class="form-check-label ">
                        <input type="checkbox" id="checkbox2" name="slot[]" value="10:30" class="form-check-input"> 10:30AM
                    </label>
                </div>
                
                <div class="checkbox">
                    <label for="checkbox4" class="form-check-label ">
                        <input type="checkbox" id="checkbox4" name="slot[]" value="11:00" class="form-check-input">11:00AM
                    </label>
                </div>
                
                <div class="checkbox">
                    <label for="checkbox6" class="form-check-label ">
                        <input type="checkbox" id="checkbox6" name="slot[]" value="11:30" class="form-check-input">11:30AM
                    </label></div>
             
                <div class="checkbox">
                    <label for="checkbox8" class="form-check-label ">
                        <input type="checkbox" id="checkbox8" name="slot[]" value="12:00" class="form-check-input">12:00PM
                    </label>
                </div>
                
                <div class="checkbox">
                    <label for="checkbox10" class="form-check-label ">
                        <input type="checkbox" id="checkbox10" name="slot[]" value="12:30" class="form-check-input">12:30PM
                    </label>
                </div>
                
                <div class="checkbox">
                    <label for="checkbox12" class="form-check-label ">
                        <input type="checkbox" id="checkbox12" name="slot[]" value="01:00" class="form-check-input">01:00PM
                    </label>
                </div>
                
                <div class="checkbox">
                    <label for="checkbox14" class="form-check-label ">
                        <input type="checkbox" id="checkbox14" name="slot[]" value="02:30" class="form-check-input"> 02:30PM
                    </label>
                </div>
                <div class="checkbox">
                    <label for="checkbox15" class="form-check-label ">
                        <input type="checkbox" id="checkbox15" name="slot[]" value="03:00" class="form-check-input">03:00PM
                    </label>
                </div>
                <div class="checkbox">
                    <label for="checkbox16" class="form-check-label ">
                        <input type="checkbox" id="checkbox16" name="slot[]" value="03:30" class="form-check-input">03:30PM
                    </label>
                </div>
                <div class="checkbox">
                    <label for="checkbox17" class="form-check-label ">
                        <input type="checkbox" id="checkbox17" name="slot[]" value="04:00" class="form-check-input"> 04:00PM
                    </label>
                </div>
                
                
                
            </div>
        </div>
    </div>
            
            
           
           
            
            
            
            
           
            
            
                   
                    
                    
                   <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>
            </form>
        </div>
        
    </div>
                

<?php include_once 'template/footer.php'?>
<!-- end document-->