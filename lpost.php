<form action="lpost.php" method="post">
  <input type="text" name="username" >
  <input type="text" name="password" >
  <input type="submit" value="REGISTER">
  </form>

  <?php
  if ($_SERVER'REQUEST_METHOD'=='POST')
      {
        echo "Thanks for resgistering at our site <br/>",
        "your username is:", htmlentities($_POST['username']),"<br/?",
        "your password is:", htmlentities($_POST['password']),"<br/>",
        "Please remember this for future login.";


      }
else {
  ?>
  <form action="lpost.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" >
<label for="password">Password:</label>
    <input type="text" name="password" >
    <input type="submit" value="REGISTER">
        </form>
        <?php  }?>




}



   ?>
