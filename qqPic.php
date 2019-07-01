<?php
$QQ=$_GET["qq"];
header("Cache-Control: max-age=2592000");
header("Content-Type: image/jpeg");
header("Server: ImgHttp3.0.0");
echo file_get_contents("http://q2.qlogo.cn/headimg_dl?bs={$QQ}&dst_uin={$QQ}&spec=100");