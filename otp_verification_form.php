<?php
include '../components/connect.php';

$email = isset($_GET['email']) ? $_GET['email'] : '';
$message = '';

if(isset($_POST['verify'])){
   $otp_code = $_POST['otp_code'];

   // Check if OTP code matches
   $check_otp = $conn->prepare("SELECT * FROM `otp_verification` WHERE email = ? AND otp_code = ? AND expires_at > NOW()");
   $check_otp->execute([$email, $otp_code]);
   
   if($check_otp->rowCount() > 0){
      // Delete OTP from database (optional step to prevent reuse)
      $delete_otp = $conn->prepare("DELETE FROM `otp_verification` WHERE email = ?");
      $delete_otp->execute([$email]);

      // Set cookie or session for user authentication (you can customize this part)
      setcookie('email', $email, time() + (86400 * 30), "/");
      
      // Redirect to dashboard or another page
      header('Location: dashboard.php');
      exit;
   } else {
      $message = 'Invalid OTP code or OTP expired!';
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>OTP Verification</title>

   <!-- Font Awesome CDN -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- Custom CSS -->
   <link rel="stylesheet" href="../css/admin_style.css">
</head>
<body>

<?php
if(!empty($message)){
   echo '<div class="message form">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>';
}
?>

<section class="form-container">
   <form class="verify-otp" action="" method="post">
      <h3>OTP Verification</h3>
      <p>An OTP has been sent to your email address. Please enter it below to verify.</p>
      <input type="text" name="otp_code" placeholder="Enter OTP code" maxlength="6" required class="box">
      <input type="submit" name="verify" value="Verify OTP" class="btn">
   </form>
</section>

<!-- Custom JS -->
<script src="../js/script.js"></script>
</body>
</html>
