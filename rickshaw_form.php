<?php session_start()?>
<?php
if(!$_SESSION['loggedin']){
        header("location:signin_form.php");
}
?>
<?php include_once 'temp/header.php'; ?>
<?php include_once 'temp/nav.php'; ?>

 <?php
        if(isset($_SESSION['msg'])){ ?>
            <div>
                <p><?= $_SESSION['msg'];?></p>
            </div>
            <?php
            unset ($_SESSION['msg']);
        }

    ?>
    <?php
    include_once 'db_con.php';
    $conn = connect();
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM member WHERE id =$user_id";
    $result = $conn -> query ($sql);
    $user = $result -> fetch_assoc();

    ?>
<form action="rickshaw.php" method="POST" enctype="multipart/form-data">
<ul class="form-style-1">
    <li><label>সেবা সমূহ <span class="required">*</span></label>
                                            
                                                
         <select name="seba_type" class="form-control" required="">
                                                 <option value=""selected="">চিহ্নিত করুন</option>
                                                    <option value="rickshaw_cer" >RICKSHAW</option>
                                                    <option value="van_cer">VAN</option>
                                                   
                                                    
                                                </select>
                                            

    <li>
        <label>Owner's Name <span class="required">*</span></label><input type="text" name="owner_name" class="field-divided" placeholder="NAME" /> 
    </li>

    <li>
        <label>Fathers Name <span class="required">*</span></label>
        <input type="text" name="father" class="field-long" placeholder="Fathers Name" />
    </li>

    <li>
        <label>Mothers Name <span class="required">*</span></label>
        <input type="text" name="mother" class="field-long" placeholder="Mothers Name" />
    </li>

    

    <li>
        <label>NID/Birth Certificate No <span class="required">*</span></label>
        <input type="text" name="nid" class="field-long" placeholder="Enter Your NID No. or Birth Certificate No." />
    </li>

    <li>
        <label>Date of Birth <span class="required">*</span></label>
        <input type="date" name="dob" class="field-long" placeholder="Enter Your Birth Date" />
    </li>

      <li>
        <label>Registration Type</label>
        <select name="reg" class="field-select">
        
        <option value="new">New</option>
        <option value="old">Renew</option>
        </select>
    </li>

   <li>
        <label>Present Address <span class="required">*</span></label>
        <input type="text" name="present_address" class="field-long" placeholder="Enter Your Full Address" />
    </li>
<li>
        <label>Permanent Address <span class="required">*</span></label>
        <input type="text" name="permanent_address" class="field-long" placeholder="Enter Your Permanent Address" />
    </li>

    

    

<h2><label>Communication </label></h2>
    <li>
        <label>Email <span class="required">*</span></label>
        <input type="email" name="email" class="field-long" placeholder="Enter Your Email Address"/>
    </li>
    <li>
        <label>Phone Number <span class="required">*</span></label>
        <input type="text" name="phone" class="field-long" placeholder="Enter Your Phone Number"/>
    </li>
  
  
    <li>
        <label>Owner's Passport Size Photo <span class="required">*</span></label>
        <input type="file" name="photo" id="photo" class="field-long" />
    </li>
         <input type="hidden" name="uid" value="<?= $user['id']?>" />
    <li>
        <input type="submit" value="Submit" />
    </li>
</ul>
</form>

<?php include_once 'temp/footer.php'; ?>