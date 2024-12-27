<?php

namespace App\Helpers;

class ZipHelper {

    public static function createZip($sourceFolder, $outputZip) {
        $zip = new \ZipArchive();
        if ($zip->open($outputZip, \ZipArchive::CREATE | \ZipArchive::OVERWRITE) === TRUE) {
            $sourceFolder = rtrim($sourceFolder, '/');
            $sourceFolderName = basename($sourceFolder);

            if (is_dir($sourceFolder)) {
                $iterator = new \RecursiveDirectoryIterator($sourceFolder);
                $files = new \RecursiveIteratorIterator($iterator);

                foreach ($files as $file) {
                    // Exclude "." and ".." from zip file
                    if (!$file->isDir()) {
                        $filePath = $file->getPathName();
                        $relativePath = substr($filePath, strlen($sourceFolder) + 1);

                        $zip->addFile($filePath, $sourceFolderName . '/' . $relativePath);
                    }
                }
            }
            
            $zip->close();
            return true;
        }
        return false;
    }
}
?>
