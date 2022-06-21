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
