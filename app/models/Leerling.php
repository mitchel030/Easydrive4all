<?php
  class Leerling {
    private $db;

    public function __construct() {
      $this->db = new Database();
    }

    public function getLeerlings() {
      try{
        // haalt hier data op van verschillende tabbellen met behulp van inner join
        $this->db->query("    SELECT        lessen.ID 
                                            ,instructeur2.Naam 
                                            ,lessen.Datum

                              FROM          leerling2 

                              INNER JOIN    lessen ON lessen.Leerling = leerling2.Id
                              INNER JOIN    instructeur2 ON instructeur2.Email=lessen.Instructeur 

                              WHERE         leerling2.Naam = 'Konijn' 
                              AND           lessen.Datum > CURRENT_DATE() 
                              AND         lessen.Status = 'G';
          ");

        $result = $this->db->resultSet();
  
        return $result;
      }catch(PDOException $e) {
        logger(__FILE__, __METHOD__, __LINE__, $e->getMessage());
        return 0;
      }

    //  de insert createleerling hier word gebruikt om aan te geven wat er word ge insert en waar hier is dit dus annulerenlessen
    }
    public function createleerling($post, $id) {
      try{
        $this->db->query("INSERT INTO annulerenlessen(ID, les, reden)
        VALUES(NULL, :Les, :Reden)");
        
        $this->db->bind(':Les', $id, PDO::PARAM_STR);
        $this->db->bind(':Reden', $post["Reden"], PDO::PARAM_STR);
      

        return $this->db->execute();
      }catch (PDOException $e) {
        logger(__FILE__, __METHOD__, __LINE__, $e->getMessage());
        return 0;
    }
      
    }

    public function getSingleLeerling($id){
      try{
      $this->db->query("SELECT * FROM `lessen` WHERE id = :id");
      $this->db->bind(':id', $id, PDO::PARAM_INT);
      return $this->db->single();
      }catch(PDOException $e) {
        logger(__FILE__, __METHOD__, __LINE__, $e->getMessage());
        return 0;
      }


    }
  }

?>