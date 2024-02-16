<?php

namespace Controller;
use Model\BookModel;

class BookController 
{
    private $model;

    public function __construct()
    {
        $this->model = new BookModel;
    }

    public function getBooks()
    {
        return ($this->model->getBooks()) ?
        $this->model->getBooks() : "No hay libros disponibles";
    }
}