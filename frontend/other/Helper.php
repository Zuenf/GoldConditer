<?php

namespace app\other;

use Yii;

class Helper{

    public static function cutText($text, $maxLength = 200, $after = ''){
        $text = strip_tags($text);
        $text = mb_substr($text, 0, $maxLength);
        $text = mb_substr($text, 0, mb_strrpos($text, ' '));
        $text = rtrim($text, "!,.-");
        return $text.$after;
    }

}
