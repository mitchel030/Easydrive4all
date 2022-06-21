<?php
class HomePages extends Controller {

  public function index() {
    $data = [
      'title' => "<h1>Homepage Planning les<h1>" 
    ];
    $this->view('homepages/index', $data);
  }
}