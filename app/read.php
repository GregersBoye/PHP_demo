<?php

session_start();
if(isset($_SESSION['key'])) {
    echo 'session: '.$_SESSION['key'].'<br />';
}
if(isset($_COOKIE['cookie'])){
    echo 'cookie: '.$_COOKIE['cookie'].'<br/>';
}
