<?php
class Leerlings extends Controller {

  public function __construct() {
    $this->leerlingModel = $this->model('leerling');
  }
  // dit is voor read
  public function index() 
  {
    // Haal via de method getLeerlings() uit de model Leerling de records op
    // uit de database
    $leerlings = $this->leerlingModel->getLeerlings();

    $rows = '';
    // hier geef je instructors aan als value
    foreach ($leerlings as $value)
    {
      // Maak de inhoud voor de tbody in de view
      $rows .= "<tr>
                    <td>" . htmlentities($value->Naam, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  </tr>";           
    }
    
    $data = [
      'title' => '<h1>Overzicht Leerlingen</h1>',
      'leerlings' => $rows
    ];
    // hier word de data die word opgehaald geviewd op de instructor/index_leerlings
    $this->view('instructors/index_leerlings', $data);
  }
  
 
  }
