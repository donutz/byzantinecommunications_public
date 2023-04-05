<?php /**/ ?>







<?
$username="onebigwo_adamh";
$password="adamh01";
$database="onebigwo_adamh";

mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$query="SELECT id, link from amazon_product_links where category='Latin' order by lastused asc limit 1";

$result=mysql_query($query);

echo mysql_result($result,0,"link");

$query = "update amazon_product_links set lastused=now() where id=" . mysql_result($result,0,"id");
mysql_query($query);

mysql_close();

?>

