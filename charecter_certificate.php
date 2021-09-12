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




<div id="print" style="width:795px; height:742px; padding:20px;  border: 6px solid #787878">

<div style="width:750px; height:700px; padding:20px;  border: 5px solid #787878">
       <span style="font-size:40px; font-weight:bold; margin-left:100px;">CHARACTER CERTIFICATE</span>
       <br><br><br><br>
       <span style="font-size:20px"; text-align:left; >This is to certify that <b>MD. MEHEDI HASAN</b> son of <b>MD. IBRAHIM</b> & <b>RASHADA</b>, <b>Vill- TUZARBANGA</b>, <b>PO- DAUDKANDI</b>, <b>UPO- DAUDKANDI</b>, <b>THA- DAUDKANDI</b>, <b>DIST- CUMILLA</b>, is known to me. This person is a citizen of Bangladesh by birth.</span>
       <br><br>
       <span style="font-size:20px">To the best of my knowledge, this person bears a good moral character and is not involved in such activities which are against the state freedom and peace.</span><br/><br/>
       <span style="font-size:20px">I wish all success and prosperity.</span> <br/><br/>
       
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