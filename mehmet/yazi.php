<div id="content">
<ul>
<?php
include("baglan.php");
$id = $_GET["id"];
if(!$id){
echo "bir ID verisi verin!";
}
if($id == 15){
  echo "Iznin yok!?";
  die();
}
$q = mysql_query("SELECT id, descr from item3 where id='$id' order by id desc");
    while($row = mysql_fetch_array($q)) {
        echo "<li><b>".$row[0]."</b></li>";
        echo "<p>".$row[1]."</p>";
    }
?>
</ul>
	<hr>

	<b>Duyuru sistemi</b>
	</div>
