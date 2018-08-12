<p align="center">
  <a href="https://cakephp.org/" target="_blank" >
    <img alt="Camiseta" src="https://img.clasf.com.br/2016/05/30/Kit-Com-3-Camisetas-Personalizadas-Festa-Infantil-E-Criana-20160530233949.jpg" width="400" />
  </a>
</p>

# Projeto site para personalizacao de camiseta

Repositório para trabalho de laboratório de engenharia de software

Grupo: Felipe, Gustavo, Pedro, Renan

# Instruções

Se estiver usando o xampp: Colocar os arquivos deste repositório na pasta HTDOCS dentro da pasta XAMPP: C:\xampp\htdocs
Caso contrário os arquivos php não funcionaram.
Para usar os arquivos, acessar http://localhost depois de ligar o apache e o mysql

# Links Úteis

<br>XAMPP: https://www.apachefriends.org/pt_br/index.html
<br>POSTGRE: https://www.postgresql.org/
<br>Editores de Texto: 
<br>NotePad: https://notepad-plus-plus.org/
<br>Sublime: https://www.sublimetext.com/

# Vídeos sobre como usar o GIT

https://www.youtube.com/watch?v=WVLhm1AMeYE&list=PLInBAd9OZCzzHBJjLFZzRl6DgUmOeG3H0

# Conexão do postgre com o php

<!--><?php
if(!@($conexao=pg_connect ("host=localhost dbname= port= user= password="))) {
   print "Não foi possível estabelecer uma conexão com o banco de dados.";
} else {
   pg_close ($conexao);
   print "Conexão OK!"; 
}
?><!-->

# Configurar o PHP.ini para aceitar a conexão do postgre


Tirar os comentários ( ; ) dos sequintes 

extension=pdo_pgsql
<br>
extension=pgsql
 

