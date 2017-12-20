<?php
session_start();
if (isset($_SESSION['username']))
{
echo "your are already registered as $_SESSION['username']";
}

else if isset($_SERVER['REQUEST_METHOD']=='POST')
{
if(!empty(trim($_POST['username']))
&& !empty(trim($_POST['email']))){
  $usname=htmlentities($_POST['username']);
  $email=htmlentities($_POST['email']);
  $_SESSION['username'] = $usname;
  echo "thanks for registering <br/>  ",
      "username=$usname<br/>",
      "email=$email <br/>";

}
else {
  echo "Yo fill out the forms.OK <br/>";

}

}

else {
  ?>
   <form  action="session.php" method="post">
     <label for="username">Username:</label>
     <input type="text" name="username" />
     <label for="email">Email:</label>
     <input type="email" name="email" />
     <input type="submit"  value="Register">


   </form>

<?php } ?>










 ?>
