

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
    $result = $conn -> query ($sql);
    $service = $result->fetch_assoc();
    }
    
?>


<div id="print" style="width:795px; height:1028px; padding:30px; margin-left: 46px;  border: 0px solid #787878">

<div style="width:944px; height:990px; padding:55px; TEXT-ALIGN: justify; border: 5px solid #787878">
        <span style="margin-left:358px;">
        <img  style="height:90px" src="images/bd.png" alt="">
       </span></br>
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
            if ($service['service_name'] == 'ch_cer') {
                echo "CHARACTER CERTIFICATE";
            } elseif ($service['service_name'] == 'death_cer') {
                echo "DEATH CERTIFICATE";
            } elseif ($service['service_name'] == 'nagorik_cer') {
                echo "NATIONALITY CERTIFICATE";
            }elseif ($service['service_name'] == 'birth_cer') {
                echo "BIRTH CERTIFICATE";
            }
        ?>
           
       </span>
 
       <br><br><br>

       <?php if ($service['service_name'] == 'ch_cer') { ?>

           <span style="font-size:20px"; text-align:left; >This is to certify that <b><?= $service['first_name']?> <?= $service['last_name']?></b> son of <b><?= $service['father']?></b> & <b><?= $service['mother']?></b>, Vill-<b> <?= $service['permanent_village']?></b>,UPO- <b> <?= $service['permanent_upozilla']?></b>,THA- <b><?= $service['permanent_thana']?></b>, DIST- <b><?= $service['permanent_district']?></b>, is known to me. This person is a citizen of Bangladesh by birth.</span>
       <br><br>
       <span style="font-size:20px">To the best of my knowledge, this person bears a good moral character and is not involved in such activities which are against the state freedom and peace.</span><br/><br/>
       <span style="font-size:20px">I wish all success and prosperity.</span> <br/><br/><br/><br/><br/><br/>
       <span style="font-size:15px; margin-left:20px; font-style: italic;">DATE:__________________</span>
       <span style="font-size:15px; margin-left:470px; font-style: italic;">SIGN OF MAYOR</span> <br/><br/>

       <?php } elseif ($service['service_name'] == 'nagorik_cer') { ?><br>
           

            <span style="font-size:20px"; text-align:left; >SL. NUMBER: 
                     <?php
                     $number =  random_int(10000, 10000000);
            echo $number;
            ?>
      </br></br></br>
           <span style="font-size:20px"; text-align:left; >This is to certify that <b><?= $service['first_name']?> <?= $service['last_name']?></b> son of <b><?= $service['father']?></b> & <b><?= $service['mother']?></b>, Vill-<b> <?= $service['permanent_village']?></b>,UPO- <b> <?= $service['permanent_upozilla']?></b>,THA- <b><?= $service['permanent_thana']?></b>, DIST- <b><?= $service['permanent_district']?></b>, is known to me. This person is a citizen of Bangladesh by birth and permanent citizen of <b> <?= $service['permanent_upozilla']?></b>.</span>
       <br><br>
       <span style="font-size:20px">To the best of my knowledge, this person bears a good moral character and is not involved in such activities which are against the state freedom and peace.</span><br/><br/>
       <span style="font-size:20px">I wish all success and prosperity.</span> <br/><br/><br/><br/><br/><br/>
       <span style="font-size:15px; margin-left:20px; font-style: italic;">DATE:__________________</span>
       <span style="font-size:15px; margin-left:470px; font-style: italic;">SIGN OF MAYOR</span> <br/><br/>


       <?php } elseif ($service['service_name'] == 'birth_cer') { ?><br>
       <span style="font-size:20px"; text-align:left; >NUMBER: 
         <?php
         $number =  random_int(100000000000000, 100000000000000000);
echo $number;
?>
                                        
  
</span>
<br/>

 <span style="font-size:20px"; text-align:CENTRE; >NAME: <?= $service['first_name']?> <?= $service['last_name']?></span>
<br/>

 <span style="font-size:20px"; text-align:left; >BIRTH: <?= $service['birth_day']?></span>
<br/>

<span style="font-size:20px"; text-align:left; >GENDER: <?= $service['gender']?></span>
<br/>

<span style="font-size:20px"; text-align:left; >NATIONALITY: BANGLADESHI</span>
<br/>

 <span style="font-size:20px"; text-align:left; >BIRTH PLACE: <?= $service['permanent_village']?>,<?= $service['permanent_upozilla']?>,<?= $service['permanent_thana']?>,<?= $service['permanent_district']?></span>
<br/>

 <span style="font-size:20px"; text-align:left; >FATHER NAME: <?= $service['father']?></span>
<br/>

<span style="font-size:20px"; text-align:left; >NATIONALITY: BANGLADESHI</span>
<br/>

 <span style="font-size:20px"; text-align:left; >MOTHER NAME: <?= $service['mother']?></span>
<br/>

<span style="font-size:20px"; text-align:left; >NATIONALITY: BANGLADESHI</span>
<br/>

 <span style="font-size:20px"; text-align:left; >PERMANENT ADDRESS: <?= $service['permanent_village']?>,<?= $service['permanent_upozilla']?>,<?= $service['permanent_thana']?>,<?= $service['permanent_district']?></span>
<br/><br/><br/><br/><br/>
     <span style="font-size:15px; font-style: italic;">SIGN OF UP SECRETARY</span>
       <span style="font-size:15px; margin-left:400px; font-style: italic;">SIGN OF MAYOR</span>
       <?php } ?>
       
       
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