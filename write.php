<?php

$fp = fopen(dirname(__FILE__) . '/data/' . uniqid('', TRUE) . ".txt", 'w');
fwrite($fp, 'Hello!');
fclose($fp);

