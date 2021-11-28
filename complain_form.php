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
<div class="complain" id="comments">
  <div class="complain_form" id="comments">
        <h2 style="color: black;">Write A Complain</h2>
        <form action="complain.php" method="POST" enctype="multipart/form-data">
          <div class="one_third first">
            <label for="name" style="color: black;">Name <span>*</span></label>
            <input type="text" name="name" id="name" value="" size="22" required>
          </div>
          <div class="one_third">
            <label style="color: black;" for="email">e-Mail <span>*</span></label>
            <input type="email" name="email" id="email" value="" size="22" required>
          </div>
          <div style="color: black;" class="one_third">
            <label for="url">Phone Number</label>
            <input type="number" name="phone" id="url" value="" size="22">
          </div>
          <div class="block clear">
            <label style="color: black;" for="comment">Your Complain</label>
            <textarea name="complain" id="comment" cols="25" rows="10"></textarea>
          </div>
          <div>
            <input type="hidden" name="uid" value="<?= $user['id']?>" />
            <input style="color: green;" type="submit" name="submit" value="Submit Form">
            &nbsp;
            <input style="color: red;" type="reset" name="reset" value="Reset Form">
          </div>
        </form>
      </div>
      </div>


      <?php include_once 'temp/footer.php'; ?>