<?php /**/ ?>







<? echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="stylesheet" type="text/css" href="donutz.css" />
<meta name="description" content="Where do latin phrases or sayings go on the Internet?" />
<title>Adam's Latin Distraction</title>
        <script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
        </script>
        <script type="text/javascript">
        _uacct = "UA-72207-1";
        urchinTracker();
        </script>
</head>

<body>
<? include("latinheader.html"); ?>

<p>So where does Latin take us on the internet? Let's find out. All of these latin phrases are linked to the Google "I'm Feeling Lucky" Search, so the links will point to the most popular/relevant page for this phrase. This is something of an experiment...let's see how it works out.</p>

<p>
<?
$username="kingspre_adamh";
$password="adamh01";
$database="kingspre_adamh";

mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT phrase FROM adams_latin_distraction order by phrase";
$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();

$i=0;
while ($i < $num) {

$phrase=mysql_result($result,$i,"phrase");

echo '<a href="http://www.google.com/search?hl=en&q='.$phrase.'&btnI=I\'m+Feeling+Lucky">'.$phrase.'</a><br>';

$i++;
}

?>
</p>

<p>
Your favorite latin phase is missing? See where it goes!
<form action='http://www.google.com/search' method='GET'>
<input type="hidden" name="hl" value="en" />
<input type="text" value="" name="q" /><br />
<input type="submit" name="btnI" value="I'm Feeling Lucky">
</form>
</p>
<p class="center">Last Updated May 28, 2005.<br><br>

Copyright &copy; 2002-2005 <a href="mailto:aihoward@byzantinecommunications.com">Adam Howard</a>. All Rights Reserved.</p>


<div align='center'><script type="text/javascript"><!--
google_ad_client = "pub-3389475555818795";
google_ad_width = 728;
google_ad_height = 90;
google_ad_format = "728x90_as";
google_ad_type = "text";
google_ad_channel ="0172256485";
//--></script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>

<p>This page generously hosted by <a href="http://www.byzantinecommunications.com">Byzantine Communications</a>.</p>

</body>
</html>


























