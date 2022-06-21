<?php
class Instructor
{
  private $db;

  private $table = 'lessen';
  public function __construct()
  {
    $this->db = new Database;
  }
  public function getData() {
    // Allow to use the query within PDO
    $this->db->query
    ("SELECT * FROM lessen
    INNER JOIN leerling ON lessen.id=leerling.id    ");

    // Execute and return an array from given SQL statement
    $result = $this->db->resultSet();

    return $result;
}
public function comment()
	{
		$id = $_GET["id"];
		$this->db->query("SELECT * FROM {$this->table} WHERE id = {$id}");
		return $this->db->single();
	}

	//Create update function which updates the array that was selected in the comment function
	public function update($id, $datum, $leerling, $opmerking)
	{
		$this->db->query("UPDATE {$this->table} SET datum = :datum, leerling = :leerling, opmerking = :opmerking WHERE id = {$id}");

		$this->db->bind(':datum', $datum);
		$this->db->bind(':leerling', $leerling);
		$this->db->bind(':opmerking', $opmerking);

		return $this->db->execute();
	}
}
