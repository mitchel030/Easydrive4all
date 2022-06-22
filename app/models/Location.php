<?php
class Location
{
  private $db;
  private $table = 'lessen1';


  public function __construct()
  {
    $this->db = new Database;
  }
  public function getData() {
    // Allow to use the query within PDO
    //$this->db->query
    //("SELECT * FROM lessen1
    //INNER JOIN leerling1 ON lessen1.student=leerling1.id  ");

    // Execute and return an array from given SQL statement
    $this->db->query("SELECT * 
    FROM leerling1 
    INNER JOIN lessen1 
    ON lessen1.student = leerling1.id 
    INNER JOIN instructors1 
    ON instructors1.email = lessen1.instructeur
    WHERE leerling1.namestudent = 'Konijn' 
    AND lessen1.datumlessen > CURRENT_DATE()");
    $result = $this->db->resultSet();

    return $result;
}
public function edit()
	{
		$id = $_GET["id"];
		$this->db->query("SELECT * FROM {$this->table} WHERE id = {$id}");
		return $this->db->single();
	}
    public function update($id, $datumlessen, $student, $straat, $woonplaats, $naaminstructor)
	{
		$this->db->query("UPDATE {$this->table} SET datumlessen = :datumlessen, student = :student, straat = :straat, woonplaats = :woonplaats, naaminstructor = naaminstructor WHERE id = {$id}");

		$this->db->bind(':datumlessen', $datumlessen);
		$this->db->bind(':student', $student);
		$this->db->bind(':straat', $straat);
		$this->db->bind(':woonplaats', $woonplaats);
        $this->db->bind(':naaminstructor', $naaminstructor);

		return $this->db->execute();
	}


}
