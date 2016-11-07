<?php
$serialized = 'O:8:"DateTime":3:{s:4:"date";s:26:"2016-08-14 12:31:50.000000";s:13:"timezone-type";i:3;s:8:"timezone";s:3:"UTC";}';
try {
  $dt = unserialize($serialized);
}
catch (Error $e) {
  //Théoriquement ici je log quelque chose
}
print "<p>je suis là</p>";