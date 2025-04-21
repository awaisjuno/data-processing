<?php

namespace App\Controller;
use System\Controller;
use System\Helpers\Session;
use App\Model\UserModel;
use App\Services\ExcelImportService;

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

    public function training()
    {
        $this->load->view('pages/header');
        $this->load->view('user/training');
    
        if (isset($_POST['add'])) {
            $file = $_FILES['file'];
            $fileName = $file['name'];
            $fileTmpPath = $file['tmp_name'];
            $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    
            if ($file['error'] === UPLOAD_ERR_OK) {
    
                $uploadDir = 'uploads/';
                $filePath = $uploadDir . basename($fileName);
    
                if (move_uploaded_file($fileTmpPath, $filePath)) {
    
                    if ($fileType == 'xlsx' || $fileType == 'xls') {
                        $service = new ExcelImportService();
                        $data = $service->process($filePath);
                    } else {
                        echo "Unsupported file type";
                        return;
                    }

    
                } else {
                    echo "Failed to move uploaded file.";
                }
    
            } else {
                echo "No file uploaded or upload error.";
            }
        }
    }

}    

