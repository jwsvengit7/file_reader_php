<?php
include "config/path.php";

class FileReader{
    public function __construct(){

    }

    public function readFile(){
        $path= new Path();

        if ($path->getReader()) {
            $content = '';
        
            while (($line = fgets($path->getReader())) !== false) {
                $content .= $line; 
            }
        
            fclose($path->getReader()); 
            $destinationFile = $path->getDestination();
            file_put_contents($destinationFile, $content);
        
            echo "Content copied successfully!";
        } else {
            echo "Unable to open source file.";
        }
    }
}