<?php

require_once("vendor/autoload.php");

use \Slim\Slim;
use Hcode\Page;

$app = new Slim();

$app->config('debug', true);

// Definindo a rota para a página principal
$app->get('/', function () {

	// Criando uma nova instância de Page dentro da função anônima
	$page = new Page();

	// Renderizando o template 'index'
	$page->setTpl("index");
});

$app->run();