<?php
class Student
{
  private $db;

  private $table = 'request';
  public function __construct()
  {
    $this->db = new Database;
  }

  // Request article function

  public function getRequest() {
    // $this->db->query("SELECT * FROM request
    // INNER JOIN instructors ON request.drivinglessonid=instructors.iid");
    $this->db->query("SELECT * FROM oak_request
    INNER JOIN oak_instructors ON oak_request.ID=oak_instructors.ID");
  
  
    $result = $this->db->resultSet();
  
    return $result;
  
  }
  //public function getRequest() {
    //$sql = "SELECT * FROM `request`;";
    //$this->db->query($sql);
    //$request = $this->db->resultSet();
    //return $request;
  //}


}
