<?php include_once 'temp/header.php'; ?>
<?php include_once 'temp/nav.php'; ?>

<style type="text/css"> 
.app-heading{
	margin-top:20px;
	margin-bottom:20px;
	text-align:center;
	font-weight:900;
	
	font-size:16px;
	font-style:normal;
	padding-left: 20px;
}
.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.428571429;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
@media (min-width: 768px)
.col-sm-5 {
    width: 41.66666666666667%;
}
@media (min-width: 768px)
.col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
    float: left;
}
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
    position: relative;
    min-height: 50px;
    padding-left: 15px;
    padding-right: 15px;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}


:before, :after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
:before, :after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.app-sub-heading{
	margin-top: 10px;
	margin-bottom: 10px;
	font-size:14px;
	font-style:normal;
	font-weight:700;
	text-align:center;
}
.row {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}
#comment{
	resize:none;
}
.button-style{
	margin-bottom:30px;
	margin-top: 10px;
}
.all-input-form label{
	color: #413839;
	opacity:0.9;
}
.all-input-form label>span{
	color:red;
}
.all-input-form input[type="text"], input[type="file"]{
	color: #0C090A;
	font-size:13px;
	font-weight:500;
    width: 270px;
    height: 29px;
}
#attachment{
	resize:none;
	color: #0C090A;
	font-size:14px;
	font-weight:400;

}
@-moz-document url-prefix() {
    .input-file-sm {
        height: auto;
        padding-top: 2px;
        padding-bottom: 1px;
    }
}
</style>

<div class="main_con"><!--Content Start-->
	<div class="row"><!--- row start--->
		<div class="col-md-12 left_con"><!-- left Content Start-->
			<div class="row">
				<div class="col-md-12"> 
					<div class="panel panel-primary">
						
						<div class="row">
							 <div class="col-sm-12"> 
							  <div style="margin-top:20px;">
							   <label class="col-sm-3"></label>
							   <label class="col-sm-1" style="color:red;">নিয়মাবলিঃ</label>
							   <div class="col-sm-4" style="color:blue;">
								<p><span>**</span>  বাংলায় সার্টিফিকেট পেতে শুধুমাত্র বাংলায় ঘর  পূরণ করুন ।<br> ইংরেজি সার্টিফিকেট পেতে বাংলা এবং ইংরেজি উভয় ঘর পূরণ করুন ।</p>
							   </div>
							   <div class="clearfix"> </div>
							  </div>
							 </div>
							</div>
						<div class="panel-body all-input-form">
							
						<?php
               				 if(isset($_SESSION['msg'])){
                    			echo $_SESSION['msg'];
                   				 unset ($_SESSION['msg']);
               				 }
                		?>
							<form action="form.php" method="POST"  class="form-horizontal">
							
								
								
					
																
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="National-id-english" class="col-sm-3 control-label">সেবা সমূহ  <span>*</span></label>
											<div class="col-sm-3">
												
												<select name="seba_type" class="form-control" required="">
													<option value=""selected="">চিহ্নিত করুন</option>
													<option value="ci_cer" >নাগরিকত্ব সনদ</option>
													<option value="death_cer">মৃত্যু সনদ</option>
													<option value="ch_cer">চারিত্রিক সনদ</option>
													
													<option value="homeless">ভূমিহীন সনদ</option>
													
													<option value="disable">প্রকৃত বাকঁ ও শ্রবন প্রতিবন্ধী</option>
													<option value="hindu">সনাতন ধর্ম  অবলম্বী</option>
													<option value="permit">অনুমতি পত্র</option>
													<option value="transcript">প্রত্যয়ন পত্র</option>
												</select>
											</div>
											<label for="holding_no" class="col-sm-3 control-label">হোল্ডিং নং </label>
											<div class="col-sm-3">
												<input type="text" name="holding_no" id="holding_no" class="form-control">
											</div>
										</div>
										
										
									</div>
								</div>
													
							<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="National-id-english" class="col-sm-3 control-label">ন্যাশনাল আইডি (ইংরেজিতে)  </label>
											<div class="col-sm-3">
												<input type="text" name="nationid" id="nid" class="form-control" placeholder="">
											</div>
											<label for="Birth-no" class="col-sm-3 control-label">জন্ম নিবন্ধন নং ( ইংরেজিতে ) <span>*</span></label>
											<div class="col-sm-12">
											<input type="text" name="birthid" id="holding_no" class="form-control">
										</div>
									</div>
								</div>
							
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Passport-no" class="col-sm-3 control-label">পাসপোর্ট নং ( ইংরেজিতে ) </label>
											<div class="col-sm-3">
												<input type="text" name="passport" id="pno" class="form-control" maxlength="17" placeholder="">
											</div>

											<label for="Birth-date" class="col-sm-3 control-label">জম্ম  তারিখ   <span>*</span></label>
											<div class="col-sm-3">
												<input type="text" name="dofb" id="dofb" class="form-control" placeholder="01-01-1980" required="">
											</div>

										</div>
										
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Name-english" class="col-sm-3 control-label">নাম ( ইংরেজিতে )   <span></span></label>
											<div class="col-sm-3">
												<input type="text" name="name" id="name" class="form-control" placeholder="">
											</div>
											
										</div>
									</div>
								</div>
								
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Gender" class="col-sm-3 control-label">লিঙ্গ   <span>*</span></label>
											 <div class="col-2">
                            <div class="input-group">
                               
                                <div class="p-t-10">
                                    <label class="radio-container m-r-45">Male
                                        <input type="radio" value="male" checked="checked" name="gender">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">Female
                                        <input type="radio" value="female" name="gender">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">Other
                                        <input type="radio" value="other" name="gender">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
											<label for="Marital-status" class="col-sm-3 control-label">বৈবাহিক সম্পর্ক   <span>*</span></label>
											<div class="col-sm-3">		
											<select name="mstatus" class="form-control" required="">
													<option value="">চিহ্নিত করুন</option>
													<option value="married">বিবাহিত</option>
													<option value="unmarried">অবিবাহিত</option>
													<option value="divorce">তালাক প্রাপ্ত</option>
													<option value="widow">বিধবা</option>
													
												</select>
											
											</div>
											
										</div>
									</div>
								</div>
								
							
								
								
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Father-name-english" class="col-sm-3 control-label">পিতার নাম  <span></span></label>
											<div class="col-sm-3">
												<input type="text" name="fa_fname" class="form-control" placeholder="">
											</div>
											<label for="Father-name-bangla" class="col-sm-3 control-label">মাতার নাম   <span>*</span></label>
											<div class="col-sm-3">
												<input type="text" name="mo_name" id="bfname" class="form-control" placeholder="" required="">
											</div>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Mother-name-english" class="col-sm-3 control-label">Husband নাম (ইংরেজিতে)  <span></span></label>
											<div class="col-sm-3">
												<input type="text" name="hus_name" id="mname" class="form-control" placeholder="">
											</div>
											<label for="Mother-name-bangla" class="col-sm-3 control-label">Wife নাম (বাংলায়)  <span>*</span></label>
											<div class="col-sm-3">
												<input type="text" name="wif_name" id="emane" class="form-control" placeholder="" required="">
											</div>
										</div>
									</div>
								</div>
							
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="profession" class="col-sm-3 control-label">পেশা</label>
											<div class="col-sm-3">
												<input type="text" name="ocupt" id="occupation" class="form-control" placeholder="">
											</div>
											<label for="Education-qualification" class="col-sm-3 control-label">শিক্ষাগত যোগ্যতা</label>
											<div class="col-sm-3">
												<input type="text" name="qualification" id="qualification" class="form-control" placeholder="">
											</div>
										</div>
										
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Religion" class="col-sm-3 control-label">ধর্ম    <span>*</span></label>
											<div class="col-sm-3">
												<select name="religion" class="form-control" required="">
													<option value="">চিহ্নিত করুন</option>
													<option value="islam">ইসলাম</option>
													<option value="hin">হিন্দু</option>
													<option value="budda">বৌদ্ধ ধর্ম</option>
													<option value="christ">খ্রিস্ট ধর্ম</option>
													<option value="others">অন্যান্য</option>
												</select>
											</div>
											<label for="Resident" class="col-sm-3 control-label">বাসিন্দা    <span>*</span></label>
											<div class="col-sm-3">
												<select name="bashinda" id="bs" class="form-control" required="">
													<option value="">চিহ্নিত করুন</option>
													<option value="unper">অস্থায়ী</option>
													<option value="per">স্থায়ী</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="app-heading"> 
											বর্তমান ঠিকানা
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-6">
										<div class="col-sm-offset-6 col-sm-6">
											<div class="app-sub-heading"> 
												( বর্তমান ঠিকানা )
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Village-english" class="col-sm-6 control-label">পাড়া/মহল্লা </label>
													<div class="col-sm-6">
														<input type="text" name="p_gram" id="p_gram" class="form-control" placeholder="">
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Road-block-sector-english" class="col-sm-6 control-label">রোড/ব্লক/সেক্টর</label>
													<div class="col-sm-6">
														<input type="text" name="p_rbs" id="p_rbs" class="form-control" placeholder="">
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Word-no-english" class="col-sm-6 control-label">ওয়ার্ড নং</label>
													<div class="col-sm-6">
														<select name="p_wordno" id="p_wordno" class="form-control">
															<option value="">select</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
															<option value="6">6</option>
															<option value="7">7</option>
															<option value="8">8</option>
															<option value="9">9</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										
											<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Post-office-english" class="col-sm-6 control-label">পোষ্ট অফিস </label>
													<div class="col-sm-6">
														<input type="text" name="p_postof" id="p_postof" class="form-control" placeholder="">
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Thana-english" class="col-sm-6 control-label">থানা</label>
													<div class="col-sm-6">
														<input type="text" name="p_thana" id="p_thana" class="form-control" placeholder="">
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Thana-english" class="col-sm-6 control-label">উপজেলা</label>
													<div class="col-sm-6">
														<input type="text" name="p_upazila" id="p_upazila" class="form-control" placeholder="">
													</div>
												</div>
											</div>
										</div>
										
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="District-english" class="col-sm-6 control-label">জেলা </label>
													<div class="col-sm-6">
														<input type="text" name="p_dis"  id="p_dis" class="form-control" placeholder="">
													</div>
												</div>
											</div>
										</div>
												
									
									</div>
									<div class="col-sm-6">
										<div class="col-sm-offset-6 col-sm-6">
											<div class="app-sub-heading"> 
												স্থায়ী  ঠিকানা
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Village-bangla" class="col-sm-6 control-label">পাড়া/মহল্লা </label>
													<div class="col-sm-6">
														<input type="text" name="pb_gram" id="pb_gram" class="form-control" placeholder="">
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Road-block-sector-bangla" class="col-sm-6 control-label">রোড/ব্লক/সেক্টর</label>
													<div class="col-sm-6">
														<input type="text" name="pb_rbs" id="pb_rbs" class="form-control" placeholder="">
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Word-no-bangla" class="col-sm-6 control-label">ওয়ার্ড নং <span>*</span></label>
													<div class="col-sm-6">
														<select name="pb_wordno" class="form-control" required="">
															<option value="">select</option>
															<option value="1">১</option>
															<option value="2">২</option>
															<option value="3">৩</option>
															<option value="4">৪</option>
															<option value="5">৫</option>
															<option value="6">৬</option>
															<option value="7">৭</option>
															<option value="8">৮</option>
															<option value="9">৯</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Post-office-bangla" class="col-sm-6 control-label">পোষ্ট অফিস </label>
													<div class="col-sm-6">
														<input type="text" name="pb_postof" id="pb_postof" class="form-control" placeholder="">
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Thana-bangla" class="col-sm-6 control-label">থানা </label>
													<div class="col-sm-6">
														<input type="text" name="pb_thana" id="pb_thana" class="form-control" placeholder="">
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="Thana-bangla" class="col-sm-6 control-label">উপজেলা </label>
													<div class="col-sm-6">
														<input type="text" name="pb_upazila" id="pb_upazila"  class="form-control" placeholder="">
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12"> 
												<div class="form-group">
													<label for="District-bangla" class="col-sm-6 control-label">জেলা </label>
													<div class="col-sm-6">
														<input type="text" name="pb_dis"  id="pb_dis" class="form-control" placeholder="">
													</div>
												</div>
											</div>
										</div>
										
										
									</div>
								</div>
								
								
								
								
								
								
								<div class="row">
									<div class="col-sm-12" style="text-align:center;"> 
										<div class="app-heading"> 
											যোগাযোগের ঠিকানা
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Mobile" class="col-sm-3 control-label">মোবাইল    <span>*</span></label>
											<div class="col-sm-3">
												<input type="text" name="c_mob" id="c_mob" class="form-control" maxlength="11" placeholder="ইংরেজিতে প্রদান করুন" onkeypress="return checkaccnumber(event);" required="">
											</div>
											<label for="Email" class="col-sm-3 control-label">ইমেল </label>
											<div class="col-sm-3">
												<input type="email" name="email" id="email" class="form-control" placeholder="">
											</div>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12"> 
										<div class="form-group">
											<label for="Designation" class="col-sm-3 control-label">সংযুক্তি যদি থাকে ( ইংরেজিতে ) </label>
											<div class="col-sm-3">
												<textarea name="attachment_en" class="form-control"  id="attachment_en" placeholder="Examples: Freedom fighter children, widows, tribals ..... etc."></textarea>
											</div>
											
										</div>
									</div>
								</div>
	
								
								<div class="form-group">
											<label for="Picture" class="col-sm-3 control-label">ছবি</label>
											<div class="col-sm-5" style="margin-top:3px;">
												<input type="file" name="file" class="form-control input-file-sm">
											</div>
											<div class="col-sm-3" style="margin-top:3px;">
												<button  name="upload" class="btn btn-primary">আপলোড</button>
											</div>
											<div class="clearfix"> </div>
										</div>
							</form>
						</div>
					</div>
				</div>
			</div><!-- row end--->
		</div><!-- left Content End-->
