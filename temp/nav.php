<div class="bgded overlay padtop" style="">
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <header id="header" class="hoc clear">
        <div id="logo" class="fl_left">
            <!-- ################################################################################################ -->
            <img src="images/bd.png" style="height: 60px; width: 60px;">
            <h1><a href="index.php" style="margin-left: -22px;">Pourashava</a></h1>
            <!-- ################################################################################################ -->
        </div>
        <nav id="mainav" class="fl_right">
            <!-- ################################################################################################ -->
            <ul class="clear">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a class="drop" href="#">Public Applications</a>
                    <ul>
                        <li><a href="form.php">Gallery</a></li>
                        <li><a href="form.php">CHARACTER CERTIFICATE APPLICATION</a></li>
                        <li><a href="form.php">BIRTH CERTIFICATE APPLICATION
</a></li>
                        <li><a href="form.php">NATIONALITY CERTIFICATE APPLICATION</a></li>
                        <li><a href="pages/basic-grid.html">Basic Grid</a></li>
                        <li><a href="pages/font-icons.html">Font Icons</a></li>
                    </ul>
                </li>
                <li><a class="drop" href="#">LICENSE APPLICATIONS</a>
                    <ul>
                        <li><a href="trade_license_form.php">TRADE LICENSE</a></li>
                        <li><a class="drop" href="#">RICKSHAW LICENSE</a>
                            <ul>
                                
                                <li><a href="rickshaw_form.php">Rickshaw LICENSE</a></li>
                                <li><a href="rickshaw_form.php">VAN LICENSE</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="house_permission_form.php">HOUSE PERMISSION</a></li>
                    </ul>
                </li>
                <?php
                    if(!isset($_SESSION['loggedin'])){
                ?>
                    <li><a href="employee_portal.php">Portal</a></li>
                <?php  } elseif (isset($_SESSION['employee_role'])) { ?>
                        <li><a href="employee_portal.php">Portal</a></li>
                <?php } ?>
                <li><a href="doctor_list.php">DOCTOR APPOINTMENT</a></li>
                <li><a href="complain_form.php">COMPLAIN</a></li>
            </ul>
            <!-- ################################################################################################ -->
        </nav>
    </header>