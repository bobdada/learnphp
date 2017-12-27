<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{

$link= new mysqli('locahost','root','','test');
if(!$link){
  die('connection failed.' . $mysqli->error());
}

$sql="SELECT album_name FROM album WHERE dai_id=?";
if($smt=$link->prepare($sql))
{
  $smt->bind_param('i',$_POST['daiharu']);
  $smt->execute();
  $smt->bind_result($album);
  while ($smt->fetch()) {
    printf("Album: %s  <br/>",$album);
  }
  $smt->close();
}
else {
 ?>
<form method="post">
  <label for="artist">Select an Artist:</label>
  <select name="artist">
    <option value="1">Bon Iver</option>
    <option value="2">Feist</option>


  </select>
<input type="submit">
</form>


<?php } ?>
