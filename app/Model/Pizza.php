<?php

class Pizza {

    private $cod_pizza;
    private $titulo;
    private $categoria;
    private $url;
    private $descricao;
    private $status;
    private $thumb;
    private $data;
    private $number_dia;
    private $dias;
    private $valor;

    function getValor() {
        return $this->valor;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    public function __construct() {
        $this->categoria = new Categoria();
    }

    function getCod_pizza() {
        return $this->cod_pizza;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getUrl() {
        return $this->url;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getStatus() {
        return $this->status;
    }

    function getThumb() {
        return $this->thumb;
    }

    function getData() {
        return $this->data;
    }

    function getNumber_dia() {
        return $this->number_dia;
    }

    function getDias() {
        return $this->dias;
    }

    function setCod_pizza($cod_pizza) {
        $this->cod_pizza = $cod_pizza;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setUrl($url) {
        $this->url = $url;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setThumb($thumb) {
        $this->thumb = $thumb;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setNumber_dia($number_dia) {
        $this->number_dia = $number_dia;
    }

    function setDias($dias) {
        $this->dias = $dias;
    }

}
