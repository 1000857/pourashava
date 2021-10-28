<?php session_start()?>
<?php include_once 'template2/head.php'?>

<body>


    <!-- Left Panel -->
        <?php include_once 'template2/Nav.php'?>
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
            <?php include_once 'template2/header2.php'?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>MY PROFILE</h1>
                    </div>
                </div>
            </div>
           
        </div>

       <?php
          include_once 'db_con.php';
          $conn = connect();
          $userid = $_SESSION['user_id'];

          $sql = "SELECT * FROM employee WHERE id= '$userid'";
          $users = $conn -> query ($sql);

          $serial = 1;
          
      ?>
      
       <div class="col-md-12">
                            <?php
                                foreach ($users as $user){
                            ?>
                        <aside class="profile-nav alt">
                            <section class="card">
                                <div class="card-header user-header alt bg-dark">
                                    <div class="media">
                                        <a href="#">
                                            <img class="align-self-center rounded-circle mr-3" style="width:105px; height:105px;" alt="" src="images/employee/<?= $user['Pic']?>">
                                        </a>
                                        <div class="media-body">
                                            <h2 class="text-light display-6" ><?= $user['First_name']?> <?= $user['Last_name']?></h2>
                                            <p><?php 
                                            if ($user['Post'] == '4') {
                                                echo "Mayor";
                                            } elseif ($user['Post'] == '5') {
                                                echo "License Inspector";
                                            }
                                            elseif ($user['Post'] == '6') {
                                                echo "Tax Collector";
                                            }
                                            elseif ($user['Post'] == '7') {
                                                echo "Architect";
                                            }
                                            elseif ($user['Post'] == '8') {
                                                echo "Ass. Architect";
                                            }
                                            elseif ($user['Post'] == '9') {
                                                echo "Administrative Officer";
                                            }
                                            elseif ($user['Post'] == '10') {
                                                echo "Doctor";
                                            }  
                                        ?>(<?= $user['Expert']?>)</p>
                                        </div>
                                        
                                    </div>
                                    <div class="col-sm-12">
                
                                        <button type="submit" class="page-header float-right">
                                        <i class=""></i><a href="employee_update_profile_form.php">Edit Profile</a> 
                                        </button>
                       
                                    </div>
                                    
                                </div>


                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-user"></i> FULL NAME <span class="badge badge- pull-right" style="color:green;font-size:20px;"><?= $user['First_name']?> <?= $user['Last_name']?></span></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-envelope"></i> EMAIL <span class="badge badge- pull-right" style="color:green;font-size:20px;"><?= $user['Email']?></span></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-phone"></i> PHONE <span class="badge badge- pull-right" style="color:green;font-size:20px;"><?= $user['Phone']?></span></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-suitcase"></i> JOB DESIGNATION <span class="badge badge- pull-right r-" style="color:green;font-size:20px;"><?php 
                                            if ($user['Post'] == '4') {
                                                echo "Mayor";
                                            } elseif ($user['Post'] == '5') {
                                                echo "License Inspector";
                                            }
                                            elseif ($user['Post'] == '6') {
                                                echo "Tax Collector";
                                            }
                                            elseif ($user['Post'] == '7') {
                                                echo "Architect";
                                            }
                                            elseif ($user['Post'] == '8') {
                                                echo "Ass. Architect";
                                            }
                                            elseif ($user['Post'] == '9') {
                                                echo "Administrative Officer";
                                            }
                                            elseif ($user['Post'] == '10') {
                                                echo "Doctor";
                                            } 
                                        ?> (<?= $user['Expert']?>)</span></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-calendar"></i> BIRTH DATE <span class="badge badge- pull-right r-activity" style="color:green;font-size:20px;"><?= $user['Birthday']?></span></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-credit-card"></i> OFFICE ID <span class="badge badge- pull-right r-activity" style="color:green;font-size:20px;"><?= $user['Employee_id']?></span></a>
                                    </li>
                                </ul>

                            </section>
                        </aside>
                        <?php } ?>
                    </div>
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
<?php include_once 'template2/footer2.php'?>
