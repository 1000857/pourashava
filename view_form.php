<?php session_start(); ?>
<?php
if (!isset($_SESSION['loggedin'])){
    header('location:signin_form.php');
    exit;
}
?>
<?php include_once 'template/_head.php'?>

<body>


<!-- Left Panel -->
<?php include_once 'template/leftNav.php'?>
<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <?php include_once 'template/header.php'?>
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Form management</h1>
                </div>
            </div>
        </div>

        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <button class="btn btn-warning" value="print" onclick="printDiv('print')"><i class="fa fa-print"></i> Print </button>
                    </ol>
                </div>
            </div>
        </div>
    </div>
 
 <?php
        if(isset($_SESSION['msg'])){ 
    ?>
            <div>
                <p><?= $_SESSION['msg'];?></p>
            </div>
            <?php
            unset ($_SESSION['msg']);
        }
    ?>
<?php 

if(isset($_SESSION['files'])){
        $services = $_SESSION['files'];
        unset($_SESSION['files']);
        $serial = 1;
    }else{
        $appid=$_GET['appid'];
    include_once 'db_con.php';
    $conn = connect();
    $sql = "SELECT * FROM service WHERE id='$appid'";
    $services = $conn -> query ($sql);
    
    }
    
?>
    <div class="content mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card2">
                    
                    <div class="card-body2">
                    	<div class="id-card2">
                    		<h2>CHARACTER CERTIFICATE</h2>
                    	</div>
                        <?php
                                    foreach ($services as $service){
                                ?>
                    	<div class="id-card-photo2">
                    		<img src="images/application/<?= $service['pic']?>" alt="">
                    	</div>
                       <div class="card-body3">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <table>
                                <tbody>
                                    
                                    
                    	<tr>					 
                        <td>NAME:</td>
                        <td><?= $service['first_name']?> <?= $service['last_name']?></td>
                        
                      </tr>
                      <tr>					 
                        <td>FATHER NAME</td>
                        <td><?= $service['father']?></i></td>
                      </tr>
                              <tr>					 
                                <td>MOTHER NAME</td>
                                <td><?= $service['mother']?></i></td>
                              </tr>
                              <tr>					 
                                <td>HUSBAND/WIFE NAME</td>
                                <td><?= $service['husband_wife']?></i></td>
                              </tr>
                              <tr>					 
                                <td>NATIONAL ID NO.</td>
                                <td><?= $service['nid']?></i></td>
                                
                              </tr>
                              <tr>					 
                                <td style="width:90%">DATE OF BIRTH</td>
                                <td><?= $service['birth_day']?></i></td>
                              </tr>
                              <tr>					 
                                <td style="width:90%">GENDER</td>
                                <td><?= $service['gender']?></i></td>
                              </tr>
                              <tr>					 
                                <td style="width:90%">PRESENT ADDRESS</td>
                                <td><?= $service['present_village']?>,<?= $service['present_ward']?>,<?= $service['present_upozilla']?>,<?= $service['present_thana']?>,<?= $service['present_district']?></i></td>
                              </tr>
                          <?php } ?>
                          </tbody>
                            </table>
                                <!--<th>Religion</th>
                                <th>Present Village</th> 
                                <th>Present Ward</th>
                                <th>Present Upazilla</th>
                                <th>Present Thana</th>
                                <th>Present District</th>
                                <th>Permanent Village</th>
                                <th>Permanent Ward</th>
                                <th>Permanent Upazilla</th>
                                <th>Permanent Thana</th>
                                <th>Permanent District</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Attachment</th>
                                <th>Photo</th>-->
                           
                                
                                    
                                      
                    </div>
                </div>
            </div>
        </div>

        <!--/.col-->


    </div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->
<?php include_once 'template/footer.php'?>
 <script>
        function printDiv(divName){
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;

        }
        $(window).bind("load", function() {
            if(window.localStorage.getItem('print') == 'print'){
                window.localStorage.removeItem('print');
                setTimeout(function() {
                    printDiv('print');
                }, 2000);
            }
        });
    </script>