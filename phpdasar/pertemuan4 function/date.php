<?php

echo date("l,d-M-Y");
echo "</br>";
echo date("l, d M Y h:i:s A", time()+172800);
echo "</br>";
echo date(DATE_RFC2822);
echo "</br>";
echo date("l",mktime(18,0,0,3,13,2002));
echo "</br>";
echo mktime(18,0,0,3,13,2002);
?>
