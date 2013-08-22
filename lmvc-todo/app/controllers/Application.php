<?php

namespace controllers;

use models\Todos;
use Scandio\lmvc;

class Application extends lmvc\controller
{
   public static function index($key = null, $value = null)
   {
      return static::render([
         'todos' => Todos::findAll(['id DESC'])->all()
      ]);
   }

   public static function status($todoId)
   {
      $todo = Todos::findById($todoId);

      $todo->done = ( $todo->done == 1 ) ? 0 : 1;

      $todo->update();

      return static::redirect('Application::index');
   }

   public static function add()
   {
      $todo = new Todos;

      $todo->todo = static::request()->todo;
      $todo->done = 0;

      $todo->insert();

      return static::redirect('Application::index');
   }

   public static function delete($todoId)
   {
      $todo = Todos::findById($todoId);
      $todo->delete();

      return static::redirect('Application::index');
   }

   public static function done()
   {
      return static::render([
         'todos' => Todos::findBy('done', 1)->all()
      ], 'app/views/application/index.html');
   }

   public static function undone()
   {
      return static::render([
         'todos' => Todos::findBy('done', 0)->all()
      ], 'app/views/application/index.html');
   }
}