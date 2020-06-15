<?php

if(!isset($_SESSION['usuario']) || !$_SESSION['usuario']) {
	
            echo "<script>
                alert('Esta página só pode ser acessada por usuário logado');
                window.location.href = 'index.html';
                </script>";

	exit();
}


