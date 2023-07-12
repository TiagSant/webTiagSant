<?php
//require "./config/config.php";
//require str_replace($_SERVER['SERVER_NAME'], "", $_SERVER['DOCUMENT_ROOT']) . "/sites" . $_SERVER['SERVER_NAME'] . "config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php echo _("Sign-up") ?></title>

   <link rel="stylesheet" href="/css/global.css">
   <link rel="stylesheet" href="/css/signup.css">

</head>
<body class="darkPurple">
   <section class="signup">
      <div class="formSignup">
         <h1><?php echo _("Sign-up on TiagSant website") ?></h1>
         <form action="" method="post">
            <input type="text" name="name" id="name" placeholder="<?php echo _("Your name") ?>">
            <input type="text" name="fName" id="fName" placeholder="<?php echo _("Your last name") ?>">
            <input type="email" name="email" id="email" placeholder="<?php echo _("Your e-mail address") ?>">
            <input type="password" name="pass" id="pass" placeholder="<?php echo _("Choose your password") ?>">
            <input type="password" name="passRepeat" id="passRepeat" placeholder="<?php echo _("Repeat the password") ?>">
            <div class="formBtn">
               <button type="reset" id="resetBtn"><?php echo _("Reset") ?></button>
               <button type="submit" id="submitBtn"><?php echo _("Sign-up") ?></button>
            </div>
         </form>
      </div>
   </section>
</body>
</html>