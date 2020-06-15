<?php
session_start();
include('verifica_login.php');
?>

<h1> Area exclusiva para membros logados. </h1> 
<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
<h2><a href="logout.php">Sair</a></h2>
<h2><a href="http://iptvbsb.com/crud/paginas/index.html">Adicionar ou remover clientes (CRUD)</a></h2>



