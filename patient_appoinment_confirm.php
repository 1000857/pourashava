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
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  
    $date = $_POST['date'];


include_once 'db_con.php';

$conn= connect();
$sql = "SELECT * FROM appointment WHERE date= '$date' AND is_approved=0";
  $output = $conn->query($sql);

?>

                <form action="patient_appointment.php" method="POST">
                    
                   <label style="color:black">Date</label>
                  <input style="color:black" name="date" id="date" type="text" class="validate" value="<?php echo $date ?>" readonly>

           <div class="col col-md-9"> 
           
            <div class="form-check">
                <?php 
                                    if($output-> num_rows > 0){
                                        $i=0;
                                        foreach($output AS $row){ 
                                            
                                        
                                ?>
                <div class="radio">

                    <label for="filled-in-box<?php print $i; ?>" style="color: black;" class="form-check-label "><?=$row['time']?></label>
                        <input type="radio" id="filled-in-box<?php print $i; ?>" name="time" value="<?=$row['time']?>" class="form-check-input"><?= $row['time']?></br>
                        
                </div>
                <?php $i++?>
                                <?php  } }?>
                <?php } ?>
        

                    <input type="hidden" name="status" value="1">
                            <input type="hidden" name="doctor_id" value="<?=$row['doctor_id']?>">
                            <input name="register" type="submit" value="Register" class="btn px-5 btn-primary">
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