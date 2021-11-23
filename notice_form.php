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

<div class="col-lg-12">
    <div class="card">
    <div class="card-header">
        <strong>NOTICE</strong>
    </div>
<div class="card-body card-block">
             <?php 
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset ($_SESSION['msg']);
                }
                ?>
    <form action="notice.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
      
  
        
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Notice Title</label></div>
            <div class="col-12 col-md-9"><input type="text" id="text-input" name="notice" placeholder="Write Notice Title" class="form-control"><small class="form-text text-muted"></small>
            </div>
        </div>
        
       
         <div class="row form-group">
            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Notice Description</label></div>
            <div class="col-12 col-md-9"><textarea name="notice_des" id="textarea-input" rows="9" placeholder="Notice" class="form-control"></textarea></div>
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