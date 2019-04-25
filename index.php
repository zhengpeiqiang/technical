<?php
require('preg_match.php');
$tel = GetM('tel','13530432646');

if(!preg_tel_cn($tel)){
	echo "手机号码错误";
}

//var_dump($_SERVER);

?>
