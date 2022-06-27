<?php

require_once "./vendor/autoload.php";

$document = new \PhpOffice\PhpWord\TemplateProcessor("./word/act-corpus-section5.docx");

$uploadDir = __DIR__;

$outputFile = "Акт фиксации строительных недостатков.docx";

$uploadFile = $uploadDir . '\\' . basename($_FILES['file']['name']);
move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile);

$uploadFileA = $uploadDir . '\\' . basename($_FILES['file_a']['name']);
move_uploaded_file($_FILES['file_a']['tmp_name'], $uploadFileA);

$uploadFileB = $uploadDir . '\\' . basename($_FILES['file_b']['name']);
move_uploaded_file($_FILES['file_b']['tmp_name'], $uploadFileB);

$uploadFileC = $uploadDir . '\\' . basename($_FILES['file_c']['name']);
move_uploaded_file($_FILES['file_c']['tmp_name'], $uploadFileC);

$uploadFileD = $uploadDir . '\\' . basename($_FILES['file_d']['name']);
move_uploaded_file($_FILES['file_d']['tmp_name'], $uploadFileD);

$num_section = $_POST['num_section'];

$num_corpus = $_POST['num_corpus'];

$num_build_corpus = $_POST['num_build_corpus'];

$floor = $_POST['floor'];

$description_problem = $_POST['description_problem'];
$description_problem_a = $_POST['description_problem_a'];
$description_problem_b = $_POST['description_problem_b'];
$description_problem_c = $_POST['description_problem_c'];
$description_problem_d = $_POST['description_problem_d'];

$image = $_POST['image'];
$image_a = $_POST['image_a'];
$image_b = $_POST['image_b'];
$image_c = $_POST['image_c'];
$image_d = $_POST['image_d'];

$document -> setValue('num_section', $num_section);
$document -> setValue('num_corpus', $num_corpus);
$document -> setValue('num_build_corpus', $num_build_corpus);
$document -> setValue('floor', $floor);
$document -> setValue('description_problem', $description_problem);
$document -> setValue('description_problem_a', $description_problem_a);
$document -> setValue('description_problem_b', $description_problem_b);
$document -> setValue('description_problem_c', $description_problem_c);
$document -> setValue('description_problem_d', $description_problem_d);
$document -> setImageValue('image', array('path' => $uploadFile, 'width' => 305, 'height' => 330, 'ratio' => false));
$document -> setImageValue('image_a', array('path' => $uploadFileA, 'width' => 305, 'height' => 330, 'ratio' => false));
$document -> setImageValue('image_b', array('path' => $uploadFileB, 'width' => 305, 'height' => 330, 'ratio' => false));
$document -> setImageValue('image_c', array('path' => $uploadFileC, 'width' => 305, 'height' => 330, 'ratio' => false));
$document -> setImageValue('image_d', array('path' => $uploadFileD, 'width' => 305, 'height' => 330, 'ratio' => false));

$document -> saveAs($outputFile);

$downloadFile = $outputFile;

header("Content-Type: application/octet-stream");

header("Accept-Ranges: bytes");

header("Content-Length: ".filesize($downloadFile));

header("Content-Disposition: attachment; filename=".$downloadFile);  

readfile($downloadFile);

unlink($uploadFile);
unlink($uploadFileA);
unlink($uploadFileB);
unlink($uploadFileC);
unlink($uploadFileD);

unlink($outputFile);