<?php

echo date("d-m-Y");
echo "<br/>";
echo date("l, d M Y");
echo "<br/>";
echo time();
echo "<br/>";
echo date("l", time());
echo "<br/>";
echo date("l", time()+60*60*24);
echo "<br/>";
echo date("l", time()+60*60*24*2);
echo "<br/>";
echo date("l", time()-60*60*24*2);
echo "<br/>";
echo date("l", time()-60*60*24);

?>