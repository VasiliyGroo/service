<?php

require_once "./vendor/autoload.php";

$document = new \PhpOffice\PhpWord\TemplateProcessor("./word/act-corpus-section17.docx");

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

$uploadFileE = $uploadDir . '\\' . basename($_FILES['file_e']['name']);
move_uploaded_file($_FILES['file_e']['tmp_name'], $uploadFileE);

$uploadFileF = $uploadDir . '\\' . basename($_FILES['file_f']['name']);
move_uploaded_file($_FILES['file_f']['tmp_name'], $uploadFileF);

$uploadFileG = $uploadDir . '\\' . basename($_FILES['file_g']['name']);
move_uploaded_file($_FILES['file_g']['tmp_name'], $uploadFileG);

$uploadFileH = $uploadDir . '\\' . basename($_FILES['file_h']['name']);
move_uploaded_file($_FILES['file_h']['tmp_name'], $uploadFileH);

$uploadFileI = $uploadDir . '\\' . basename($_FILES['file_i']['name']);
move_uploaded_file($_FILES['file_i']['tmp_name'], $uploadFileI);

$uploadFileJ = $uploadDir . '\\' . basename($_FILES['file_j']['name']);
move_uploaded_file($_FILES['file_j']['tmp_name'], $uploadFileJ);

$uploadFileK = $uploadDir . '\\' . basename($_FILES['file_k']['name']);
move_uploaded_file($_FILES['file_k']['tmp_name'], $uploadFileK);

$uploadFileL = $uploadDir . '\\' . basename($_FILES['file_l']['name']);
move_uploaded_file($_FILES['file_l']['tmp_name'], $uploadFileL);

$uploadFileM = $uploadDir . '\\' . basename($_FILES['file_m']['name']);
move_uploaded_file($_FILES['file_m']['tmp_name'], $uploadFileM);

$uploadFileN = $uploadDir . '\\' . basename($_FILES['file_n']['name']);
move_uploaded_file($_FILES['file_n']['tmp_name'], $uploadFileN);

$uploadFileO = $uploadDir . '\\' . basename($_FILES['file_o']['name']);
move_uploaded_file($_FILES['file_o']['tmp_name'], $uploadFileO);

$uploadFileP = $uploadDir . '\\' . basename($_FILES['file_p']['name']);
move_uploaded_file($_FILES['file_p']['tmp_name'], $uploadFileP);

$num_section = $_POST['num_section'];

$num_corpus = $_POST['num_corpus'];

$num_build_corpus = $_POST['num_build_corpus'];

$floor = $_POST['floor'];

$description_problem = $_POST['description_problem'];
$description_problem_a = $_POST['description_problem_a'];
$description_problem_b = $_POST['description_problem_b'];
$description_problem_c = $_POST['description_problem_c'];
$description_problem_d = $_POST['description_problem_d'];
$description_problem_e = $_POST['description_problem_e'];
$description_problem_f = $_POST['description_problem_f'];
$description_problem_g = $_POST['description_problem_g'];
$description_problem_h = $_POST['description_problem_h'];
$description_problem_i = $_POST['description_problem_i'];
$description_problem_j = $_POST['description_problem_j'];
$description_problem_k = $_POST['description_problem_k'];
$description_problem_l = $_POST['description_problem_l'];
$description_problem_m = $_POST['description_problem_m'];
$description_problem_n = $_POST['description_problem_n'];
$description_problem_o = $_POST['description_problem_o'];
$description_problem_p = $_POST['description_problem_p'];

$image = $_POST['image'];
$image_a = $_POST['image_a'];
$image_b = $_POST['image_b'];
$image_c = $_POST['image_c'];
$image_d = $_POST['image_d'];
$image_e = $_POST['image_e'];
$image_f = $_POST['image_f'];
$image_g = $_POST['image_g'];
$image_h = $_POST['image_h'];
$image_i = $_POST['image_i'];
$image_j = $_POST['image_j'];
$image_k = $_POST['image_k'];
$image_l = $_POST['image_l'];
$image_m = $_POST['image_m'];
$image_n = $_POST['image_n'];
$image_o = $_POST['image_o'];
$image_p = $_POST['image_p'];

$document -> setValue('num_section', $num_section);
$document -> setValue('num_corpus', $num_corpus);
$document -> setValue('num_build_corpus', $num_build_corpus);
$document -> setValue('floor', $floor);
$document -> setValue('description_problem', $description_problem);
$document -> setValue('description_problem_a', $description_problem_a);
$document -> setValue('description_problem_b', $description_problem_b);
$document -> setValue('description_problem_c', $description_problem_c);
$document -> setValue('description_problem_d', $description_problem_d);
$document -> setValue('description_problem_e', $description_problem_e);
$document -> setValue('description_problem_f', $description_problem_f);
$document -> setValue('description_problem_g', $description_problem_g);
$document -> setValue('description_problem_h', $description_problem_h);
$document -> setValue('description_problem_i', $description_problem_i);
$document -> setValue('description_problem_j', $description_problem_j);
$document -> setValue('description_problem_k', $description_problem_k);
$document -> setValue('description_problem_l', $description_problem_l);
$document -> setValue('description_problem_m', $description_problem_m);
$document -> setValue('description_problem_n', $description_problem_n);
$document -> setValue('description_problem_o', $description_problem_o);
$document -> setValue('description_problem_p', $description_problem_p);
$document -> setImageValue('image', array('path' => $uploadFile, 'width' => 305, 'height' => 330, 'ratio' => false));
$document -> setImageValue('image_a', array('path' => $uploadFileA, 'width' => 305, 'height' => 330, 'ratio' => false));
$document -> setImageValue('image_b', array('path' => $uploadFileB, 'width' => 305, 'height' => 330, 'ratio' => false));
$document -> setImageValue('image_c', array('path' => $uploadFileC, 'width' => 305, 'height' => 330, 'ratio' => false));
$document -> setImageValue('image_d', array('path' => $uploadFileD, 'width' => 305, 'height' => 330, 'ratio' => false));
$document -> setImageValue('image_e', array('path' => $uploadFileE, 'width' => 305, 'height' => 330, 'ratio' => false));
$document -> setImageValue('image_f', array('path' => $uploadFileF, 'width' => 305, 'height' => 330, 'ratio' => false));
$document -> setImageValue('image_g', array('path' => $uploadFileG, 'width' => 305, 'height' => 330, 'ratio' => false));
$document -> setImageValue('image_h', array('path' => $uploadFileH, 'width' => 305, 'height' => 330, 'ratio' => false));
$document -> setImageValue('image_i', array('path' => $uploadFileI, 'width' => 305, 'height' => 330, 'ratio' => false));
$document -> setImageValue('image_j', array('path' => $uploadFileJ, 'width' => 305, 'height' => 330, 'ratio' => false));
$document -> setImageValue('image_k', array('path' => $uploadFileK, 'width' => 305, 'height' => 330, 'ratio' => false));
$document -> setImageValue('image_l', array('path' => $uploadFileL, 'width' => 305, 'height' => 330, 'ratio' => false));
$document -> setImageValue('image_m', array('path' => $uploadFileM, 'width' => 305, 'height' => 330, 'ratio' => false));
$document -> setImageValue('image_n', array('path' => $uploadFileN, 'width' => 305, 'height' => 330, 'ratio' => false));
$document -> setImageValue('image_o', array('path' => $uploadFileO, 'width' => 305, 'height' => 330, 'ratio' => false));
$document -> setImageValue('image_p', array('path' => $uploadFileP, 'width' => 305, 'height' => 330, 'ratio' => false));

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
unlink($uploadFileE);
unlink($uploadFileF);
unlink($uploadFileG);
unlink($uploadFileH);
unlink($uploadFileI);
unlink($uploadFileJ);
unlink($uploadFileK);
unlink($uploadFileL);
unlink($uploadFileM);
unlink($uploadFileN);
unlink($uploadFileO);
unlink($uploadFileP);

unlink($outputFile);