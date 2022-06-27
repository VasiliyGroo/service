<?php

require_once "./vendor/autoload.php";

$document = new \PhpOffice\PhpWord\TemplateProcessor("./word/act-corpus-section.docx");

$uploadDir = __DIR__;

$outputFile = "Акт фиксации строительных недостатков.docx";

$uploadFile = $uploadDir . '\\' . basename($_FILES['file']['name']);
move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile);

$num_section = $_POST['num_section'];

$num_corpus = $_POST['num_corpus'];

$num_build_corpus = $_POST['num_build_corpus'];

$floor = $_POST['floor'];

$description_problem = $_POST['description_problem'];


$image = $_POST['image'];



$document -> setValue('num_section', $num_section);
$document -> setValue('num_corpus', $num_corpus);
$document -> setValue('num_build_corpus', $num_build_corpus);
$document -> setValue('floor', $floor);
$document -> setValue('description_problem', $description_problem);
$document -> setImageValue('image', array('path' => $uploadFile, 'width' => 305, 'height' => 330, 'ratio' => false));


$document -> saveAs($outputFile);

$downloadFile = $outputFile;

header("Content-Type: application/octet-stream");

header("Accept-Ranges: bytes");

header("Content-Length: ".filesize($downloadFile));

header("Content-Disposition: attachment; filename=".$downloadFile);  

readfile($downloadFile);

unlink($uploadFile);

unlink($outputFile);