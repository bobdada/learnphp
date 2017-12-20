<ul id="menu">
  <li> <a href="test.php"> Home</a></li>
  <li><a href="test.php?pge=about">About Us</a></li>
  <li> <a href="test.php?pge=contact">Contact Us</a></li>
</ul>



<?php
//error_reporting(E_ALL);

if(isset($_GET['pge'])){
  $pge=htmlentities($_GET['pge']);
}

else {
  $pge=NULL;
}

switch ($pge) {
  case 'contact':
    echo "<h3>Send the ravens :D at <a href=#> This Address </a></h3> ";
    break;
  case 'about':
    echo " <h1 >ABOUT US:</h1>
  <h>  We are the ONE yah  </h>";
    break;
  default:
    echo "This is the same home page.Click some";
    break;
}
?>
