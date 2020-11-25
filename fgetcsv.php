<?php

$file=__DIR__.'/sample/stormofswords.csv';

$fr=fopen($file,'r',false);

$rowNb=0;
while (!feof($fr)){
    $rowContent=fgetcsv($fr);

}




