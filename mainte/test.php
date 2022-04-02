<?php

$contactFile = '.contact.dat';

$fileContents = file_get_contents($contactFile);
echo $fileContents;

?>