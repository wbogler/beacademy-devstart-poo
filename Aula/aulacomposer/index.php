
<?php

//include 'classes/Clientes.php';
//include 'classes/Fornecedores.php';
//include 'classes/Produtos.php';

//definindo qual classe deseja-se usar

//$us1 = new classes\Usuario;

//$us2 = new classes\config\Usuario();

//outra forma

use classes\config\Usuario;

$us2 - new Usuario;

$dompdf = new Dompdf();
$dompdf->loadHtml('hello world');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
