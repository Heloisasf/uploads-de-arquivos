<?php
$target_dir = "uploads/";
$target_image = $target_dir . basename($_FILES["imagem"]["name"]);
$target_pdf = $target_dir . basename($_FILES["pdf"]["name"]);

move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_image);
move_uploaded_file($_FILES["pdf"]["tmp_name"], $target_pdf);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagem e PDF</title>
</head>
<body>
    <h1>Imagem:</h1>
    <img src="<?php echo $target_image; ?>" alt="Imagem">

    <h1>PDF:</h1>
    <a href="<?php echo $target_pdf; ?>" target="_blank">Baixar PDF</a>
</body>
</html>