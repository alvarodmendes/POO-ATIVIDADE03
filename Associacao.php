<?php

require('Fabricante.php');
require('Produto.php');

$TecladoBizurado = new Produto();
$BlackEagle= new Fabricante();

echo "A descrição do produto é ".$TecladoBizurado->getDescricao()." e seu fabricante é a ".$BlackEagle->getNome();
