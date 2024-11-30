<?php
if (preg_match("/(127\.0\.0\.1)|(localhost)|(flag)|file|dict|com|ftp/i",$_REQUEST['url']))
{
    die("you can't get flag");
}
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$_REQUEST['url']);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$output = curl_exec($ch);
echo $output;
curl_close($ch);
?>
