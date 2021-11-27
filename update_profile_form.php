<?php include_once 'temp/header.php'; ?>
<?php include_once 'temp/nav.php'; ?>
<?php 

$uid = $_SESSION['user_id'];

    if(!$_SESSION['loggedin']){
        header("location:sign_in_form.php");
    }

    include_once 'db_con.php';
    $conn = connect();

    $sql = "SELECT * FROM member WHERE id = '$uid'";
    $result = $conn->query($sql);
    
    foreach($result AS $row){

?>


    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Update Your Profile</h2>
<?php 
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset ($_SESSION['msg']);
                }
        ?>
                    <form action="update_profile.php" method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">first name</label>
                                    <input class="input--style-4" type="text" value ="<?=$row['First_name']?>" name="fname">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" value ="<?=$row['Last_name']?>"name="lname">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 " type="date" value ="<?=$row['Birthday']?>"name="bdate">

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" value ="<?=$row['Email']?>"name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" value ="<?=$row['Phone']?>" name="phone">
                                </div>
                            </div>



                        </div>
                        
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button></br>
                            
                        </div>
                    </form>
                    <a class="btn btn-success btn-sm" href="change_pass_form.php"><b>Change password</b></a>
                    <a href="delete_profile.php" class="btn btn-danger btn-sm"><b>Delete account</b></a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
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














