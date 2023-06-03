<?php

header('Content-Type: text/plain; charset=utf-8');

try {
    
   // 
    if (!isset($_FILES['upfile']['error']) ||
        is_array($_FILES['upfile']['error']))
        {
        throw new RuntimeException('Invalid parameters.');
        }

    // error check
    switch ($_FILES['upfile']['error']) {
        case UPLOAD_ERR_OK:
            break;
        case UPLOAD_ERR_NO_FILE:
            throw new RuntimeException('No file sent.');
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            throw new RuntimeException('Exceeded filesize limit.');
        default:
            throw new RuntimeException('Unknown errors.');
    }

    // sprawdzenie wielkosci pliku
    if ($_FILES['upfile']['size'] > 10000000000) {
        throw new RuntimeException('Exceeded filesize limit.');
    }

    // sprawdzenie typu pliku
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    if (false === $ext = array_search(
        $finfo->file($_FILES['upfile']['tmp_name']),
        array(
            'rar' => 'application/x-rar-compressed',
            'rar' => 'application/vnd.rar',
            'rar' => 'application/octet-stream',
            'rar' => 'application/zip',
            'rar' => 'application/x-rar',
            'zip' => 'application/zip',
        ),
        true
    )) {
        throw new RuntimeException('Invalid file format.');
    }

    $nazwa = $_FILES['upfile']['name'];
    // upload pliku
    if (!move_uploaded_file(
        $_FILES['upfile']['tmp_name'],
        sprintf('./Gry/'.$nazwa.'',
            sha1_file($_FILES['upfile']['tmp_name']),
            $ext
        )
    )) {
        throw new RuntimeException('Failed to move uploaded file.');
    }
    echo 'File is uploaded successfully.';

} catch (RuntimeException $e) {
    echo $e->getMessage();
}

//$filename = pathinfo($_FILES['upfile']['name'], PATHINFO_FILENAME);
//mkdir('./Gry/'.$filename.'', 0700);

$file = './Gry/'.$nazwa.'';
$path = pathinfo(realpath($file), PATHINFO_DIRNAME);

$zip = new ZipArchive;
$res = $zip->open($file);
if ($res === TRUE) {
  $zip->extractTo($path);
  $zip->close();
} 


header( "location: stronaGlownaZalogowany.php", true, 301 );


?>