<?php
  class Leerling {
    private $db;

    public function __construct() {
      $this->db = new Database();
    }

    public function getLeerlings() {
      try{
        $this->db->query("SELECT lessen.ID ,instructeur2.Naam ,lessen.Datum FROM leerling2 INNER JOIN lessen ON lessen.Leerling = leerling2.Id INNER JOIN instructeur2 ON instructeur2.Email=lessen.Instructeur WHERE leerling2.Naam = 'Konijn' AND lessen.Datum > CURRENT_DATE()");

        $result = $this->db->resultSet();
  
        return $result;
      }catch(PDOException $e) {
        logger(__FILE__, __METHOD__, __LINE__, $e->getMessage());
        return 0;
      }

     
    }
   
  }

?>