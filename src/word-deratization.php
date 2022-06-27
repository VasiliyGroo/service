<?php

require_once "./vendor/autoload.php";

$document = new \PhpOffice\PhpWord\TemplateProcessor("./word/deratization.docx");

$uploadDir = __DIR__;

$outputFile = "Дератизация и дезинсекция.docx";

$address = $_POST['address'];

$name = $_POST['name'];

$number = $_POST['number'];

$name_uk = $_POST['name_uk'];

$address_uk = $_POST['address_uk'];

$document -> setValue('address', $address);
$document -> setValue('name', $name);
$document -> setValue('number', $number);
$document -> setValue('name_uk', $name_uk);
$document -> setValue('address_uk', $address_uk);

$document -> saveAs($outputFile);

// Имя скачиваемого файла
$downloadFile = $outputFile;

// Контент-тип означающий скачивание
header("Content-Type: application/octet-stream");

// Размер в байтах
header("Accept-Ranges: bytes");

// Размер файла
header("Content-Length: ".filesize($downloadFile));

// Расположение скачиваемого файла
header("Content-Disposition: attachment; filename=".$downloadFile);  

// Прочитать файл
readfile($downloadFile);

unlink($outputFile);