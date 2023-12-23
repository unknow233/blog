<?php
require_once 'functions.php';
require_once 'config.php';

if (!empty(SITE_ROOT)){
    $url_path = "/".SITE_ROOT."/";
} else{
    $url_path = "/";
}

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" ,initial-scale=1">
    <title>PHP Blog</title>

    <link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.19.1/ui/trumbowyg.min.css">
</head>
<body>

<header class="w3-container w3-teal">
    <h1>第一小组博客~</h1>
</header>

<div class="w3-bar w3-border">
    <a href="index.php" class="w3-bar-item w3-button w3-pale-green">主页</a>
    <?php
    if (isset($_SESSION['username'])) {
        echo "<a href='".$url_path ."new.php' class='w3-bar-item w3-btn'>发布</a>";
        echo "<a href='".$url_path ."admin.php' class='w3-bar-item w3-btn'>管理员界面</a>";
        echo "<a href='".$url_path ."logout.php' class='w3-bar-item w3-btn'>登出</a>";
    } else {
        echo "<a href='".$url_path ."login.php' class='w3-bar-item w3-pale-red' >登录</a>";
    }
    ?>
</div>

<div class="w3-container">
    <form action="<?=$url_path?>search.php" method="GET" class="w3-container">
        <p>
            <input type="text" name="q" class="w3-input w3-border" placeholder="搜索......" required>
        </p>
        <p>
        <input type="submit" class="w3-btn w3-teal w3-round" value="搜索">
        </p>
    </form>
</div>