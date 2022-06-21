<?php
class Instructors extends Controller
{
  public function __construct()
  {
    $this->userModel = $this->model('Instructor');
  }

  public function index()
  {
    $this->view('instructors/index');
  }
}
