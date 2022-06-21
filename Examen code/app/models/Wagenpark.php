<?php

class Wagenpark{

   private $db;

   public function __construct()
   {
      $this->db = new Database;
   }
   // Read Table Items
   public function readWagenparks()
   {
      $this->db->query("SELECT * FROM wagenpark");
      $result = $this->db->resultSet();

      return $result;
   }
}

