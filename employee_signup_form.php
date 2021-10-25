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
        <strong>CREATE EMPLOYEE</strong> Elements
    </div>
<div class="card-body card-block">
                <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset ($_SESSION['msg']);
                }
                ?>
    <form action="employee.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <div class="row form-group">
        <div class="col col-md-3"><label for="select" class=" form-control-label">Job Designation</label></div>
        <div class="col-12 col-md-9">
            <select name="user" id="select" class="form-control">
                <option value="">Please select</option>
                <option value="4">Mayor</option>
                <option value="5">License Inspector</option>
                <option value="6">Tax Collector</option>
                <option value="7">Architect</option>
                <option value="8">Ass. Architect</option>
                <option value="9">Administrative Officer</option>
                
            </select>
        </div>
    </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Employee ID</label></div>
            <div class="col-12 col-md-9"><input type="number" id="text-input" name="eid" placeholder="Employee ID" class="form-control"><small class="form-text text-muted"></small>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">First Name</label></div>
            <div class="col-12 col-md-9"><input type="text" id="text-input" name="fname" placeholder="First Name" class="form-control"><small class="form-text text-muted"></small>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Last Name</label></div>
            <div class="col-12 col-md-9"><input type="text" id="text-input" name="lname" placeholder="Last Name" class="form-control"><small class="form-text text-muted"></small>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email </label></div>
            <div class="col-12 col-md-9"><input type="email" id="email-input" name="email" placeholder="Enter Email" class="form-control"><small class="help-block form-text">Please enter your email</small></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Password</label></div>
            <div class="col-12 col-md-9"><input type="password" id="password-input" name="password" placeholder="Password" class="form-control"><small class="help-block form-text">Please enter a complex password</small></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Birth Date</label></div>
            <div class="col-12 col-md-9"><input type="date" id="text-input" name="bdate" placeholder="Birth Day" class="form-control"><small class="form-text text-muted"></small></div>
        </div>
        
            
            
           
           
            
            <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">GENDER</label></div>
                <div class="col col-md-9">
                    <div class="form-check">
                        <div class="radio">
                            <label for="radio1" class="form-check-label ">
                                <input type="radio" id="radio1" name="gender" value="male" class="form-check-input">Male
                            </label>
                        </div>
                        <div class="radio">
                            <label for="radio2" class="form-check-label ">
                                <input type="radio" id="radio2" name="gender" value="female" class="form-check-input">Female
                            </label>
                        </div>
                        <div class="radio">
                            <label for="radio3" class="form-check-label ">
                                <input type="radio" id="radio3" name="gender" value="other" class="form-check-input">Other
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Phone</label></div>
            <div class="col-12 col-md-9"><input type="text" id="text-input" name="phone" placeholder="Phone Number" class="form-control"><small class="form-text text-muted"></small></div>
            </div>
            
            <label>Passport Size Photo <span class="required">*</span></label>
            <input type="file" name="photo" id="photo" class="field-long" />
            
            
                   
                    
                    
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