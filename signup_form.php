<?php include_once 'temp/header.php'; ?>
<?php include_once 'temp/nav.php'; ?>

<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Registration Form</h2>

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
                                <label class="label">first name</label>
                                <input class="input--style-4" type="text" name="fname">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">last name</label>
                                <input class="input--style-4" type="text" name="lname">
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Birthday</label>
                                <div class="input-group-icon">
                                    <input class="input--style-4 " type="date" name="bdate">

                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Gender</label>
                                <div class="p-t-10">
                                    <label class="radio-container m-r-45">Male
                                        <input type="radio" value="male" checked="checked" name="gender">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">Female
                                        <input type="radio" value="female" name="gender">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Email</label>
                                <input class="input--style-4" type="email" name="email">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Phone Number</label>
                                <input class="input--style-4" type="text" name="phone">
                            </div>
                        </div>


                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Create a Password</label>
                                <input class="input--style-4" type="password" name="password">
                            </div>
                        </div>
                    </div>
               
                        <div class="col-2">
                            <div class="input-group">
                            <label style="color: black;">Passport Size Photo <span class="required">*</span></label>
                            <input type="file" name="photo" id="name" class="field-long" />
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