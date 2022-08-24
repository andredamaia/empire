<?php

// $pageurl = "https://".$_SERVER["SERVER_NAME"]; // Production
$pageurl = "../empire"; // Development

$url = explode('/', $_GET['cod']);
$page = $url["0"];
$subpage = $url["1"];

if($page == NULL){
	$page = "home";
}

if (!is_file("pages/".$page.".php")) { $page = "404"; }

switch($page){
	case "404":
		$title = "Página não encontrada";
		$description = "Infelizmente essa página não foi encontrada.";
		break;

	case "home":
		$title = "Empire Custom Doors";
		$description = "Projetos modernos e elegantes para o seu espaço";
		break;

	case "Xl-door":
		$title = "XL Door - Empire Custom Doors";
		$description = "A XL Door possui sistema de dupla vedação, que garante impermeabilização em toda a porta, evitando problemas com intempéries climáticas";
		break;

	case "Ultra-door":
		$title = "Ultra Door - Empire Custom Doors";
		$description = "A Ultra Door possui sistema de dupla vedação, que garante impermeabilização em toda a porta, evitando problemas com intempéries climáticas";
		break;

	default:
		$title = "Empire Custom Doors";
		$description = "Projetos modernos e elegantes para o seu espaço";
		break;
}

?>