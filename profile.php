<?php session_start(); ?>
<?php
if (!isset($_SESSION['loggedin'])){
    header('location:signin_form.php');
    exit;
}
?>

<?php include_once 'temp/header.php'; ?>
<?php include_once 'temp/nav.php'; ?>


<?php
          include_once 'db_con.php';
          $conn = connect();
          $userid = $_SESSION['user_id'];

          $sql = "SELECT * FROM member WHERE id= '$userid'";
          $users = $conn -> query ($sql);

          $serial = 1;
          
      ?>
<div class="container">
    <div class="main-body">
    
         <?php
                                    foreach ($users as $user){
                                ?>
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4 style="color: black;"><?= $user['First_name']?> <?= $user['Last_name']?></h4>
                      <p class="text-secondary mb-1"><?= $user['Email']?></p>
                      <p class="text-muted font-size-sm"><?= $user['Phone']?></p>
                      <!-- <button class="btn btn-primary">Follow</button> 
                      <button class="btn btn-warning">Message</button>-->
                    </div>
                  </div>
                </div>
              </div>
           <?php } ?>
            </div>
            <div class="col-md-8">
              
      <?php
          include_once 'db_con.php';
          $conn = connect();
          $uid = $_SESSION['user_id'];

          $sql = "SELECT * FROM service WHERE user_id= '$uid'";
          $services = $conn -> query ($sql);

          $sql1 = "SELECT * FROM rickshaw WHERE user_id= '$uid'";
          $services1 = $conn -> query ($sql1);

          $sql2 = "SELECT * FROM house WHERE user_id= '$uid'";
          $services2 = $conn -> query ($sql2);

          $sql3 = "SELECT * FROM trade WHERE user_id= '$uid'";
          $services3 = $conn -> query ($sql3);
          
          $sql4 = "SELECT * FROM complain WHERE user_id= '$uid'";
          $services3 = $conn -> query ($sql3);

          $serial = 1;
          
      ?>
              <div class="row gutters-sm">
                <div class="col-sm-12 mb-6">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3">Application Status</h6>
                        <div class="card-body text-center">
                          <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                            <tr>   
                            <th>SL</th>
                            <th>APPLICATION TYPE</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($services as $service){
                                ?>
                                    <tr>
                                        <td><?= $serial++?></td>
                                        <td><?php 
                                            if ($service['service_name'] == 'birth_cer') {
                                                echo "Birth Certificate";
                                            } elseif ($service['service_name'] == 'nagorik_cer') {
                                                echo "Nationality Certificate";
                                            } elseif ($service['service_name'] == 'ch_cer') {
                                                echo "Character Certificate";
                                            } ?></td>
                                       
                                        <td> <?php 
                                            if ($service['is_approved'] == '1') {
                                                echo "Approved";
                                            } elseif ($service['is_approved'] == '0') {
                                                echo "Declined";
                                            } elseif ($service['is_approved'] == "") {
                                                echo "Pending";
                                            } ?>
                                        </td>
                                        <td><?php 
                                            if ($service['is_approved'] == '1') {
                                                echo "Ready for Dispatch.";
                                            } elseif ($service['is_approved'] == '0') {
                                                echo "Your application is Declined";
                                            } elseif ($service['is_approved'] == "") {
                                                echo "Waiting for Approval";
                                            } ?></td>
                                        
                                           

                                    </tr>
                                <?php } ?>

                                <?php
                                    foreach ($services1 as $service1){
                                ?>
                                    <tr>
                                        <td><?= $serial++?></td>
                                        <td><?php 
                                            if ($service1['service_type'] == 'rickshaw_cer') {
                                                echo "Rickshaw License";
                                            } elseif ($service1['service_type'] == 'van_cer') {
                                                echo "Van License";
                                            } ?></td>
                                        <td> <?php 
                                            if ($service1['is_approved'] == '1') {
                                                echo "Approved";
                                            } elseif ($service1['is_approved'] == '0') {
                                                echo "Declined";
                                            } elseif ($service1['is_approved'] == "") {
                                                echo "Pending";
                                            } 
                                        ?></td>

                                        
                                        <td><?php 
                                            if ($service1['is_approved'] == '1') {
                                                echo "Ready for Dispatch.";
                                            } elseif ($service1['is_approved'] == '0') {
                                                echo "Your application is Declined";
                                            } elseif ($service1['is_approved'] == "") {
                                                echo "Waiting for Approval";
                                            } ?></td>
                                          

                                    </tr>
                                <?php } ?>

                                 <?php
                                    foreach ($services2 as $service2){
                                ?>
                                    <tr>
                                        <td><?= $serial++?></td>
                                        <td><?php 
                                            if ($service2['type'] == 'residence') {
                                                echo "House Permission (Resi)";
                                            } elseif ($service2['type'] == 'business') {
                                                echo "House Permission (Bus)";
                                            } elseif ($service2['type'] == 'industry') {
                                                echo "House Permission (Indu)";
                                            } ?></td>
                                        <td> <?php 
                                            if ($service2['is_approved'] == '1') {
                                                echo "Approved";
                                            } elseif ($service2['is_approved'] == '0') {
                                                echo "Declined";
                                            } elseif ($service2['is_approved'] == "") {
                                                echo "Pending";
                                            } 
                                        ?></td>

                                       
                                        <td><?php 
                                            if ($service2['is_approved'] == '1') {
                                                echo "Ready for Dispatch.";
                                            } elseif ($service2['is_approved'] == '0') {
                                                echo "Your application is Declined";
                                            } elseif ($service2['is_approved'] == "") {
                                                echo "Waiting for Approval";
                                            } ?></td>
                                            
                                    </tr>
                                <?php } ?>

                                <?php
                                    foreach ($services3 as $service3){
                                ?>
                                    <tr>
                                        <td><?= $serial++?></td>
                                        <td><?php 
                                            if ($service3['type'] == 'single') {
                                                echo "TRADE LICIENCE SINGLE OWNER";
                                            } elseif ($service3['type'] == 'double') {
                                                echo "TRADE LICIENCE COMBINE OWNER";
                                            } elseif ($service3['type'] == 'company') {
                                                echo "TRADE LICIENCE COMPANY";
                                            } ?></td>
                                        <td> <?php 
                                            if ($service3['is_approved'] == '1') {
                                                echo "Approved";
                                            } elseif ($service3['is_approved'] == '0') {
                                                echo "Declined";
                                            } elseif ($service3['is_approved'] == "") {
                                                echo "Pending";
                                            } 
                                        ?></td>

                                        
                                        <td><?php 
                                            if ($service3['is_approved'] == '1') {
                                                echo "Ready for Dispatch.";
                                            } elseif ($service3['is_approved'] == '0') {
                                                echo "Your application is Declined";
                                            } elseif ($service3['is_approved'] == "") {
                                                echo "Waiting for Approval";
                                            } ?></td>
                                           
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>



            </div>
          </div>

        </div>
    </div>
    <?php include_once 'temp/footer.php'; ?>