<?php
if(! isset($_SESSION)){
    session_start();
}

# 如果沒有設定 $_SESSION['admin'] 表示沒有登入
if(! isset($_SESSION['user'])){
    header('Location: login.php');
    exit;
}
