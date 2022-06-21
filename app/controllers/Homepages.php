<?php
class HomePages extends Controller {

  public function index() {
    $data = [
      'title' => "<h1>Homepage examen<h1>" 
    ];
    $this->view('homepages/index', $data);
  }
}