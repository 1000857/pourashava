<?php

session_start();
if($_POST){
    $seba_type     	= $_POST['seba_type'];
    $holding_no      = $_POST['holding_no'];
    $nationid      = $_POST['nationid'];
    $birthid      = $_POST['birthid'];
    $passport      = $_POST['passport'];
    $dofb      = $_POST['dofb'];


    $name  	= $_POST['name'];
    $mstatus      = $_POST['mstatus'];
    $gender      = $_POST['gender'];
    $fa_fname		= $_POST['fa_fname'];
    $mo_name		= $_POST['mo_name'];
    $hus_name       = $_POST['hus_name'];
    $wif_name       = $_POST['wif_name'];


    $ocupt     = $_POST['ocupt'];
    $qualification      = $_POST['qualification'];
    $religion      = $_POST['religion'];
    $bashinda       = $_POST['bashinda'];
    $p_gram        = $_POST['p_gram'];
    $p_rbs       = $_POST['p_rbs'];
    $p_wordno       = $_POST['p_wordno'];
    $p_postof     = $_POST['p_postof'];
    $p_thana      = $_POST['p_thana'];
    $p_upazila      = $_POST['p_upazila'];
    $p_dis       = $_POST['p_dis'];


    $pb_gram        = $_POST['pb_gram'];
    $pb_rbs       = $_POST['pb_rbs'];
    $pb_wordno       = $_POST['pb_wordno'];
    $pb_postof     = $_POST['pb_postof'];
    $pb_thana      = $_POST['pb_thana'];
    $pb_upazila      = $_POST['pb_upazila'];
    $pb_dis       = $_POST['pb_dis'];

    $c_mob     = $_POST['c_mob'];
    $email      = $_POST['email'];
    $attachment_en      = $_POST['attachment_en'];
    $file       = $_POST['file'];




    if($seba_type == ''){
        $_SESSION['msg']= 'Please Select Service <br>';
      header('location:all_form.php');
       exit;
   }
    if($holding_no == ''){
       $_SESSION['msg']= 'Please insert your holding number.<br>';
        header('location:all_form.php');
      exit;
   }
   if($nationid == ''){
       $_SESSION['msg']= 'Please insert National Id Number.<br>';
      header('location:all_form.php');
      exit;
   }
   if($birthid == ''){
        $_SESSION['msg']= 'Please Enter Your Birth Certificate No.<br>';
        header('location:all_form.php');
        exit;
    }
    if($passport == ''){
        $_SESSION['msg']= 'Please Enter Your Passport No.<br>';
        header('location:all_form.php');
        exit;
   }
    if($dofb == ''){
        $_SESSION['msg']= 'Please insert your Birth Date.<br>';
        header('location:all_form.php');
        exit;
    }
    if($name == ''){
        $_SESSION['msg']= 'Please Enter Your Name.<br>';
        header('location:all_form.php');
        exit;
    }
    if($mstatus == ''){
        $_SESSION['msg']= 'Please Enter Your Maritual Status.<br>';
        header('location:all_form.php');
        exit;
    }




    if($gender == ''){
        $_SESSION['msg']= 'Please Select Your Gender <br>';
      header('location:all_form.php');
       exit;
   }
    if($fa_fname == ''){
       $_SESSION['msg']= 'Please Enter Your Father Name.<br>';
        header('location:all_form.php');
      exit;
   }
   if($mo_name == ''){
       $_SESSION['msg']= 'Please Enter Your Mother Name.<br>';
      header('location:all_form.php');
      exit;
   }
   if($hus_name == ''){
        $_SESSION['msg']= 'Please Enter Your Husband Name.<br>';
        header('location:all_form.php');
        exit;
    }
    if($wif_name == ''){
        $_SESSION['msg']= 'Please Enter Your Wife Name.<br>';
        header('location:all_form.php');
        exit;
   }
    if($ocupt == ''){
        $_SESSION['msg']= 'Please insert your Occupation.<br>';
        header('location:all_form.php');
        exit;
    }
    if($qualification == ''){
        $_SESSION['msg']= 'Please Inser Your Education Qualification.<br>';
        header('location:all_form.php');
        exit;
    }
    if($religion == ''){
        $_SESSION['msg']= 'Please Enter Your Religion.<br>';
        header('location:all_form.php');
        exit;
    }




if($bashinda == ''){
        $_SESSION['msg']= 'Please Select Your Residence Type <br>';
      header('location:all_form.php');
       exit;
   }
    if($p_gram == ''){
       $_SESSION['msg']= 'Please Enter Your Present Village Name.<br>';
        header('location:all_form.php');
      exit;
   }
   if($p_rbs == ''){
       $_SESSION['msg']= 'Please Enter Your Present Road No.<br>';
      header('location:all_form.php');
      exit;
   }
   if($p_wordno == ''){
        $_SESSION['msg']= 'Please Enter Your Present Ward No.<br>';
        header('location:all_form.php');
        exit;
    }
    if($p_postof == ''){
        $_SESSION['msg']= 'Please Enter Your Present Post Office.<br>';
        header('location:all_form.php');
        exit;
   }
    if($p_thana == ''){
        $_SESSION['msg']= 'Please insert your Present Thana.<br>';
        header('location:all_form.php');
        exit;
    }
    if($p_upazila == ''){
        $_SESSION['msg']= 'Please Inser Your Present Upozilla.<br>';
        header('location:all_form.php');
        exit;
    }
    if($p_dis == ''){
        $_SESSION['msg']= 'Please Enter Your Present District.<br>';
        header('location:all_form.php');
        exit;
    }



if($pb_gram == ''){
       $_SESSION['msg']= 'Please Enter Your Permanent Village Name.<br>';
        header('location:all_form.php');
      exit;
   }
   if($pb_rbs == ''){
       $_SESSION['msg']= 'Please Enter Your Permanent Road No.<br>';
      header('location:all_form.php');
      exit;
   }
   if($pb_wordno == ''){
        $_SESSION['msg']= 'Please Enter Your Permanent Ward No.<br>';
        header('location:all_form.php');
        exit;
    }
    if($pb_postof == ''){
        $_SESSION['msg']= 'Please Enter Your Permanent Post Office.<br>';
        header('location:all_form.php');
        exit;
   }
    if($pb_thana == ''){
        $_SESSION['msg']= 'Please insert your Permanent Thana.<br>';
        header('location:all_form.php');
        exit;
    }
    if($pb_upazila == ''){
        $_SESSION['msg']= 'Please Inser Your Permanent Upozilla.<br>';
        header('location:all_form.php');
        exit;
    }
    if($pb_dis == ''){
        $_SESSION['msg']= 'Please Enter Your Permanent District.<br>';
        header('location:all_form.php');
        exit;
    }



    if($c_mob == ''){
        $_SESSION['msg']= 'Please Enter Your Phone Number.<br>';
        header('location:all_form.php');
        exit;
   }
    if($email == ''){
        $_SESSION['msg']= 'Please insert your email.<br>';
        header('location:all_form.php');
        exit;
    }
    if($attachment_en == ''){
        $_SESSION['msg']= 'Please Inser Your Attachment.<br>';
        header('location:all_form.php');
        exit;
    }
    if($file == ''){
        $_SESSION['msg']= 'Please Enter Your Passport Size Photo.<br>';
        header('location:all_form.php');
        exit;
    }





    


        include_once 'db_con.php';
        $conn = connect();

       
            $sql="INSERT INTO service (service_name, holding_no, nid, birth_id, passport_id, birth_day, name, gender, status, father, mother, husband, wife, occupation, education, relegion, pre_residence, pre_village, pre_road, pre_ward, pre_post_office, pre_thana, pre_upozilla, pre_district, per_residence, per_village, per_road, per_ward, per_post_office, per_thana, per_upozilla, per_district, mobile, email, other, pic)
				VALUES ('$seba_type','$holding_no', '$nationid', '$birthid', '$passport', '$dofb', '$name', '$mstatus', '$gender','$fa_fname', '$mo_name', '$hus_name', '$wif_name', '$ocupt', '$qualification', '$religion', '$bashinda'
                ,'$p_gram', '$p_rbs', '$p_wordno', '$p_postof', '$p_thana', '$p_upazila', '$p_dis','$pb_gram', '$pb_rbs', '$pb_wordno', '$pb_postof', '$pb_thana', '$pb_upazila', '$pb_dis', '$c_mob', '$email', '$attachment_en', '$file')";


            $conn->query($sql);
            $_SESSION['msg']= 'Registered Successfully. Your Application is Under Review<br>';
            header('location:all_form.php');
        }
    
?>