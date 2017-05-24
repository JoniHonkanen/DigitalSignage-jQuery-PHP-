<?php
define('IMAGEPATH', '../kuvat/');

foreach(glob(IMAGEPATH.'*') as $filename){
    echo basename($filename) . "\n";
}
?>