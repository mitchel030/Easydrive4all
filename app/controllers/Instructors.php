<?php
class Instructors extends Controller {

  public function __construct() {
    $this->instructorModel = $this->model('instructor');
  }
  // dit is voor read
  public function index() 
  {
    
    //Haal via de method getInstructors() uit de model Instructors de records op
    //uit de database
    $instructors = $this->instructorModel->getInstructors();
    $rows = '';
    // hier geef je instructors aan als value
    foreach ($instructors as $value)
    {
      //Maak de inhoud voor de tbody in de view
      $rows .= "<tr>
                    <td>" . htmlentities($value->InstructeurVoornaam, ENT_QUOTES, 'ISO-8859-1') . "</td>
                    <td>" . htmlentities($value->Voornaam, ENT_QUOTES, 'ISO-8859-1') . "</td>
                    <td>" . htmlentities($value->Tussenvoegsel, ENT_QUOTES, 'ISO-8859-1') . "</td>
                    <td>" . htmlentities($value->Achternaam, ENT_QUOTES, 'ISO-8859-1') . "</td>
                    <td>" . htmlentities($value->Woonadres, ENT_QUOTES, 'ISO-8859-1') . "</td>
                    <td>" . htmlentities($value->Datum, ENT_QUOTES, 'ISO-8859-1') . "</td>
                    <td>" . htmlentities($value->Tijd, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  </tr>";
    }
    $data = [
      'title' => '<h1>Planning lessen</h1>',
      'instructors' => $rows
    ];
    // hier word de data die word opgehaald geviewd op de instructor/index
    $this->view('instructors/index', $data);
  }
  
  }
