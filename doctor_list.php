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
                    <img style="height: 200px; width: 200px;" src="images/employee/<?= $user['Pic']?>" alt="Admin" class="rounded-circle" width="150"></br> 
                    
                
                    <div class="mt-6">
                      <h4 style="color: Black;"><strong><?= $user['First_name']?> <?= $user['Last_name']?></strong></h4></br>
                      <p class="text-secondary mb-1"><strong>EXPERT IN:</strong> <?= $user['Expert']?></p>
                      <p class="text-muted font-size-sm"><strong>PHONE: </strong> <?= $user['Phone']?></p> </br>

                      <a class="btn btn-primary" href="patient_appoinment_form.php?doctor_id=<?= $user['id']?>" >REQUEST AN APPOINTMENT </a>

                    
                      
                    </div>
                  </div>
                </div>
              </div>
              
              
                
                  
                  
                  
                
               
              </div>
              <?php } ?>
            </div>



            
</div>
</div>


            </div>
          
    <?php include_once 'temp/footer.php'; ?>