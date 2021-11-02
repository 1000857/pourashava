<?php include_once 'temp/header.php'; ?>
<?php include_once 'temp/nav.php'; ?>

<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">BOOK AN APPOINMENT</h2>

                <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset ($_SESSION['msg']);
                }
                ?>
    <?php 
     $id = $_GET['doctor_id'];                               
    include_once 'db_con.php';
    $conn = connect();

    $sql = "SELECT * FROM appointment WHERE doctor_id=$id GROUP BY date";
    $services = $conn -> query ($sql);
    $serial = 1;
    
    
?>
                <form action="patient_appoinment_confirm.php" method="POST">
                    
                    
                    
           <div class="col col-md-9"> 
           
            <div class="form-check">
                <?php
                                    foreach ($services as $service){
                                ?>
                <div class="radio">

                    <label for="checkbox1" style="color: black;" class="form-check-label ">
                        <input type="radio" id="checkbox1" name="date" value="<?= $service['date']?>" class="form-check-input"><?= $service['date']?></br>
                        
                </div>
                <?php } ?>
        

                    <div class="p-t-15">
                        <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div></div>
<!-- Jquery JS-->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/datepicker/moment.min.js"></script>
<script src="vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="js/global.js"></script>


<?php include_once 'temp/footer.php'; ?>
<!-- end document-->