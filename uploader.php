<?php
 
  $textUpload = "";
  $timestamp = date('YmdHms');
 
  if ($_FILES['userfile']):
      $uploadfile = __DIR__ . '/uploads/'.$timestamp.'.jpg';
    if (move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadfile)) {
      $textUpload = "File is uploaded";
    } else {
      $textUplaod = "Upload fail";
    }
  endif;
 
  if (preg_match('/^text\/html/', $_SERVER['HTTP_ACCEPT'])) : 
  else: 
  header( 'Content-Type: application/json; charset=utf-8', true ); 
  echo json_encode( array("message" => "Upload is OK")  );
  endif; ?>