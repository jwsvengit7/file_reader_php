<?php

class Path {
    private $sourceFile = "C:\\xampp\\htdocs\\filereader\\text.txt";
    private  $destinationFile = "C:\\xampp\\htdocs\\filereader\\read.txt"; 
    private $openFile;
    public function __construct(){
        $this->openFile = fopen($this->sourceFile, "r");
    }
    public function getSourceFile(){
        return $this->sourceFile;
    }

    public function getDestination(){
        return $this->destinationFile;
    }
    public function getReader(){
        return $this->openFile;
    }

  
}
?>