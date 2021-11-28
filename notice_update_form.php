
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

    <?php 
                                    
    $noid = $_SESSION['user_id'];

    if(!$_SESSION['loggedin']){
        header("location:employee_signin_form.php");
    }
    include_once 'db_con.php';
    $conn = connect();
    $sql = "SELECT * FROM notice WHERE id = $noid";
    $services = $conn -> query ($sql);
    $serial = 1;
    
    foreach ($services as $service){
?>
                                    
                                
    <form action="notice_update.php?noticeid=<?=$service['id']?>p" method="POST" enctype="multipart/form-data" class="form-horizontal">
      
  
        
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Notice Title</label></div>
            <div class="col-12 col-md-9"><input type="text" id="text-input" name="notice" placeholder="Write Notice Title" value="<?=$service['title']?>" class="form-control"><small class="form-text text-muted"></small>
            </div>
        </div>
        
       
         <div class="row form-group">
            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Notice Description</label></div>
            <div class="col-12 col-md-9"><textarea name="notice_des" id="textarea-input" rows="9" placeholder="Notice" value="<?=$service['description']?>" class="form-control"></textarea></div>
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
            <?php } ?>
        </div>
        
    </div>
                

<?php include_once 'template/footer.php'?>
<!-- end document-->