<?php
// Dit wordt de parentclass van alle andere controller
// We loaden de model en de view
class Controller {
  protected function model($model) {
    require_once('../app/models/' . $model . '.php');
    return new $model();
  }

// hieronder maak je een functie voor view hier kijkt die of er een view is
// zo niet voert die else uit en krijg je de error view bestaat niet
  protected function view($view, $data = []) {
    if (file_exists('../app/views/' . $view . '.php')) {
      require_once('../app/views/' . $view . '.php');
    } else {
      die('View bestaat niet');
    }
  }
}
// -> de parent class ook wel baseclass genoemt moet altijd protected 
// waarom dit moet omdat andere niet bij de code moeten kunnen de parent class 
// zorgt alleen voor de childclass of te wel subclass genoemt en niet voor de andere!!