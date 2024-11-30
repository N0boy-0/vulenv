<?php
header("Location: url.php?url=https://www.baidu.com/");
if ($_SERVER['REMOTE_ADDR'] == "127.0.0.1") {
    # flag in /flag
    readfile($_POST['evil']);
}
if(md5($_GET["str"]) == '0') {
    show_source("url.php");
}else{
    show_source(__FILE__);
}
