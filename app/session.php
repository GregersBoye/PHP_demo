<?php
session_start();
$param = $_GET['param'];
$_SESSION["key"] = $param;
