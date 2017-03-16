<?php

$string = "This website is stupid. Your speaking style is idiotic. Your knowledge is crap. This is so stupid. You're an IDIOT.";

echo preg_replace('/stupid|idiot(?:ic)?|crap/i', 'amazing', $string);