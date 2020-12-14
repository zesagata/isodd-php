<?php


namespace zesagata\isoddphp;


class IsOdd {

    public static function isOdd($num): bool {
        if (num % 2 == 0) {
            return false;
        }
        return true;
    }

}