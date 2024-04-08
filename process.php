<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["nome"];
  $surname = $_POST["cognome"];
  $email = $_POST["email"];
  $agree = isset($_POST["trattamentodatipersonali"]) ? $_POST["trattamentodatipersonali"] : NULL;
  $note = $_POST["note"];
  
  $json = json_encode(array(
    "nome" => $name,
    "cognome" => $surname,
    "email" => $email,
    "trattamentodatipersonali" => $agree,
    "note" => $note
  ), JSON_PRETTY_PRINT);
 
  file_put_contents("JSON/form_data.json", $json);
  
  header("Refresh: 0; url=contatti.html");
  exit;
}
?>