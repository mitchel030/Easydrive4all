<?php
// Dit wordt de parentclass van alle andere controller
// We loaden de model en de view

class Controller {
  protected function model($model) {
    require_once('../app/models/' . $model . '.php');
    return new $model();
  }

  protected function view($view, $data = []) {
    // hier word gekeken of je view bestaat zo niet voert die else uit en krijg je de error view bestaat niet
    if (file_exists('../app/views/' . $view . '.php')) {
      require_once('../app/views/' . $view . '.php');
    } else {
      die('View bestaat niet');
    }
  }
}
// -> de parent class ookwel baseclass genoemt moet altijd protected 
// waarom dit moet omdat andere niet bij de code moeten kunnen de parent class 
// zorgt alleen voor de childclass of te wel subclass en niet voor de andere!!