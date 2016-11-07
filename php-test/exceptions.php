<?php

class Lorem extends Exception {}

class Ipsum extends Exception {}

class Dolores extends Exception {}

try {
  switch (mt_rand(1, 3)) {
    case 1: throw new Lorem();
    case 2: throw new Ipsum();
    case 3: throw new Dolores();
  }
}
catch (Lorem | Ipsum $e) {
  printf("1er catch : %s\n", get_class($e));
}
catch (Dolores $e) {
  printf("2nd catch : %s\n", get_class($e));
}

