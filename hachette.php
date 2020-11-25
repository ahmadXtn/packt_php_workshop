<?php


$fileUrl = 'https://exobank.hachette-livre.fr/contents/final/9782401073869-fxl/OEBPS/page100.xhtml';

$basePath="https://exobank.hachette-livre.fr/contents/final/9782401073869-fxl/OEBPS/";

$baseHtml="<base href=".$basePath." >";



$fp = fopen($fileUrl, 'r');
$xhtmlNameSpace=fread($fp,151);
$xhtmlDOc=$xhtmlNameSpace.=$baseHtml;


while (!feof($fp)){
    $c=fread($fp,250);
    $xhtmlDOc.=$c;
}

echo $xhtmlDOc;








