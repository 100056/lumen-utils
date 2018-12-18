<?php

/**
 * 将以逗号分隔的字附串转换为数组
 * @param string $str
 * @return array
 */
function getArray($str) {
    $str = explode(',', $str);
    foreach ($str as $k => $v) {
        if (!$v) {
            unset($str[$k]);
        }
    }
    return $str;
}


