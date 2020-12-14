<?php

namespace zesagata\isoddphp;

class IsOdd {

  public static function isOdd($number): bool {
    if ($number % 2 == 0) {
        return false;
    }
    return true;
  }

}

?>