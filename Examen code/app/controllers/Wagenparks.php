<?php
// namespace TDD\controllers;

// use TDD\libraries\Controller;

class Wagenparks extends Controller {
    private $wagenparkModel;

    public function __construct() {
        $this->wagenparkModel = $this->model('Wagenpark');
    }

    public function index()
    {
        $itemsData = $this->wagenparkModel->readWagenparks();
        $rows = "";
        // For each loop to get data
        foreach($itemsData as $value)
        {
            $rows .= '<tr>
            <th scope="row">' . $value->Nummerbord . '</th>
            <td> '. $value->Merk .'</td>
            <td>'.$value->Type.'</td>
            <td>'.$value->Instructeurnaam.'</td>';
            $rows .= '</tr>';
        }

        $data = [
            'title' => "Hoi",
            'itemData'=>$rows
        ];

        $this->view("wagenpark/index", $data);
    }
}