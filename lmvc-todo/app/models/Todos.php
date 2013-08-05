<?php

namespace models;

use troba\Model;

class Todos
{
    use Model\Finders, Model\Persisters;

    public static function findByName($name) {
        return static::findBy('name', $name)->one();
    }

    public static function findById($id) {
        return static::findBy('id', $id)->one();
    }
}