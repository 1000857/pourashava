<?php session_start(); ?>
<?php
if (!isset($_SESSION['loggedin'])){
    header('location:employee_signin_form.php');
    exit;
}
?>
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


        <div id="page-wrapper" >
          <div class="header"> 
                        <h1 class="page-header">
                             Patient Information
                        </h1>
                         
                                    
        </div>
        
            <div id="page-inner"> 
             <div class="row">
             <div class="col-lg-12">
             <div class="card">
                        
            <div class="card-content">



           <!-- Table start -->
           
           <?php $id = $_SESSION['user_id']; ?>
         
        
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                            
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Patient First Name</th>
                                            <th>Patient Last Name</th>
                                            <th>Date Of Birth</th>
                                            <th>Gender</th>
                                            <th>Time</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <?php 

                                        include_once('db_con.php');
                                        $conn= connect();
                                        $sql = "SELECT m.First_name, m.Last_name, m.Birthday, m.Gender, p.time, t1.appoint_id, t1.user_id FROM p_appointment as p 
                                        JOIN member as m ON p.user_id = m.id
                                        JOIN (SELECT a.id as appoint_id, a.doctor_id as user_id FROM appointment as a JOIN employee as e ON a.doctor_id = e.id) as t1 ON p.appointment_id = t1.appoint_id
                                        WHERE t1.user_id = '$id'";
                                        

                        $results = $conn->query($sql);
                        foreach($results as $result){

                        
                                    ?>

                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td><?php echo $result['First_name'] ?></td>
                                            <td><?php echo $result['Last_name'] ?></td>
                                            <td><?php echo $result['Birthday'] ?></td>
                                            <td><?php echo $result['Gender'] ?></td>
                                            <td><?php echo $result['time'] ?></td>
                                            
                                        </tr>
                                       
                                    </tbody><?php } ?>
                                </table>
                            </div>
                            
                        </div>
                    </div>

            
    






<!-- Right Panel -->
<?php include_once 'template2/footer2.php'?>