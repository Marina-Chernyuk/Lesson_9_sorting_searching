<?php

include_once 'randArray.php';
include_once 'delete.php';

include_once 'Sort/bubbleSort.php';
include_once 'Sort/shakerSort.php';
include_once 'Sort/quickSort.php';
include_once 'Sort/heapSort.php';

include_once 'Search/linearSearch.php';
include_once 'Search/binarySearch.php';
include_once 'Search/interpolationSearch.php';

// Задание 1. Создать массив на миллион элементов и отсортировать его различными способами. Сравнить скорости.

$myArray = randArray(5000, 1, 5000);

// пузырьковая сортировка
$start = microtime(true);
bubbleSort($myArray);
$end = microtime(true);
echo 'Пузырьковая Сортировка: ' . ($end - $start) . PHP_EOL;

// сортировка расчёсткой
$start = microtime(true);
combSort($arr);
$end = microtime(true);
echo "Сортировка расчёской: " . ($end - $start).PHP_EOL;

// шейкерная сортировка
$start = microtime(true);
shakerSort($myArray);
$end = microtime(true);
echo 'Шейкерная сортировка: ' . ($end - $start) . PHP_EOL;

// быстрая сортировка
$start = microtime(true);
quickSort($myArray);
$end = microtime(true);
echo 'Быстрая сортировка: ' . ($end - $start) . PHP_EOL;

// пирамидальная сортировка
$start = microtime(true);
heapSort($myArray);
$end = microtime(true);
echo 'Пирамидальная сортировка: ' . ($end - $start) . PHP_EOL;

// сортировка выбором
$start = microtime(true);
dualSelectSort($arr);
$end = microtime(true);
echo "Сортировка выбором: " . ($end - $start).PHP_EOL;

// Задание 2. Реализовать удаление элемента массива по его значению. Обратите внимание на возможные дубликаты!

$secondArray = randArray(100, 1, 50);
echo deleteArray($secondArray, 47) . PHP_EOL;

// Задание 3. Подсчитать практически количество шагов при поиске описанными в методичке алгоритмами.

$thirdArray = randArray(3000, 1, 50000);

const NUM = 5748;

echo "Линейный поиск" . PHP_EOL;
echo linearSearch($thirdArray, NUM) . PHP_EOL;

echo "Бинарный поиск" . PHP_EOL;
echo binarySearch($thirdArray, NUM) . PHP_EOL;

echo "Интерполяционный" . PHP_EOL;
echo interpolationSearch($thirdArray, NUM);
