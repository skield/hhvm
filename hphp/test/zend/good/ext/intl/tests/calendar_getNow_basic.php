<?php
ini_set("intl.error_level", E_WARNING);
ini_set("intl.default_locale", "nl");

$now = IntlCalendar::getNow();
$proc_now = intlcal_get_now();
$time = time();
var_dump(abs($now - $proc_now) < 2000);
var_dump(abs($time * 1000 - $proc_now) < 2000);

?>
==DONE==
