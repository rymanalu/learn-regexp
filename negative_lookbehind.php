<?php

$string = '$name = "Quaid"; My name is Quaid.';

$result = preg_replace('/(?<!\$)name/', 'VARIABLE', $string);

var_dump($result);
