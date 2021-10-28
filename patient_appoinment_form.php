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
                <form action="signup.php" method="POST">
                    
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">APPOINMENT DATE</label>
                                <div class="input-group-icon">
                                    <input class="input--style-4 " type="date" name="bdate">

                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
          <div class="col col-md-9">
            <label class="label">SLOT</label>
            <div class="form-check">
                <div class="checkbox">
                    <label for="checkbox1" style="color: black;" class="form-check-label ">
                        <input type="checkbox" id="checkbox1" name="slot[]" value="10:00:00" class="form-check-input">10:00AM
                </div>
                <div class="checkbox">
                    <label for="checkbox2" style="color: black;" class="form-check-label ">
                        <input type="checkbox" id="checkbox2" name="slot[]" value="10:30:00" class="form-check-input"> 10:30AM
                    </label>
                </div>
                
                <div class="checkbox">
                    <label for="checkbox4" style="color: black;" class="form-check-label ">
                        <input type="checkbox" id="checkbox4" name="slot[]" value="11:00:00" class="form-check-input">11:00AM
                    </label>
                </div>
                
                <div class="checkbox">
                    <label for="checkbox6" style="color: black;" class="form-check-label ">
                        <input type="checkbox" id="checkbox6" name="slot[]" value="11:30:00" class="form-check-input">11:30AM
                    </label></div>
             
                <div class="checkbox">
                    <label for="checkbox8" style="color: black;" class="form-check-label ">
                        <input type="checkbox" id="checkbox8" name="slot[]" value="12:00:00" class="form-check-input">12:00PM
                    </label>
                </div>
                
                <div class="checkbox">
                    <label for="checkbox10" style="color: black;" class="form-check-label ">
                        <input type="checkbox" id="checkbox10" name="slot[]" value="12:30:00" class="form-check-input">12:30PM
                    </label>
                </div>
                
                <div class="checkbox">
                    <label for="checkbox12" style="color: black;" class="form-check-label ">
                        <input type="checkbox" id="checkbox12" name="slot[]" value="01:00:00" class="form-check-input">01:00PM
                    </label>
                </div>
                
                <div class="checkbox">
                    <label for="checkbox14" style="color: black;" class="form-check-label ">
                        <input type="checkbox" id="checkbox14" name="slot[]" value="02:30:00" class="form-check-input"> 02:30PM
                    </label>
                </div>
                <div class="checkbox">
                    <label for="checkbox15" style="color: black;" class="form-check-label ">
                        <input type="checkbox" id="checkbox15" name="slot[]" value="03:00:00" class="form-check-input">03:00PM
                    </label>
                </div>
                <div class="checkbox">
                    <label for="checkbox16" style="color: black;" class="form-check-label ">
                        <input type="checkbox" id="checkbox16" name="slot[]" value="03:30:00" class="form-check-input">03:30PM
                    </label>
                </div>
                <div class="checkbox">
                    <label for="checkbox17" style="color: black;" class="form-check-label ">
                        <input type="checkbox" id="checkbox17" name="slot[]" value="04:00:00" class="form-check-input"> 04:00PM
                    </label>
                </div>
                
                
                
            </div>
        </div>
                    <div class="p-t-15">
                        <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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