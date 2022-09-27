<?php

//Сортировка выбором
function selectSort(array $arr) {
    $count= count($arr);
    if ($count <= 1){
        return $arr;
    }
 
    for ($i = 0; $i < $count; $i++){
        $k = $i;
 
        for($j = $i + 1; $j < $count; $j++){
            if ($arr[$k] > $arr[$j]){
                $k = $j;
            }
 
            if ($k != $i){
                $tmp = $arr[$i];
                $arr[$i] = $arr[$k];
                $arr[$k] = $tmp;
            }
        }
    }
 
    return $arr;
}

/**
 * Выполняет сортировку массива
 * @param string $str строка элементов, разделённых запятыми
 */
function sorting(string $str): string
{
    $array = array_map(function ($element) {
        return intval($element);
    }, explode(",", $str));

    $new_array = selectSort($array);
    return join(", ", $new_array);
}
