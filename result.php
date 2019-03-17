<?
error_reporting(0);
require "../confad.php";
$id = $_REQUEST[ele];
echo " ";
$sq = $db->query("SELECT * FROM workshop2 WHERE ws_id = '$id'");
while($rowz = $sq->fetchArray(SQLITE3_ASSOC)) { 
echo "$rowz[ws_datefr]<br>";
$datefr = $rowz[ws_datefr];
$title = $rowz[ws_title];
$descp = $rowz[ws_descp];
$image = $rowz[ws_image];
$principle = $rowz[ws_principle];
$price = $rowz[ws_price];
$discount = $rowz[ws_discount];
$criteria = $rowz[ws_discount_criteria];
$time = $rowz[ws_timefr];
echo "<a href='workshoppage.php?id=$id'>$title</a><br>$datefr  $timefr<br>$price<br>"; } 
?>
