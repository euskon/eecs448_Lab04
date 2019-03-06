<!-- customerBackend.php
Processes the purchase
- Prints a welcome message to the user
- displays their password (never do this in production!, this is only practice to get used to transmitting form information)
Prints a receipt -->
<?php
  echo "<h1>Welcome:" . $_POST["username"] . "</h1><br>";
  echo "<h6>For Lab Example Purposes Only<br>";
  echo "PW: " . $_POST["password"] . "</h6><br>";
 ?>
