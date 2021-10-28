<?php include_once 'temp/header.php'; ?>
<?php include_once 'temp/nav.php'; ?>



<div class="container">
    <div class="main-body">
    
          <?php
          include_once 'db_con.php';
          $conn = connect();
         

          $sql = "SELECT * FROM employee WHERE Post= 10";
          $users = $conn -> query ($sql);

          $serial = 1;
          
      ?>
    
          <div class="row gutters-sm">
            <?php
                                foreach ($users as $user){
                            ?>
            <div class="col-md-4 mb-6">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="images/admin.jpg" alt="Admin" class="rounded-circle" width="150">
                    
                
                    <div class="mt-6">
                      <h4 style="color: red;"><?= $user['First_name']?> <?= $user['Last_name']?></h4></br>
                      <p class="text-secondary mb-1"><?= $user['Expert']?></p>
                      <p class="text-muted font-size-sm"><?= $user['Phone']?></p>

                    <button class="btn btn-primary">Follow</button> 
                      <?php } ?>
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