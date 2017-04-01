<?php

$string = '<a href="https://google.com">Google</a>'.PHP_EOL.'google.com is the best searh engine.';

echo preg_replace('/google(?!<)/i', 'Change', $string);
