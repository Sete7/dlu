<?php

class PizzaController {

    private $pizzaDAO;

    public function __construct() {
        $this->pizzaDAO = new PizzaDAO();
    }

    public function Cadastrar(Pizza $pizza) {
        if (strlen($pizza->getTitulo()) > 3 && $pizza->getCategoria() != '' && strlen($pizza->getStatus()) > 0 && strlen($pizza->getStatus()) <= 3 && strlen($pizza->getDescricao()) > 10 && $pizza->getThumb() != '' && strlen($pizza->getValor() != '')):
            return $this->pizzaDAO->Cadastrar($pizza);
        else:
            return false;
        endif;
    }

    public function ListarPizza($inicio = null, $quantidade = null) {
        return $this->pizzaDAO->ListarPizza($inicio, $quantidade);
    }
    
    public function Excluir($cod_pizza) {
        return $this->pizzaDAO->Excluir($cod_pizza);
    }
    
     public function retornaPizzaImagem($cod_pizza) {
        return $this->pizzaDAO->retornaPizzaImagem($cod_pizza);
    }
    
     public function AlterarImagem($cod_pizza, $thumb) {
         return $this->pizzaDAO->AlterarImagem($cod_pizza, $thumb);
     }

    public function RetornaQtdPizza() {
        return $this->pizzaDAO->RetornaQtdPizza();
    }
    
      public function retornaIdPizza($cod_pizza) {
        return $this->pizzaDAO->retornaIdPizza($cod_pizza);
    }
    
    public function Atualizar(Pizza $pizza) {
        return $this->pizzaDAO->Atualizar($pizza);
    }
    
     public function listarPizzaCat($categoria, $inicio = null, $quantidade = null) {
         return $this->pizzaDAO->listarPizzaCat($categoria, $inicio, $quantidade);
     }
     
     public function retornaUrlPizza($url) {
         return $this->pizzaDAO->retornaUrlPizza($url);
     }

}
