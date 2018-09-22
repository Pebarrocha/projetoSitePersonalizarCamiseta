<?php
# quando se usa o metodo POST o PHP cria 2 VETORES ( a partir da 5.x)
# $_POST[] e o $_REQUEST[]
# Os indices destes vetores são os nomes dos campos de formulário.


$bloco=$_POST['bloco'];
$sigla=$_REQUEST['sigla'];
$tx=$_POST['txnomeestado'];



printf("<html>\n<body>\n");
printf("Exibindo os valores<br>\n");
printf("Bloco: $bloco<br>\n");
printf("Sigla: $sigla<br>\n");
printf("Nome: $txnomeestado<br>\n");
printf("</body>\n");
printf("</html>\n")


?>