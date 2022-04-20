<?php
class Students extends Controller
{
  public function __construct()
  {
    $this->userModel = $this->model('Student');
  }

  public function index()
  {
    $this->view('students/index');
  }

  public function request()
  {
    //Default value
    $data = null;
    // Check if POST is send
    if (isset($_POST)) 
      {
        // Check if submit button is pressed
        if (isset($_POST["submit"])) 
        {
          // Put post values into variables
          $naam = $_POST["naam"];
          $studentennummer = $_POST["studentennummer"];
          $item = $_POST["item"];

          //Check if variables are not empty
          if (!empty($naam) && !empty($studentennummer) && !empty($item)) 
          {
            //Initiate requestArticle function
            $message = $this->userModel->requestArticle($naam, $studentennummer, $item);

            if ($message = "success") {
              //Gelukt
              $data = "<h1>".$message."</h1>";
            } else {
              //Gefaald
              $data = "<h1>".$message."</h1>";
            }
              
          }
        }
        

}

    $this->view('students/request', $data);
  }
}