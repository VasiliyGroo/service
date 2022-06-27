<?php

require_once "./vendor/autoload.php";

$document = new \PhpOffice\PhpWord\TemplateProcessor("./word/invitation-to-draw-up-an-act.docx");

$uploadDir = __DIR__;

$outputFile = "Приглашение на составление АКТА.docx";

$address = $_POST['address'];

$company = $_POST['company'];

$name_company = $_POST['name_company'];

$name = $_POST['name'];

$name_sign = $_POST['name_sign'];

$name_o_company = $_POST['name_o_company'];

$address_company = $_POST['address_company'];

$tel = $_POST['tel'];

$date = $_POST['date'];

$date_go = $_POST['date_go'];

$problem = $_POST['problem'];

$hours = $_POST['hours'];

$minutes = $_POST['minutes'];

$document -> setValue('address', $address);
$document -> setValue('address_company', $address_company);
$document -> setValue('name', $name);
$document -> setValue('name_sign', $name_sign);
$document -> setValue('name_o_company', $name_o_company);
$document -> setValue('name_company', $name_company);
$document -> setValue('problem', $problem);
$document -> setValue('date', $date);
$document -> setValue('date_go', $date_go);
$document -> setValue('tel', $tel);
$document -> setValue('hours', $hours);
$document -> setValue('minutes', $minutes);
$document -> setValue('company', $company);

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