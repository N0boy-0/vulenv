<?php

error_reporting(0);

if($_SERVER["REMOTE_ADDR"] != "127.0.0.1"){
    echo "Just View From 127.0.0.1";
    return;
}

if(isset($_FILES["file"]) && $_FILES["file"]["size"] > 0){
	echo getenv("FLAG");
	echo "yesyesyes";
    exit;
}
?>

Upload Webshell

<form action="/flag.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
</form>
