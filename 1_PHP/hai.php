<!-- 3.５次元配列 -->

<?php

$honda = array("vezel","1","price","400","from","kanagawa");
$dream = array("GB350","1","price","50","from","kumamoto");
$kawasaki = array("ZX-25R","0","price","90","from","indonesia");
$yamaha = array("serrow","0","price","52","from","tokyo");
$mitubishi = array("pajero","0","price","350","from","notfund");

$array = array($honda,$dream,$kawasaki,$yamaha,$mitubishi);

echo $array[4][0];
echo '<br>';
echo $array[1][0]."\r".$array[1][2]."\r".$array[1][3].'万円';


?>
