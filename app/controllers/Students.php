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
          $data = [
            'instructorname'=> $_POST['instructorname'],
            'drivinglessondate'=> $_POST['drivinglessondate'],
          ];
          // Put post values into variables
          $instructorname = $_POST["instructorname"];
          $drivinglessondate = $_POST["drivinglessondate"];

          //Check if variables are not empty
          if (!empty($instructorname) && !empty($drivinglessondate)) 
          {
            //Initiate requestArticle function
            $message = $this->userModel->requestArticle($instructorname, $drivinglessondate);

            if ($message = "success") {
              //Gelukt
              $data = "<h1>".$message."</h1>";
              header("Location: request");
            } else {
              //Gefaald
              $data = "<h1>".$message."</h1>";
            }
              
          }
        }

        $requests = $this->userModel->getRequest();

        $requestRows = "";
        foreach ($requests as $r) {
          $requestRows .= "<tr>";
          $requestRows .= "<td>".$r->ID."</td>";
          $requestRows .= "<td>".$r->date."</td>";
          $requestRows .= "<td>".$r->name."</td>";
          $requestRows .= "</tr>";
        }


      $this->view('students/request', $request = [
        "message" => $data,
        "requestRows" => $requestRows
      ]);
        

    } 
  }
}