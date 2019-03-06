<!-- customerBackend.php
Processes the purchase
- Prints a welcome message to the user
- displays their password (never do this in production!, this is only practice to get used to transmitting form information)
Prints a receipt -->
<?php
  echo "<link href="style.css" rel="stylesheet" type="text/css"/>";
  echo "<h1>Welcome:" . $_POST["username"] . "</h1><br>";
  echo "<h2>PW: " . $_POST["password"] . "</h2><br>";
  echo "<h3>Receipt for Purchase: </h3><br>";
  echo "<table><th>Item"
 ?>
