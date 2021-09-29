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
<form action="mainform.php" method="POST" enctype="multipart/form-data">
<ul class="form-style-1">
    <li><label>সেবা সমূহ <span class="required">*</span></label>
                                            
                                                
         <select name="seba_type" class="form-control" required="">
                                                 <option value=""selected="">চিহ্নিত করুন</option>
                                                    <option value="nagorik_cer" >নাগরিকত্ব সনদ</option>
                                                    <option value="death_cer">মৃত্যু সনদ</option>
                                                    <option value="ch_cer">চারিত্রিক সনদ</option>
                                                    <option value="birth_cer">BIRTH CERTIFICATE</option>
                                                    <option value="homeless">ভূমিহীন সনদ</option>
                                                    
                                                    <option value="disable">প্রকৃত বাকঁ ও শ্রবন প্রতিবন্ধী</option>
                                                    <option value="hindu">সনাতন ধর্ম  অবলম্বী</option>
                                                    <option value="permit">অনুমতি পত্র</option>
                                                    <option value="transcript">প্রত্যয়ন পত্র</option>
                                                </select>
                                            

    <li>
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
        <label>Occupassion <span class="required">*</span></label>
        <input type="text" name="job" class="field-long" placeholder="Enter Your Occupassion" />
    </li>

     <li>
        <label>Education Qualification <span class="required">*</span></label>
        <input type="text" name="education" class="field-long" placeholder="Enter Your Education Qualification" />
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
        <label>Email <span class="required">*</span></label>
        <input type="email" name="email" class="field-long" placeholder="Enter Your Email Address"/>
    </li>
    <li>
        <label>Phone Number <span class="required">*</span></label>
        <input type="text" name="phone" class="field-long" placeholder="Enter Your Phone Number"/>
    </li>
  
    <li>
        <label>Attacements </label>
        <textarea name="other" id="field5" class="field-long field-textarea" placeholder="e.g.Freedom Fighter"></textarea>
    </li>
    <li>
        <label>Passport Size Photo <span class="required">*</span></label>
        <input type="file" name="photo" id="photo" class="field-long" />
    </li>
    <li>
        <input type="submit" value="Submit" />
    </li>
</ul>
</form>

<?php include_once 'temp/footer.php'; ?>