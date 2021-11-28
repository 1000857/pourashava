<?php session_start()?>
 <?php
 if(!$_SESSION['loggedin']){
        header("location:signin_form.php");
    }
?>

<?php include_once 'temp/header.php'; ?>
<?php include_once 'temp/nav.php'; ?>




        <div id="page-wrapper" ></br>
		  <div class="col-lg-12" style=""> 
                        <h1 class="page-header" style="color: black;">
                             Appointment Information
                        </h1>
						 
									
		</div>
		
            


           <!-- Table start -->
           
           <?php $id = $_SESSION['user_id']; 
           
           ?>
           
         
		
           
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Doctor's Name</th>
                                            
                                            <th>Doctor's Expertise</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            
                                            
                                        </tr>
                                    </thead>
            <?php 
                include_once('db_con.php');
               
                $conn= connect();
                $sql = "SELECT t1.*, p.time FROM p_appointment as p
                JOIN (SELECT a.id as id, a.doctor_id, a.date, e.First_name, e.Last_name, e.Expert FROM employee as e JOIN appointment as a ON a.doctor_id = e.id) as t1 on p.appointment_id = t1.id WHERE p.user_id = '$id'";

                $results = $conn->query($sql);
                foreach($results as $result){


                                    ?>

                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td><?php echo $result['First_name'] ?> <?php echo $result['Last_name'] ?></td>
                                            <td><?php echo $result['Expert'] ?></td>
                                            <td><?php echo $result['date'] ?></td>
                                            <td><?php echo $result['time'] ?></td>

                                            
                                        </tr>
                                       
                                    </tbody><?php } ?>
                                </table>
                            </div>
                            
                        </div>
                    
    



</div>


     <!-- Table start -->
     
   


                  
                  
                  
           
<?php include_once 'temp/footer.php'; ?>
