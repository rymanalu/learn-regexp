<?php

$string = "www.github.com";

echo preg_replace('/www\.([^\.]+)/i', 'www.github', $string);
