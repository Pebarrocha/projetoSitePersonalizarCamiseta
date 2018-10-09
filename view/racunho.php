<?php
header('Content-Type: text/html; charset=utf-8');
$nometemp = $_FILES['img']["tmp_name"];
$nomereal=$_FILES["img"]["name"];
copy($nometemp,$nomereal);
$data   = fopen($nomereal, 'r');
$size   = filesize($nomereal);
$contents= fread($data, $size);
fclose($data);
$imagestring =  base64_encode($contents);

$imagedecode = base64_decode($imagestring);

echo $imagestring;
unlink($nomereal);

?>

$caminho=$this->Ini->path_imagens.'\';

$img = glob($caminho."*.{jpg,png,gif}", GLOB_BRACE);
$contador = count($img);

foreach ($img as $img) {
$imagem='<a href=""><img src="'.$img.'" /></a>';
// echo $imagem."<BR>"; Imagem Simples sem base64.

$img_file=$img;
// Ler o arquivo de imagem na pasta, converter para base64
$imgData64 = base64_encode(file_get_contents($img_file)); // Essa variável pode gravar no MySQL.


// Parte Opcional só para mostrar a imagem codificada base64
// Formatar Para Mostrar no Navegador SRC:  data:{mime};base64,{data};
$src = 'data: '.mime_content_type($img_file).';base64,'.$imgData64;
// Aqui Mostramos ela já como BASE64
echo '<img src="'.$src.'">';
}
