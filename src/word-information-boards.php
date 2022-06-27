<?php

require_once "./vendor/autoload.php";

$document = new \PhpOffice\PhpWord\TemplateProcessor("./word/information-boards.docx");

$uploadDir = __DIR__;

$outputFile = "Информационные доски.docx";

$address = $_POST['address'];

$name_uk = $_POST['name_uk'];

$apartment = $_POST['apartment'];

$name = $_POST['name'];

$name = $_POST['name_dp'];

$address_uk = $_POST['address_uk'];



$document -> setValue('address', $address);
$document -> setValue('address_uk', $address_uk);
$document -> setValue('name', $name);
$document -> setValue('name_dp', $name_dp);
$document -> setValue('name_uk', $name_uk);
$document -> setValue('apartment', $apartment);

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