<?php
    session_start();
    date_default_timezone_set('America/Sao_Paulo');
    require("conecta.php");
//error_reporting(E_ALL);

$filename = $_POST['filename'];
$x1 = $_POST['input_x1'];
$y1 = $_POST['input_y1'];
$x2 = $_POST['input_x2'];
$y2 = $_POST['input_y2'];
$w = $_POST['input_w'];
$h = $_POST['input_h'];


$novaImage = imagecreatetruecolor($w, $h);
//imagecreatetruecolor: cria uma imagem true color(sla oqq é issokkkk)

$size = getimagesize($filename);

if ($size['mime'] == 'image/jpeg') {
    $img = imagecreatefromjpeg($filename);
    //imagecreatefromjpeg: Cria uma nova imagem a partir de um arquivo ou URL

    imagecopyresampled($novaImage, $img, 0, 0, $x1, $y1, $w, $h, $w, $h);
    //imagecopyresampled: Copie e redimensione parte de uma imagem com reamostragem

    $filename = str_replace('.jpg', '_crop.jpg', $filename);
    //str_replace: Substitui todas as ocorrências da string de procura com a string de substituição
    imagejpeg($novaImage, $filename);
    //imagejpeg: Envia a imagem para o borwser ou arquivo
}
if ($size['mime'] == 'image/png') {
    $img = imagecreatefrompng($filename);
    imagecopyresampled($novaImage, $img, 0, 0, $x1, $y1, $w, $h, $w, $h);

    $filename = str_replace('.png', '_crop.png', $filename);
    imagepng($novaImage, $filename);
}

imagedestroy($novaImage);
imagedestroy($img);
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Jcrop - Upload</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/jquery.Jcrop.css" type="text/css" />
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Exemplo Jcrop - Upload</h1>
        <div class="text-center">
            <img src="<?php echo $filename; ?>" class="img-thumbnail">
            <br>
            <a href="<?php echo $filename ?>" target="_blank"><?php echo $filename ?></a>

        </div>
    </div>




</body>

</html>