<?php
class Student
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // Request article function
  public function requestArticle($product, $amount, $reason) {
    $p = $product;
    $a = $amount;
    $r = $reason;

    //SQL Statement
    $sql = "INSERT INTO `request` 
                            (`id`,
                             `product`, 
                             `amount`, 
                             `description`) 
                            VALUES 
                            (NULL, 
                            '$p', 
                            '$a', 
                            '$r');";


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
}
