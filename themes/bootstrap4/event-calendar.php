<!DOCTYPE html>
<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>

<?php
$xml=simplexml_load_file("//iebms.wscc.com/WSCC_iEBMS/test/EventCalendarExtract.xml");

echo $xml->Event_ID . "<br>";
echo $xml->Event_Start . "<br>";
echo $xml->Event_End . "<br>";
echo $xml->Event_Description . "<br>";
echo $xml->Event_URL . "<br>";
echo $xml->Event_Attendance . "<br>";
echo $xml->Open_to_Public;
?>
 </body>
</html>
