
<?php session_start()?>
<!DOCTYPE html>

<html lang="en">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
    <title>Spourmo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
    <div id="topbar" class="hoc clear">
        <!-- ################################################################################################ -->
        <div class="fl_left">
            <ul class="nospace">
                <li><i class="fas fa-mobile-alt rgtspace-5"></i> +00 (123) 456 7890</li>
                <li><i class="far fa-envelope rgtspace-5"></i> info@domain.com</li>
            </ul>
        </div>
        <div class="fl_right">
            <ul class="nospace">


                 
<div class="dropdown">
   <?php 
            if(isset($_SESSION['loggedin']) && $_SESSION['user_role']!=1){ ?>
  <button class="dropbtn"><?php echo $_SESSION['user_name']; ?></button>
  <div class="dropdown-content">
    <a href="update_profile_form.php">Update profile</a>
    <a href="change_pass_form.php">Change password</a>
    <a href="logout.php">Logout</a>
  </div>
  <?php }elseif(isset($_SESSION['loggedin']) && $_SESSION['user_role']==1){ ?> 
    <button class="dropbtn">Admin</button>
  <div class="dropdown-content">
    <a href="dashboard.php">Admin Dashboard</a>
    <a href="change_pass_form.php">Change password</a>
    <a href="logout.php">Logout</a>

  </div>
  <?php }else{ ?>
    <button class="dropbtn">Account</button>
  <div class="dropdown-content">
    <a href="signin_form.php">Sign In</a>
    <a href="#">Sign Up</a>
    

  </div>
  <?php } ?>
</div>


                <li id="searchform">
                    <div>
                        <form action="#" method="post">
                            <fieldset>
                                <legend>Quick Search:</legend>
                                <input type="text" placeholder="Enter search term&hellip;">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </fieldset>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
        <!-- ################################################################################################ -->
    </div>
</div>