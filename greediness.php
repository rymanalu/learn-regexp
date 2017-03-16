<?php

$string = "Thanks for the help, @JohnDoe.\n@JohnDoe, thanks for the help!";

echo preg_replace('/@(\w+)/', '<a href="https://github.com/$1">@$1</a>', $string);
