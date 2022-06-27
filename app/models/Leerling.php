<?php
  class Leerling 
  {
    private $db;

    public function __construct() 
    {
      $this->db = new Database();
    }

    public function getLeerlings() 
    {
      try
      {
        // haalt hier data op van verschillende tabbellen met behulp van inner join
        // als dit niet gebeurd komt de catch in actie en verstuurd die 
        // het error naar de log
        $this->db->query("    SELECT         lessen.ID 
                                            ,instructeur2.Naam 
                                            ,lessen.Datum

                              FROM          leerling2 

                              INNER JOIN    lessen ON lessen.Leerling = leerling2.Id
                              INNER JOIN    instructeur2 ON instructeur2.Email=lessen.Instructeur 

                              WHERE         leerling2.Naam = 'Konijn' 
                              AND           lessen.Datum > CURRENT_DATE() 
                              AND           lessen.Status = 'G';
          ");
        $result = $this->db->resultSet();
        return $result;
      }
      catch(PDOException $e) 
      {
        logger(__FILE__, __METHOD__, __LINE__, $e->getMessage());
        return 0;
      }

    //  hier geef je aan wat je wilt inserten en in welk tabel. het is hier de tabel annuleren lessen. 
// in dit tabel wil je de les en reden inserten. als dit niet gebeurd komt de catch in actie en verstuurd die 
// het error naar de log
    }
    public function createleerling($post, $id) {
      try{
        $this->db->query("INSERT INTO annulerenlessen(ID, les, reden)
        VALUES(NULL, :Les, :Reden)");
        $this->db->bind(':Les', $id, PDO::PARAM_STR);
        $this->db->bind(':Reden', $post["Reden"], PDO::PARAM_STR);
        return $this->db->execute();

      }
      catch (PDOException $e) 
      {
        logger(__FILE__, __METHOD__, __LINE__, $e->getMessage());
        return 0;
    }
      
    }
  }

?>