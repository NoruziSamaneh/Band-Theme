<?php
$name = $_POST ['username'];
$mail = $_POST ['email'];
$message = $_POST ['message'];
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>success</title>
  <link rel="stylesheet" href="libraries/bootstrap-5.0.0-beta3-dist/css/bootstrap.rtl.min.css">
  <link rel="stylesheet" href="libraries/fontawesome-free-5.15.3-web/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="main-php" class="d-flex justify-content-center align-items-center">
<div class="main-success mt-5 pb-5">
    <div class="success pt-5 pb-5">
      <i class="fas fa-check-circle d-md-flex justify-content-center"></i>
    </div>
    <div class="success-message">
      <h1 class="pb-4">پیام شما با موفقیت ارسال شد</h1>
      <p><strong><?php echo $name; ?></strong> عزیز پیام شما با مضمون <strong><?php echo $message; ?></strong> برای ما ارسال شد. </p>
      <p>برای ارتباطات بعدی ایمیل شما به آدرس <strong><?php echo $mail; ?></strong> نزد ما محفوظ خواهد ماند. </p>
    </div>
  </div>
</div>
</body>
</html>