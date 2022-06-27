<?php

require_once "./vendor/autoload.php";

$document = new \PhpOffice\PhpWord\TemplateProcessor("./word/act-of-fixing.docx");

$uploadDir = __DIR__;

$outputFile = "Акт фиксации.docx";

$address = $_POST['address'];

$summary = $_POST['summary'];

$list = $_POST['list'];

$num_id = $_POST['num_id'];

$date = $_POST['date'];

$hours = $_POST['hours'];

$minutes = $_POST['minutes'];

$date_submission = $_POST['date_submission'];

$quantity = $_POST['quantity'];



$document -> setValue('address', $address);
$document -> setValue('summary', $summary);
$document -> setValue('num_id', $num_id);
$document -> setValue('hours', $hours);
$document -> setValue('minutes', $minutes);
$document -> setValue('date_submission', $date_submission);
$document -> setValue('date', $date);
$document -> setValue('list', $list);
$document -> setValue('quantity', $quantity);

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