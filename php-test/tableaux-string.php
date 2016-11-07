<?php
$string = "hello world";

echo($string[4].'<br />'); //=>"o"
echo($string[-2].'<br />'); //=>"l"
$string[-4] = 'a';
echo($string.'<br />'); //=>"hello warld"