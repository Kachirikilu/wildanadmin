<?php

namespace App\Controllers;
use App\Helpers\ZipHelper;

class TugasController extends BaseController
{

    protected $kolomTugas;
    protected $createAdmin;
    public function __construct()
    {
        $this->kolomTugas = new \App\Models\TugasModels();
        $this->createAdmin = new \App\Models\CreateModels();
    }

//     use App\Helpers\ZipHelper;

// class MyController extends BaseController {

    public function createZip() {
        $sourceFolder = 'path/to/source/folder';
        $outputZip = 'path/to/output.zip';

        if (ZipHelper::createZip($sourceFolder, $outputZip)) {
            echo 'Zip created successfully!';
        } else {
            echo 'Failed to create zip.';
        }
    }

// }


    public function save()
    {

        $idArtikel = $this->request->getVar('inputID');

        $slugArtikel = $this->createAdmin->where('ID', $idArtikel)->first();
        $Artikel = $slugArtikel['Slug'];
        $Judul = $slugArtikel['Judul'];

        $InputNama = $this->request->getVar('inputNama');
        // $HurufKecil = strtolower($InputNama);
        $Nama = ucwords($InputNama);
       

        $NIM = $this->request->getVar('inputNIM');
        $Kelas = $this->request->getVar('inputKelas');
        
        $tugas = $this->request->getFile('inputTugas');
        if ($tugas->getError() == 4) {
            $tugasname = '';
        } else {
            $outputPicture = $this->request->getFile('inputTugas');

            $newName = $Kelas . '_' . $NIM . '_' . $Nama . '_' . $Judul;
            $ext = $tugas->getClientExtension();

            $tugasname = $newName . '.' . $ext;

            $mainDirectory = 'FileTugas/';
            $JudulDirectory = $mainDirectory . $Judul . '/';
            

            if (!is_dir($JudulDirectory)) {
                mkdir($JudulDirectory, 0777, true);
            }
        
            $KelasDirectory = $JudulDirectory . $Kelas . '/';
            if (!is_dir($KelasDirectory)) {
                mkdir($KelasDirectory, 0777, true);
            }
            
            $outputPicture->move($KelasDirectory, $tugasname);
        }

        $this->kolomTugas->save([
            'IDArtikel' => $idArtikel,
            'Nama' => $Nama,
            'NIM' => $NIM,
            'Kelas' => $Kelas,
            'File' => $tugasname,
            'Time' => $this->request->getVar('inputTime'),
            'Date' => $this->request->getVar('inputDate')
        ]);

        return redirect()->to('article/' . $Artikel);
    }

 

    // public function downloadFolder($judulArtikel) {
    //     // Konstruksi path lengkap ke folder berdasarkan $judulArtikel

    //     $sourceFolder = FCPATH . 'FileTugas\\' . $judulArtikel;
    //     $outputZip = FCPATH . 'FileTugas\\' . $judulArtikel . '.zip';

    //     if (ZipHelper::createZip($sourceFolder, $outputZip)) {
    //         echo 'Zip created successfully!';
    //     } else {
    //         echo 'Failed to create zip.';
    //     }

    //     // $folderPath = FCPATH . 'FileTugas\\' . $judulArtikel;
    //     // $folderContents = scandir($folderPath);

    //     // $zip = new ZipArchive();
    //     // $zipFileName = FCPATH . 'FileTugas\\' . $judulArtikel . '.zip';

    //     // if ($zip->open($zipFileName, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
    //     //     foreach ($folderContents as $file) {
    //     //         $filePath = $folderPath . '/' . $file;
    //     //         if (is_file($filePath)) {
    //     //             $zip->addFile($filePath, $file);
    //     //         }
    //     //     }
    //     //     $zip->close();
    //     // }

    
    //     // Gunakan Response object untuk mengirimkan folder sebagai tampilan unduhan
    //     // return $this->response->download($folderPath, null)->setFileName($judulArtikel . '.zip');
    //     // return $this->response->download($zipFileName, null)->setFileName($judulArtikel . '.zip');
    // }
    
}
