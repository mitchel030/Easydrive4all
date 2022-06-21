<?php
class Instructor
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }
}
