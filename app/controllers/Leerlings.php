<?php
class Leerlings extends Controller {

  public function __construct() {
    $this->leerlingModel = $this->model('Leerling');
  }

  public function index() {
    /**
     * Haal via de method getLeerlings() uit de model Fruit de records op
     * uit de database
     */
    $leerlings = $this->leerlingModel->getLeerlings();

    /**
     * Maak de inhoud voor de tbody in de view
     */
    $rows = '';
    foreach ($leerlings as $value){
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


}
