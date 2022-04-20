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
  public function edit()
	{
		$studentenid = $_GET["studentenid"];
		$this->db->query("SELECT * FROM {$this->table} WHERE studentenid = {$studentenid}");
		return $this->db->single();
	}

	//Create update function which updates the array that was selected in the edit function
	public function update($studentenid, $naam, $studentennummer, $item)
	{
		$this->db->query("UPDATE {$this->table} SET naam = :naam, studentennummer = :studentennummer, item = :item WHERE studentenid = {$studentenid}");

		$this->db->bind(':naam', $naam);
		$this->db->bind(':studentennummer', $studentennummer);
    $this->db->bind(':item', $item);

		return $this->db->execute();
	}

	//Gets ID, deletes from database through SQL Query and executes
	public function destroy()
	{
		$studentenid = $_GET["studentenid"];
		$this->db->query("DELETE FROM {$this->table} WHERE studentenid = {$studentenid}");
		return $this->db->execute();
	}
}
