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
<form action="allowance.php" method="POST" enctype="multipart/form-data">
<ul class="form-style-1">
    <li><label>Allowance Type <span class="field-select">*</span></label>
                                            
                                                
         <select name="seba_type" class="field-select" required="">
                                                 <option value="" selected="">চিহ্নিত করুন</option>
                                                    <option value="long_term" >LONG TERM</option>
                                                    <option value="short_term">SHORT TERM</option>
                                                    
                                                    
                                                </select>
                                            

    </li>


     <li><label>Month <span class="required">*</span></label>
                                            
                                                
         <select name="month" class="field-select" required="">
                                                 <option value="" selected="">চিহ্নিত করুন</option>
                                                    <option value="January" >January</option>
                                                    <option value="February">February</option>
                                                    <option value="March">March </option>
                                                    <option value="April" >April</option>
                                                    <option value="May">May</option>
                                                    <option value="June">June </option>
                                                    <option value="July" >July</option>
                                                    <option value="August">August</option>
                                                    <option value="September">September </option>
                                                    <option value="October" >October</option>
                                                    <option value="November">November</option>
                                                    <option value="December">December </option>
                                                    

                                                    
                                                </select>
                                            


    </li></br>
        <label>Full Name <span class="required">*</span></label><input type="text" name="fname" class="field-divided" placeholder="First" /> <input type="text" name="lname" class="field-divided" placeholder="Last" />
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
        <label>Husband/Wife Name </label>
        <input type="text" name="spouse" class="field-long" placeholder="Enter Your Husband or Wife Name" />
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
        <label>Gender</label>
        <select name="gender" class="field-select">
        
        <option value="male">Male</option>
        <option value="female">Female</option>
        </select>
    </li>


    <li>
        <label>Religion <span class="required">*</span></label>
        <input type="text" name="religion" class="field-long" placeholder="Enter Your Religion" />
    </li> </br>

    <div class="row"> 
        <div class="col-6"><h2><label>Present Address </label></h2>

    <li>
        <label>Village <span class="required">*</span></label>
        <input type="text" name="village" class="field-long" placeholder="Enter Your Village Name" />
    </li>

     <li>
        <label>Ward No. <span class="required">*</span></label>
        <input type="number" name="ward" class="field-long" placeholder="Enter Your Ward Number" />
    </li>

    <li>
        <label>Upazilla <span class="required">*</span></label>
        <input type="text" name="upazilla" class="field-long" placeholder="Enter Your Upazilla" />
    </li>

    <li>
        <label>Thana <span class="required">*</span></label>
        <input type="text" name="thana" class="field-long" placeholder="Enter Your Thana" />
    </li>

    <li>
        <label>District <span class="required">*</span></label>
        <input type="text" name="district" class="field-long" placeholder="Enter Your District" />
    </li> </br>
</div>


     <div class="col-6"><h2><label>Permanent Address </label></h2>

    <li>
        <label>Village <span class="required">*</span></label>
        <input type="text" name="permanent_village" class="field-long" placeholder="Enter Your Village Name" />
    </li>

     <li>
        <label>Ward No. <span class="required">*</span></label>
        <input type="number" name="permanent_ward" class="field-long" placeholder="Enter Your Ward Number" />
    </li>

    <li>
        <label>Upazilla <span class="required">*</span></label>
        <input type="text" name="permanent_upazilla" class="field-long" placeholder="Enter Your Upazilla" />
    </li>

    <li>
        <label>Thana <span class="required">*</span></label>
        <input type="text" name="permanent_thana" class="field-long" placeholder="Enter Your Thana" />
    </li>

    <li>
        <label>District <span class="required">*</span></label>
        <input type="text" name="permanent_district" class="field-long" placeholder="Enter Your District" />
    </li>
</div>
</div> </br>

<h2><label>Communication </label></h2>
   
    <li>
        <label>Phone Number <span class="required">*</span></label>
        <input type="text" name="phone" class="field-long" placeholder="Enter Your Phone Number"/>
    </li>
  
    <li>
        <input type="submit" value="Submit" />
    </li>
</ul>
</form>

<?php include_once 'temp/footer.php'; ?>