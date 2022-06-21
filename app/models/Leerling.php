<?php
  class Leerling {
    private $db;

    public function __construct() 
    {
      $this->db = new Database();
    }
    // dit stukje is voor de index
    // je maakt hier een fucntie getinstructor en je maakt hier onder een select dus je pakt data uit je database
    // in dit geval zijn dit er drie met gebruik van innerjoin en deze functie roep je aan bij je controller
    public function getLeerlings() 
    {
      // dit is een try hier in moet de code die uitgevoerd moet worden dus het ene wat die hoort te doen
      try{
       $this->db->query("SELECT leerling1.Naam ,mededelingenstudent.Opmerking FROM leerling1 INNER JOIN mededelingenstudent ON mededelingenstudent.Student = leerling1.email;");
       $result = $this->db->resultSet();
       return $result;
// hier onder is een catch deze is samen met de try dus als de try niet goed lukt/werkt dan vangt die deze hier op in de cath
// en word dit doorgestuurd naar je logbestand
      } catch (PDOException $e) {
        logger(__FILE__, __METHOD__, __LINE__, $e->getMessage());
        return 0;
    }
  }
   
  }

?>