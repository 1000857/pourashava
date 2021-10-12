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
                        <button class="btn btn-success" value="print" onclick="printDiv('print')"><i class="fa fa-print"></i> Received </button>
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
    $sql = "SELECT * FROM allowance WHERE id='$appid'";
    $result = $conn -> query ($sql);
    $service = $result->fetch_assoc();
    }
    
?>


<div id="print" style="width:795px; height:890px; padding:30px; margin-left: 120px;  border: 0px solid #787878">

<div style="width:944px; height:850px; padding:55px; TEXT-ALIGN: justify; border: 5px solid #787878">
       <span style="font-size:40px; font-weight:bold; margin-left:145px;">
        DAUDKANDI POURASHAVA
       </span></br>
       <span style="font-size:17px; margin-left:310px;">
        POST OFFICE: DAUDKANDI
       </span></br>
       <span style="font-size:17px; margin-left:323px;">
        UPAZILLA: DAUDKANDI
       </span></br>
       <span style="font-size:17px; margin-left:339px;">
        DISTRICT: CUMILLA
       </span></br></br>
       <span style="font-size:20px; font-weight:bold; margin-left:282px;">
        <?php 
            if ($service['service_name'] == 'old_age') {
                echo "OLD AGE ALLOWANCE";
            } elseif ($service['service_name'] == 'widow') {
                echo "WIDOW ALLOWANCE";
            } elseif ($service['service_name'] == 'fighter') {
                echo "FREEDOM FIGHTER ALLOWANCE";
            } 
        ?>
       </span>
 
       <br><br><br><br>

       

          


       <?php if ($service['service_name'] == 'old_age') { ?><br>
       

 <span style="font-size:20px"; text-align:CENTRE; >NAME: <?= $service['first_name']?> <?= $service['last_name']?></span>
<br/>

 <span style="font-size:20px"; text-align:left; >DATE OF BIRTH: <?= $service['dob']?></span>
<br/>
<span style="font-size:20px"; text-align:left; >NID/BIRTH CERTIFICATE NO: <?= $service['nid']?></span>
<br/>
<span style="font-size:20px"; text-align:left; >MOBILE NO: <?= $service['phone']?></span>
<br/>




<span style="font-size:20px"; text-align:left; >NATIONALITY: BANGLADESHI</span>
<br/>

 

 <span style="font-size:20px"; text-align:left; >FATHER NAME: <?= $service['father']?></span>
<br/>

<span style="font-size:20px"; text-align:left; >NATIONALITY: BANGLADESHI</span>
<br/>

 <span style="font-size:20px"; text-align:left; >MOTHER NAME: <?= $service['mother']?></span>
<br/>

<span style="font-size:20px"; text-align:left; >NATIONALITY: BANGLADESHI</span>
<br/>
<span style="font-size:20px"; text-align:left; >PRESENT ADDRESS: <?= $service['present_village']?>,<?= $service['present_upazilla']?>,<?= $service['present_district']?></span>
<br/>
 <span style="font-size:20px"; text-align:left; >PERMANENT ADDRESS: <?= $service['permanent_village']?>,<?= $service['permanent_upazilla']?>,<?= $service['permanent_district']?></span>

       <?php } 

       elseif ($service['service_name'] == 'widow') { ?><br>


       <span style="font-size:20px"; text-align:CENTRE; >NAME: <?= $service['first_name']?> <?= $service['last_name']?></span>
<br/>

 <span style="font-size:20px"; text-align:left; >DATE OF BIRTH: <?= $service['dob']?></span>
<br/>
<span style="font-size:20px"; text-align:left; >NID/BIRTH CERTIFICATE NO: <?= $service['nid']?></span>
<br/>
<span style="font-size:20px"; text-align:left; >MOBILE NO: <?= $service['phone']?></span>
<br/>




<span style="font-size:20px"; text-align:left; >NATIONALITY: BANGLADESHI</span>
<br/>

 

 <span style="font-size:20px"; text-align:left; >FATHER NAME: <?= $service['father']?></span>
<br/>

<span style="font-size:20px"; text-align:left; >NATIONALITY: BANGLADESHI</span>
<br/>

 <span style="font-size:20px"; text-align:left; >MOTHER NAME: <?= $service['mother']?></span>
<br/>

<span style="font-size:20px"; text-align:left; >NATIONALITY: BANGLADESHI</span>
<br/>
<span style="font-size:20px"; text-align:left; >PRESENT ADDRESS: <?= $service['present_village']?>,<?= $service['present_upazilla']?>,<?= $service['present_district']?></span>
<br/>
 <span style="font-size:20px"; text-align:left; >PERMANENT ADDRESS: <?= $service['permanent_village']?>,<?= $service['permanent_upazilla']?>,<?= $service['permanent_district']?></span>
<br/><br/><br/><br/><br/>
       <?php }

       elseif ($service['service_name'] == 'fighter') { ?><br>
      <span style="font-size:20px"; text-align:CENTRE; >NAME: <?= $service['first_name']?> <?= $service['last_name']?></span>
<br/>

 <span style="font-size:20px"; text-align:left; >DATE OF BIRTH: <?= $service['dob']?></span>
<br/>
<span style="font-size:20px"; text-align:left; >NID/BIRTH CERTIFICATE NO: <?= $service['nid']?></span>
<br/>
<span style="font-size:20px"; text-align:left; >MOBILE NO: <?= $service['phone']?></span>
<br/>




<span style="font-size:20px"; text-align:left; >NATIONALITY: BANGLADESHI</span>
<br/>

 

 <span style="font-size:20px"; text-align:left; >FATHER NAME: <?= $service['father']?></span>
<br/>

<span style="font-size:20px"; text-align:left; >NATIONALITY: BANGLADESHI</span>
<br/>

 <span style="font-size:20px"; text-align:left; >MOTHER NAME: <?= $service['mother']?></span>
<br/>

<span style="font-size:20px"; text-align:left; >NATIONALITY: BANGLADESHI</span>
<br/>
<span style="font-size:20px"; text-align:left; >PRESENT ADDRESS: <?= $service['present_village']?>,<?= $service['present_upazilla']?>,<?= $service['present_district']?></span>
<br/>
 <span style="font-size:20px"; text-align:left; >PERMANENT ADDRESS: <?= $service['permanent_village']?>,<?= $service['permanent_upazilla']?>,<?= $service['permanent_district']?></span>
<br/><br/><br/><br/><br/>
       <?php }?>
       
       
</div>
</div>
</div>
</body>

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