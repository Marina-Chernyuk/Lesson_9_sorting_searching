<?php

function deleteArray(array $array, $el): string
{
    $message = 'удалён из массива ';
    $flag = false;

    $array = quickSort($array);

    foreach ($array as $key => $value) {
        if ($value == $el) {
            $flag = true;
            $message .= "{$key} элемент равный {$array[$key]} ";
            unset($array[$key]);
        }
    }
    if ($flag) {
        return $message;
    } else {
        return 'Элемента с таким значением в массиве нет';
    }
}
