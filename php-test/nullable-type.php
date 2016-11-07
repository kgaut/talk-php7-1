<?php

function ma_fonction(?int $monEntier) {
  if(is_null($monEntier)) {
    echo 'pas de nombre <br />';
  }
  echo $monEntier.'<br />';
}

function ma_fonction_string(?string $maString) {
  if(is_null($maString)) {
    echo 'pas de string <br />';
  }
  echo $maString.'<br />';
}

function mon_carre(?int $monEntier) : ?int {
  if(is_null($monEntier)) {
    return null;
  }
  return $monEntier*$monEntier;
}



ma_fonction(2);
ma_fonction(null);
echo '<pre>';
var_dump(mon_carre(4));
var_dump(mon_carre(null));