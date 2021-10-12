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
<form action="trade_license.php" method="POST" enctype="multipart/form-data">
<ul class="form-style-1">
    <li><label>LICENSE TYPE <span class="required">*</span></label>
                                            
                                                
         <select name="seba_type" class="form-control" required="">
                                                 <option value=""selected="">SELECT</option>
                                                    <option value="single" >SINGLE OWNER</option>
                                                    <option value="double">COMBINE OWNER</option>
                                                    <option value="company">COMPANY</option>
                                                   
                                                    
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
        <label>Address <span class="required">*</span></label>
        <input type="text" name="address" class="field-long" placeholder="Enter Your Full Address" />
    </li>

<h2><label>Business Address </label></h2>
    <li>
        <label>Road Name <span class="required">*</span></label>
        <input type="text" name="road" class="field-long" placeholder="Enter Road Name"/>
    </li>
    <li>
        <label>Ward Number <span class="required">*</span></label>
        <input type="number" name="ward" class="field-long" placeholder="Enter Ward Number"/>
    </li>
    <li>
        <label>Upazilla <span class="required">*</span></label>
        <input type="text" name="upazilla" class="field-long" placeholder="Enter Upazilla"/>
    </li>
    <li>
        <label>District <span class="required">*</span></label>
        <input type="text" name="district" class="field-long" placeholder="Enter District"/>
    </li></br>
  
  

    

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
    <li>
        <input type="submit" value="Submit" />
    </li>
</ul>
</form>

<?php include_once 'temp/footer.php'; ?>