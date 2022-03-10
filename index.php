<?php 
//Creare una variabile con un paragrafo di testo a vostra scelta.
$paragraph = 'Lorem ipsum elit dolor sit amet consectetur, adipisicing elit. Animi commodi corrupti placeat reprehenderit elit necessitatibus voluptates vel in, inventore elit pariatur aliquam reiciendis, illum accusantium ad consectetur veniam dicta enim unde perferendis.';

$parolaDaCensurare = $_GET['elit'];

$censoredParagraph = str_replace($parolaDaCensurare, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Paragrafo iniziale</h1>
<p> <?php echo $paragraph ?></p>
<p> La lunghezza del paragrafo è di <?php echo strlen($paragraph); ?> caratteri.</p>


<h1>Paragrafo Censurato</h1>
<p><?php echo $censoredParagraph ?></p>
<p>La lunghezza del paragrafo censurato è di <?php echo strlen($censoredParagraph); ?> caratteri</p>
    
</body>
</html>