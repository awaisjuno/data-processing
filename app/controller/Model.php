<?php

namespace App\Controller;
use System\Controller;
use System\Helpers\Session;
use App\Model\UserModel;
use PhpOffice\PhpSpreadsheet\IOFactory;

class Model extends Controller
{
    private $userModel;
    public function __construct()
    {
        parent::__construct();
        $this->session = new Session();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $models = $this->userModel->fetchModel();
        $this->load->view('pages/header');
        $this->load->view('user/model', ['models' => $models]);

        if(isset($_POST['add'])) {

            $data = array(
                'model_name' => $this->post('model_name'),
                'model_description' => $this->post('model_description'),
                'create_date' => date('Y-m-d H:i:s')
            );

            //Calling Mode to Insert
            $this->userModel->createModel($data);

        }

    }

    function training()
    {
        $this->load->view('pages/header');
        $this->load->view('user/training');

        if (isset($_POST['add'])) {

            $file = $_FILES['file'];
            $fileName = $file['name'];
            $fileTmpPath = $file['tmp_name'];
            $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        
            if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        
                $file = $_FILES['file'];
                $fileType = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        
                if ($fileType == 'xlsx' || $fileType == 'xls') {
        
                    $uploadDir = 'uploads/';
                    $filePath = $uploadDir . basename($file['name']);
        
                    if (move_uploaded_file($file['tmp_name'], $filePath)) {
        
                        echo "File uploaded successfully!<br>";
        
                        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($filePath);
                        $sheet = $spreadsheet->getActiveSheet();
        
                        $data = [];
                        foreach ($sheet->getRowIterator() as $row) {
                            $cellIterator = $row->getCellIterator();
                            $cellIterator->setIterateOnlyExistingCells(false);
        
                            $rowData = [];
                            foreach ($cellIterator as $cell) {
                                $rowData[] = $cell->getValue();
                            }
                            $data[] = $rowData;
                        }
        
                        echo '<pre>';
                        print_r($data);
                        echo '</pre>';
        
                    } else {
                        echo "Error uploading file.";
                    }
        
                } else {
                    echo "Invalid file type.";
                }
            } else {
                echo "No file uploaded or upload error.";
            }
        }
        

    }
}
