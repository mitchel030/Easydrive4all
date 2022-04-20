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
            'naam'=> $_POST['naam'],
            'studentennummer'=> $_POST['studentennummer'],
            'item'=> $_POST['item']
          ];
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
          $requestRows .= "<td>".$r->studentenid."</td>";
          $requestRows .= "<td>".$r->naam."</td>";
          $requestRows .= "<td>".$r->studentennummer."</td>";
          $requestRows .= "<td>".$r->item."</td>";
          $requestRows .= "</tr>";
          $requestRows .= "<td>
														<a class='btn btn-xs btn-info' href=/students/edit?studentenid=$r->studentenid>Edit
													</td>";
			$requestRows .= "<td>
														<a class='btn btn-xs btn-info' href=/students/destroy?studentenid=$r->studentenid>Delete
													</td>";
			$requestRows .= "</tr>";
        }


      $this->view('students/request', $request = [
        "message" => $data,
        "requestRows" => $requestRows
      ]);
        

    } 
  }
  public function edit()
	{
		$data = $this->userModel->edit();
		$this->view('students/edit', $data);
	}

	//Updates the information in database through userModel
	public function update($studentenid)
	{
		$naam = $_POST['naam'];
    var_dump($naam);
		$studentennummer = $_POST['studentennummer'];
		$item = $_POST['item'];

		$this->userModel->update($studentenid, $naam, $studentennummer, $item);
		//Redirect to students view
		$this->redirect('students');
	}

	//Delete through userModel and redirect to students view
	public function destroy()
	{
		$this->userModel->destroy();

		$this->redirect('students');
	}

}