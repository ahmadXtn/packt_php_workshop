<?php
$time_start = microtime(true);

$fileUrl='https://exobank.hachette-livre.fr/contents/final/9782401073869-fxl/OEBPS/page50.xhtml';
echo  '<base href="https://exobank.hachette-livre.fr/contents/final/9782401073869-fxl/OEBPS/">';

$path= parse_url($fileUrl)['path'];
$fileName=pathinfo($path);





header('Content-Type: text/csv');
header('Content-Length: ' . filesize($fileUrl));
header(sprintf('Content-Disposition: attachment; filename="%s.pdf"', basename($fileUrl)));

readfile($fileUrl);






