<?php

namespace POO_04\heranca_119;

//require __DIR__ . '/Upload.php';

use POO_04\heranca_119\Upload;

// "É um"?
//UploadFoto = Filha | Upload = Pai
class UploadFoto extends Upload
{
    public $file;

    public function __construct($file)
    {
        $this->file = $file;
    }


}