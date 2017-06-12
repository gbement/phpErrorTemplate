<html>
 <head>
  <title>Error Detail</title>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
  <div class="header">
    <img class="header-logo" src="CompleteCloud_logo_outlined-01.png" alt="complete cloud"/>
  </div>
  <hr>
  <div class="container">
    <p class="text-header"><strong>The following error has occured:</strong></p>
    <p class="error-text">
        <?php 
            $error = "This will be error variable";
            echo $error; 
        ?>  
    </p>

    <p class="contact-text"><strong>Contact Avatara support using the link below.</strong></p>
    <!--
      if you have information to prepopulate subject line use this one
    <?php $emailSubject = "Subject line"; $emailBody = "This will be email body error."; echo '<a href="mailto:support@avatara-llc.com?subject='.$emailSubject.'&body='.$emailBody.'">Email Support</a>'; ?>
    -->
    <!--
    <a href="mailto:support@avatara-llc.com&body=<?php $emailBody = "This will be email body error."; echo $emailBody;?>">Email Support</a>
    -->
  </div>
  <div class="footer"></div>
 </body>
</html>