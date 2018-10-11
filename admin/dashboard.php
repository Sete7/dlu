<?php
require_once './inc/header.php';

$pagina = filter_input(INPUT_GET, "pagina", FILTER_SANITIZE_STRING);

$arrayPaginas = array(
    "dashboard" => "View/dashboard.phtml",
    "user" => "View/User/user.phtml",
    "editarUser" => "View/User/editarUser.phtml",
    "categoria" => "View/Categoria/categoria.phtml",
    "listarCategoria" => "View/Categoria/listarCategoria.phtml",
    "editarCategoria" => "View/Categoria/editarCategoria.phtml",
    "slider" => "View/Slider/slider.phtml",
    "listSlider" => "View/Slider/listSlider.phtml",
    "updateSlider" => "View/Slider/updateSlider.phtml",
    "updateThumb" => "View/Slider/updateThumb.phtml",

    "pizza" => "View/Pizza/pizza.phtml",
    "listarPizza" => "View/Pizza/listarPizza.phtml",
    "editarPizza" => "View/Pizza/editarPizza.phtml",
    "receita" => "View/Receita/receita.phtml",
    "listarReceita" => "View/Receita/listarReceita.phtml",
    "editarReceita" => "View/Receita/editarReceita.phtml"
 
);

if ($pagina) {
    $encontrou = false;

    foreach ($arrayPaginas as $page => $key) {
        if ($pagina == $page) {
            $encontrou = true;
            require_once($key);
        }
    }

    if (!$encontrou) {
        require_once("View/dashboard.phtml");
    }
} else {
    require_once("View/dashboard.phtml");
}

require_once './inc/footer.php';
