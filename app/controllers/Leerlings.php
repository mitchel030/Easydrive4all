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
                    <td><a href='" . URLROOT . "/leerlings/create/$value->email'><i class='bi bi-pencil-square'></i></a></td>
                  </tr>";           
    }
    
    $data = [
      'title' => '<h1>Overzicht Leerlingen</h1>',
      'leerlings' => $rows
    ];
    // hier word de data die word opgehaald geviewd op de instructor/index_leerlings
    $this->view('instructors/index_leerlings', $data);
  }
  
  public function create() {
    /**
     * Default waarden voor de view create.php
     */

    $data = [
    'title' => '<h3>Voeg een mededeling toe</h3>',
    'name' => '',
    'mededelingenstudent' => '',
    'mededelingenstudentError' => ''
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $data = [
        'title' => '<h3>Voeg een mededeling toe</h3>',
        'mededelingenstudent' => trim($_POST['mededelingenstudent']),
        'mededelingenstudentError' => ''
        ];

        $data = $this->validateCreateForm($data);
    
        if (empty($data['mededelingenstudent']))
        {
            if ($this->leerligModel->createLeerling($_POST)) {
                header("Location:" . URLROOT . "/leerlings/index");
            } else {
                echo "<div class='alert alert-danger' role='alert'>
                        Er heeft een interne servererror plaatsgevonden<br>probeer het later nog eens...
                    </div>";
                header("Refresh:3; url=" . URLROOT . "/leerlings/index");
            }
        }
    } 

    $this->view("instructors/create_leerlings", $data);    
}
 
  }
