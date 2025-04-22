<?php

namespace App\Controller;
use System\Controller;
use System\Helpers\Session;
use App\Model\UserModel;
use App\Services\ExcelImportService;
use App\Services\TrainingDataService;

class DataSet extends Controller
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
        $this->load->view('panel/sidebar');
        $dataset = $this->userModel->fetchModel();
        $this->load->view('panel/dataset',  ['models' => $dataset]);
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


                        //Save Data in the Database
                        $trainingService = new TrainingDataService();
                        $saveData = $trainingService->importAndSave($filePath);

                        if ($saveData) {
                            echo "<p style='color:green;'>Training data saved successfully.</p>";
                        } else {
                            echo "<p style='color:red;'>No valid data found in file.</p>";
                        }

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

