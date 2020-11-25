<?php

$filePath='sample/write-with-fwrite.txt';

$fileResource=fopen($filePath,'w+');

$written=fwrite($fileResource,'this file writing using fwrite'.PHP_EOL);

if (false===$written){
    echo 'Error Writing with fwrite'.PHP_EOL;
}
else{
    echo sprintf("> Success Writing [%d] in to ` %s `\n",$written,$filePath);
    fseek($fileResource,-5,SEEK_END);
    echo fread($fileResource,filesize($filePath));
    fwrite($fileResource,'ok');

    readfile($filePath);

}

