<?php 
    include_once('assets/templates/head.php');
    include_once('assets/templates/nav.php');
    
?>
<?php if(!isset($_SESSION['loggedin']) && $_SESSION['user_role'] ='patient'){
    
	header('location:login_form.php');
}
?>

<?php 
if(isset($_GET['doctorid'])){
	$id = $_GET['doctorid'];
    $today = date("Y-m-d");}

    include_once 'db_connection.php';


$sql = "SELECT date, COUNT(*)
            FROM appointment WHERE user_id = '$id' AND date >= '$today'
            GROUP BY date
            HAVING COUNT(*) > 1
            ";
	$output = $db_con->query($sql);

?>
    
    <section class="our-blog">
         	<div class="container">
         		<div class="row session-title">
        			<h2> Our Blog </h2>
        			<p>Take a look at what people say about US </p>
        		</div>
        		<div class="blog-row row">
                

                    <form action="patient_appointment.php" method="post">
                    <p>Please select your Prefered Date</p>
                    <?php 
						
							foreach($output AS $row){ 
							
					?>
                    <input type="radio" id="date" name="appointment_date" value="<?=$row['date']?>">
                    <label for="date"><?=$row['date']?></label><br>
                    
                    
                <?php } ?>
                    <input type="hidden" name="doctor_id" value="<?php echo $id ?>">
                    <input type="submit" value="Submit">
                    </form>
               

        		</div>
         	</div>
         </section>




<?php 
    include_once('assets/templates/footer.php');
                            ?>