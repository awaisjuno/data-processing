<?php

namespace App\Services;

use App\Services\ExcelImportService;
use App\Model\UserModel;

class TrainingDataService
{
    private $excelService;
    private $userModel;

    public function __construct()
    {
        $this->excelService = new ExcelImportService();
        $this->userModel = new UserModel();
    }

    public function importAndSave(string $filePath): bool
    {
        $data = $this->excelService->process($filePath);

        if (!is_array($data) || empty($data)) {
            return false;
        }

        foreach ($data as $row) {
            $label = $row[0] ?? null;
            $synonyms = array_filter(array_slice($row, 1));

            if (!empty($label) && !empty($synonyms)) {
                $insertData = [
                    'label' => $label,
                    'data' => implode(', ', $synonyms)
                ];

                $this->userModel->insertTrainingData($insertData);
            }
        }

        return true;
    }
}
