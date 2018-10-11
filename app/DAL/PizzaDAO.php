<?php

require_once 'Banco.php';

class PizzaDAO {

    private $pdo;
    private $debug;

    public function __construct() {
        $this->pdo = new Banco();
        $this->debug = true;
    }

    public function Cadastrar(Pizza $pizza) {
        try {
            $sql = "INSERT INTO pizza (titulo, categoria, url, descricao, status, thumb, data, number_dia, dias, valor) "
                    . "VALUES (:titulo, :categoria, :url, :descricao,:status, :thumb, :data, :number_dia, :dias, :valor)";
            $param = array(
                ":titulo" => $pizza->getTitulo(),
                ":categoria" => $pizza->getCategoria(),
                ":url" => $pizza->getUrl(),
                ":descricao" => $pizza->getDescricao(),
                ":status" => $pizza->getStatus(),
                ":thumb" => $pizza->getThumb(),
                ":data" => $pizza->getData(),
                ":number_dia" => $pizza->getNumber_dia(),
                ":dias" => $pizza->getDias(),
                ":valor" => $pizza->getValor()
            );
            return $this->pdo->ExecuteNonQuery($sql, $param);
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    public function ListarPizza($inicio = null, $quantidade = null) {
        try {
            $sql = "SELECT p.cod_pizza, p.titulo, p.categoria, p.url, p.descricao, p.status, p.thumb, p.data, p.valor,
                    c.cod as codCat, c.titulo as tituloCat FROM pizza p
                    INNER JOIN categoria c ON p.categoria = c.cod AND p.status = 1  ORDER BY p.cod_pizza DESC LIMIT :inicio, :quantidade";
            $param = array(
                ":inicio" => $inicio,
                ":quantidade" => $quantidade
            );

            $dt = $this->pdo->ExecuteQuery($sql, $param);
            $listarPizza = [];
            foreach ($dt as $pts) {
                $pizza = new Pizza();
                $pizza->setCod_pizza($pts['cod_pizza']);
                $pizza->setTitulo($pts['titulo']);
                $pizza->setUrl($pts['url']);
                $pizza->setDescricao($pts['descricao']);
                $pizza->setStatus($pts['status']);
                $pizza->setThumb($pts['thumb']);
                $pizza->setData($pts['data']);
                $pizza->setValor($pts['valor']);
                $pizza->getCategoria()->setCod($pts['codCat']);
                $pizza->getCategoria()->setTitulo($pts['tituloCat']);
                $listarPizza[] = $pizza;
            }
            return $listarPizza;
        } catch (Exception $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    public function Excluir($cod_pizza) {
        try {
            $sql = "DELETE FROM pizza WHERE cod_pizza = :cod_pizza";
            $param = array(":cod_pizza" => $cod_pizza);
            return $this->pdo->ExecuteNonQuery($sql, $param);
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //retorno de produto com imagem
    public function retornaPizzaImagem($cod_pizza) {
        try {
            $sql = "SELECT cod_pizza, titulo, thumb FROM pizza WHERE cod_pizza = :cod_pizza";
            $param = array(":cod_pizza" => $cod_pizza);
            //Data Table
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $pizza = new Pizza();
            $pizza->setCod_pizza($dt['cod_pizza']);
            $pizza->setTitulo($dt['titulo']);
            $pizza->setThumb($dt['thumb']);

            return $pizza;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
    public function AlterarImagem($cod_pizza, $thumb) {
        try {
            $sql = "UPDATE pizza SET thumb = :thumb WHERE cod_pizza = :cod_pizza";
            $param = array(
                ":cod_pizza" => $cod_pizza,
                ":thumb" => $thumb
            );
            return $this->pdo->ExecuteNonQuery($sql, $param);
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //quantidades de produtos
    public function RetornaQtdPizza() {
        try {
            $sql = "SELECT count(pz.cod_pizza) as total FROM pizza pz";
            $dr = $this->pdo->ExecuteQueryOneRow($sql);
            if ($dr["total"] != null):
                return $dr["total"];
            else:
                return 0;
            endif;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //retorna dados do produto atraavés do cod
    public function retornaIdPizza($cod_pizza) {
        try {
            $sql = "SELECT p.cod_pizza, p.titulo, p.categoria, p.url, p.descricao, p.status, p.thumb, p.data, p.valor,"
                    . " c.cod as codCat, c.titulo as tituloCat FROM pizza p "
                    . "INNER JOIN categoria c ON p.categoria = c.cod WHERE p.cod_pizza = :cod_pizza";

            $param = array(":cod_pizza" => $cod_pizza);
            //Data Table
            $pts = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $pizza = new Pizza();
            $pizza->setCod_pizza($pts['cod_pizza']);
            $pizza->setTitulo($pts['titulo']);
            $pizza->setUrl($pts['url']);
            $pizza->setDescricao($pts['descricao']);
            $pizza->setStatus($pts['status']);
            $pizza->setThumb($pts['thumb']);
            $pizza->setData($pts['data']);
            $pizza->setValor($pts['valor']);
            $pizza->getCategoria()->setCod($pts['codCat']);
            $pizza->getCategoria()->setTitulo($pts['tituloCat']);

            return $pizza;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    public function Atualizar(Pizza $pizza) {
        try {

            $sql = "UPDATE pizza SET titulo = :titulo, categoria = :categoria, valor = :valor, url = :url, 
                descricao = :descricao, status = :status, data = :data
                WHERE cod_pizza = :cod_pizza";

            $param = array(
                ":cod_pizza" => $pizza->getCod_pizza(),
                ":titulo" => $pizza->getTitulo(),
                "valor" => $pizza->getValor(),
                ":categoria" => $pizza->getCategoria(),
                ":url" => $pizza->getUrl(),
                ":descricao" => $pizza->getDescricao(),
                ":status" => $pizza->getStatus(),
                ":data" => $pizza->getData()
            );

            return $this->pdo->ExecuteNonQuery($sql, $param);
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
    
    //    ----------------------------------------SITE PIZZA ----------------------------------;
    public function listarPizzaCat($categoria, $inicio = null, $quantidade = null) {
        try {
            $sql = "SELECT * FROM pizza WHERE categoria = :categoria and status = 1  LIMIT :inicio, :quantidade";

            $param = array(
                ":categoria" => $categoria,
                ":inicio" => $inicio,
                ":quantidade" => $quantidade
            );

            $dt = $this->pdo->ExecuteQuery($sql, $param);
            $listarPizzaCat = [];
            foreach ($dt as $rc) {
                $pizza = new Pizza();
                $pizza->setCod_pizza($rc['cod_pizza']);
                $pizza->setTitulo($rc['titulo']);
                $pizza->setUrl($rc['url']);
                $pizza->setDescricao($rc['descricao']);
                $pizza->setStatus($rc['status']);
                $pizza->setThumb($rc['thumb']);
                $pizza->setData($rc['data']);
                $pizza->setValor($rc['valor']);
                $pizza->setCategoria($rc['categoria']);
                $listarPizzaCat[] = $pizza;
            }
            return $listarPizzaCat;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE{$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
    //RETORNA PRODUCT PELA URL
    public function retornaUrlPizza($url) {
        try {
            $sql = "SELECT pz.cod_pizza, pz.titulo, pz.categoria, pz.url, pz.descricao, pz.status, pz.thumb, pz.data, pz.valor,
                   c.cod as codCat, c.titulo as tituloCat FROM pizza pz
                    INNER JOIN categoria c ON pz.categoria = c.cod WHERE pz.url = :url";

            $param = array(":url" => $url);
            //Data Table
            $pts = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $pizza = new Pizza();
            $pizza->setCod_pizza($pts['titulo']);
            $pizza->setTitulo($pts['titulo']);
            $pizza->setUrl($pts['url']);
            $pizza->setDescricao($pts['descricao']);
            $pizza->setStatus($pts['status']);
            $pizza->setThumb($pts['thumb']);
            $pizza->setData($pts['data']);
            $pizza->setValor($pts['valor']);
            $pizza->getCategoria()->setCod($pts['codCat']);
            $pizza->getCategoria()->setTitulo($pts['tituloCat']);

            return $pizza;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

}
