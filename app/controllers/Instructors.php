<?php
class Instructors extends Controller {

  public function __construct() {
    $this->instructorModel = $this->model('instructor');
  }
  // dit is voor read
  public function index() 
  { 
  // Haal via de method getInstructors() uit de model Instructors de records op
  // uit de database
    $instructors = $this->instructorModel->getInstructors();
    $rows = '';
    // hier geef je instructors aan als value
    foreach ($instructors as $value){
      //Maak de inhoud voor de tbody in de view
      $rows .= "<tr>
                  <td>" . htmlentities($value->Naam, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td><a href='" . URLROOT . "/instructors/create/'><i class='bi bi-pencil-square'></i></a></td>
                </tr>";             
    }
    $data = [
      'title' => '<h1>Overzicht instructeurs</h1>',
      'instructors' => $rows
    ];
    // hier word de data die word opgehaald geviewd op de instructor/index
    $this->view('instructors/index_instructors', $data);
  }

  public function create() {
    /**
     * Default waarden voor de view create.php
     */

    $data = [
    'title' => '<h3>Voeg een mededeling toe</h3>',
    'name' => '',
    'mededelingeninstructeurs' => '',
    'mededelingeninstructeursError' => ''
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $data = [
        'title' => '<h3>Voeg een mededeling toe</h3>',
        'mededelingeninstructeurs' => trim($_POST['mededelingeninstructeurs']),
        'mededelingeninstructeursError' => ''
        ];

        $data = $this->validateCreateForm($data);
    
        if (empty($data['mededelingeninstructeurs']))
        {
            if ($this->instructorModel->createInstructor($_POST)) {
                header("Location:" . URLROOT . "/instructors/index");
            } else {
                echo "<div class='alert alert-danger' role='alert'>
                        Er heeft een interne servererror plaatsgevonden<br>probeer het later nog eens...
                    </div>";
                header("Refresh:3; url=" . URLROOT . "/instructors/index");
            }
        }
    } 

    $this->view("instructors/create_instructors", $data);    
}
 

  
  }
