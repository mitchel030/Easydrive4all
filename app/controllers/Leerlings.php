<?php
class Leerlings extends Controller 
{

  public function __construct() 
  {
    $this->leerlingModel = $this->model('Leerling');
  }

  public function index() 
  {
    
      // Haal via de method getLeerlings() uit de model Leerlngs de records op
      // uit de database dit word gedaan in de model
    $leerlings = $this->leerlingModel->getLeerlings();

    // Maakt de inhoud voor de tbody in de view
    $rows = '';
    foreach ($leerlings as $value)
    {
      $rows .= "<tr>
                  <td>" . htmlentities($value->Datum, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->Naam, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td><a href='" . URLROOT . "/leerlings/create/$value->ID'><i class='bi bi-x-square'></i></a></td>
                </tr>";
    }

    $data = [
      'title' => '<h1>les overzicht Konijn</h1>',
      'leerlings' => $rows
    ];
    $this->view('leerlings/index', $data);
  }

  // dit is voor het inserten van de reden voor annuleren dat word verstuurd naar de database tabel annulerenlessen
  public function create($id) 
  {
  // Default waarden voor de view create.php
    $data = [
    'title' => '<h3>Voeg een reden van annulering</h3>',
    'Reden' => '',
    'RedenError' => ''
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
  
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  
        $data = 
        [
        'title' => '<h3>Voeg een reden van annulering</h3>',
        'Reden' => trim($_POST['Reden']),
        'RedenError' => ''
        ];
  
        $data = $this->validateCreateForm($data);
    
        // dit is voor als het veld leeg is 
        if (empty($data['RedenError'])) 
        {
          // al de reden de inserten naar de tabel met succes is gelukt krijg je de volgende melding 
          // hieronder "de reden van annulering is verstuurd".
          // mocht het niet gelukt zijn dan voert die else uit
            if ($this->leerlingModel->createLeerling($_POST, $id)) 
            {
              echo "<div class='alert alert-success' role='alert'>
              De reden van annulering is verstuurd </div>";
                header("Refresh:3; url=" . URLROOT . "/leerlings/index");
            } 
            else
            {
                echo "<div class='alert alert-danger' role='alert'>
                        Er heeft een interne servererror plaatsgevonden<br>probeer het later nog eens...
                    </div>";
                header("Refresh:3; url=" . URLROOT . "/leerlings/index");
            }
        }
    } 
    
  // hier geef je aan dat de view hiervoor staat in het map views daarna map leerlings en daarna create
    $this->view("leerlings/create", $data);    
  }
  
  private function validateCreateForm($data) 
  {
    
  // geen reden toegevoegd voert hier dus uit en kijkt of het leeg is zo ja verstuurt die niks door en krijg je de melding
    if (empty($data['Reden'])) {
    $data['RedenError'] = 'Geen reden toegevoegd';
    } 
    return $data;
  }
  

}
