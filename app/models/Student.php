<?php
class Student
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // Request article function
  public function requestArticle($naam, $studentennummer, $item) {
    $n = $naam;
    $sn = $studentennummer;
    $i = $item;

    //SQL Statement
    $sql = "INSERT INTO `request` 
                            (`studentenid`,
                             `naam`, 
                             `studentennummer`, 
                             `item`) 
                            VALUES 
                            (NULL, 
                            '$n', 
                            '$sn', 
                            '$i');";


    // Prepare sql statement
    $this->db->query($sql);

    // Execute sql statement
    $this->db->execute();

    // Check if query is executed (1 row made)
    if ($this->db->rowCount() === 1)
    {
        // This happens if query is executed successfully
        return "Success";
    } else {
        // This happens if query fails
        return "Failed";
    }
  }
  public function getRequest() {
    $sql = "SELECT * FROM `request`;";
    $this->db->query($sql);
    $request = $this->db->resultSet();
    return $request;
  }
}
