<?php
$param = $_GET['param'];

setcookie('cookie', $param, time() + 3600);
